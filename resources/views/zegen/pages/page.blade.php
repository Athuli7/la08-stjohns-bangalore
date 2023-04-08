@extends('zegen.layouts.layout01')
@section('content')
@component('zegen.components.header01', [
'variables' => $variables
])
@endcomponent
<!-- header -->
<!-- page-header -->
@component('zegen.components.page-header01', [
"breadcrumbs" => $breadcrumbs,
'page_name' => $page_name,
'page_link' => $page_link,
])
@endcomponent

<!-- page-header -->
<!-- Page Content -->
<div class="content-wrapper pad-none">
	<div class="content-inner">
		<!-- Sermon Section -->
		<section id="ministries-section" class="ministries-section pad-bottom-70">
			<div class="container">
				<!-- Sermon Main Wrap -->
				<div class="ministries-main-wrap ministries-grid">
					<!-- Row -->
					<div class="row">
						<!-- Col -->
						<div class="col-lg-8">
							<!-- Row -->
							<div class="row">
								<!-- Col -->
								<div class="col-md-12">
									<!-- sermon img -->
									<div class="zoom-gallery">
										<div class="ministries-thumb relative margin-bottom-35">
											<img src="{{ $page->image }}"
												class="img-fluid single-sermon-img b-radius-10" width="1170"
												height="694" alt="ministries-img" />
										</div>
									</div>
								</div>
								<!-- Col -->
							</div>
							<!-- Row -->
							<!-- Row 2 -->
							<div class="row">
								<!-- Col -->
								<div class="col-md-12">
									{!! Str::markdown($page->content ?? "") !!}
									<br>
									<br>
									<!-- Row -->
									{{-- <div class="row zoom-gallery">
										<!-- Col -->
										<div class="col-md-4">
											<div class="ministries-thumb relative">
												<a class="popup-img" href="images/ministries/single-thumb1.jpg"
													title="Single Thumb 1">
													<img src="/images/ministries/single-thumb1.jpg"
														class="img-fluid b-radius-6" width="768" height="512"
														alt="ministries-img" />
												</a>
											</div>
										</div>
										<!-- Col -->
										<div class="col-md-4">
											<div class="ministries-thumb relative">
												<a class="popup-img" href="images/ministries/single-thumb2.jpg"
													title="Single Thumb 2">
													<img src="/images/ministries/single-thumb2.jpg"
														class="img-fluid b-radius-6" width="768" height="512"
														alt="ministries-img" />
												</a>
											</div>
										</div>
										<!-- Col -->
										<div class="col-md-4">
											<div class="ministries-thumb relative">
												<a class="popup-img" href="images/ministries/single-thumb3.jpg"
													title="Single Thumb 3">
													<img src="/images/ministries/single-thumb3.jpg"
														class="img-fluid b-radius-6" width="768" height="512"
														alt="ministries-img" />
												</a>
											</div>
										</div>
									</div> --}}
									<!-- Row -->
								</div>
								<!-- Col -->
							</div>
							<!-- Row 2 -->
							<!-- Row 3 -->
							{{-- <div class="row pad-top-85">
								<div class="custom-post-nav">
									<div class="prev-nav-link">
										<a class="btn btn-default prev" href="womens-ministry.html"><i
												class="ti-angle-double-left"></i>
											<h4 class="mb-0 ms-2">Prev</h4>
										</a>
									</div>
								</div>
							</div> --}}
							<!-- Row 3 -->
						</div>
						<!-- Col -->
						<div class="col-lg-4 ps-5 px-sm-15">
							<!-- Sidebar -->
							<div class="sidebar right-sidebar">
								{{-- @component('zegen.components.sidebar')
								@endcomponent --}}
							</div>
							<!-- Sidebar -->
						</div>
						<!-- Col -->
					</div>
					<!-- Row -->
				</div>
				<!-- Sermon Main Wrap -->
			</div>
			<!-- Container -->
		</section>
		<!-- Sermon Section End -->
	</div>
</div>

@endsection