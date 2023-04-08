<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\WebsitePage;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Helpers\VariableHelper;
use App\Models\WebsiteOrganization;

class PageController01 extends Controller
{
	public function home(Request $req)
	{
		return view('zegen.pages.index' . config('app.zegen.home_layout'), [
			'variables' => VariableHelper::getVariables(),
		]);
	}
	public function contact(Request $req)
	{
		return view('zegen.pages.contact', [
			'variables' => VariableHelper::getVariables(),
		]);
	}

	public function organization_details(string $slug, Request $req)
	{
		$website = Website::find(config('app.site_id'));
		$organization = Organization::whereTenantId($website->tenant_id)
			->where('slug', $slug)->first();
		if (is_null($organization))
			abort(404);
		if (is_null($organization->website_page_id))
			abort(404);
		return view('zegen.pages.page', [
			'breadcrumbs' => [
				[
					'name' => config('app.pretty_name.public_pages'),
					'link' => route('public_page_index')
				],
			],
			"page_name" => $organization->WebsitePage->name,
			"page_link" => route('public_page_details', ["slug" => $slug]),
			'slug' => $slug,
			'page' => $organization->WebsitePage,
			'variables' => VariableHelper::getVariables(),
		]);
	}
	public function public_page_details($slug, Request $req)
	{
		$page = WebsitePage::WhenWebsite(config('app.site_id'))
			->where('slug', $slug)->first();
		if (is_null($page))
			abort(404);
		return view('zegen.pages.page', [
			'breadcrumbs' => [
				[
					'name' => config('app.pretty_name.public_pages'),
					'link' => route('public_page_index')
				],
			],
			"page_name" => $page->name,
			"page_link" => route('public_page_details', ["slug" => $slug]),
			'slug' => $slug,
			'page' => $page,
			'variables' => VariableHelper::getVariables(),
		]);
	}
}
