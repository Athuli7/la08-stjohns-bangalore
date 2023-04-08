
<div class="page-title-wrap typo-white">
	<div class="page-title-wrap-inner section-bg-img" data-bg="images/page-title.jpg">
		<span class="theme-overlay"></span>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<div class="page-title-inner">
						<div id="breadcrumb" class="breadcrumb margin-bottom-10">
							<a href="{{ route('home') }}" class="theme-color">Home</a>
							@foreach ($breadcrumbs ?? [] as $item)
								<a href="{{ $item['link'] }}" class="theme-color">{{ $item['name'] }}</a>
							@endforeach
							<span class="current">{{ $page_name }}</span>
						</div>
						<h1 class="page-title mb-0">{{ $page_name }}</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>