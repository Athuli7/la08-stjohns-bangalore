<?php

namespace App\Helpers;

class URLHelper
{
	public static function getRoutableURL($menu_item)
	{
		if (!is_null($menu_item->Entity))
			switch ($menu_item->entity_type) {
				case 'App\Models\WebsitePage':
					return route('public_page_details', ['slug' => $menu_item->Entity->slug]);
					break;
				case 'App\Models\Organization':
					return route('organization_details', ['slug' => $menu_item->Entity->slug]);
					break;
			}
		if (strlen($menu_item->url) > 0)
			return $menu_item->url;
		return "#";
	}
}
