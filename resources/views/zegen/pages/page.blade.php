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
											<img src="{{ $page->image }}" class="img-fluid single-sermon-img b-radius-10" width="1170" height="694" alt="ministries-img" />														
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
									<div class="row zoom-gallery">												
										<!-- Col -->
										<div class="col-md-4">
										   <div class="ministries-thumb relative">
												<a class="popup-img" href="images/ministries/single-thumb1.jpg" title="Single Thumb 1">
													<img src="/images/ministries/single-thumb1.jpg" class="img-fluid b-radius-6" width="768" height="512" alt="ministries-img" />
												</a>
											</div>
										</div>													
										<!-- Col -->
										<div class="col-md-4">
										   <div class="ministries-thumb relative">
												<a class="popup-img" href="images/ministries/single-thumb2.jpg" title="Single Thumb 2">
													<img src="/images/ministries/single-thumb2.jpg" class="img-fluid b-radius-6" width="768" height="512" alt="ministries-img" />
												</a>	
											</div>
										</div>
										<!-- Col -->
										<div class="col-md-4">
										   <div class="ministries-thumb relative">
												<a class="popup-img" href="images/ministries/single-thumb3.jpg" title="Single Thumb 3">
													<img src="/images/ministries/single-thumb3.jpg" class="img-fluid b-radius-6" width="768" height="512" alt="ministries-img" />
												</a>	
											</div>
										</div>													
									</div>
									<!-- Row -->												
								</div>
								 <!-- Col -->                                    
							</div>
							<!-- Row 2 -->
							<!-- Row 3 -->
							<div class="row pad-top-85">
								<div class="custom-post-nav">
									<div class="prev-nav-link">											
										<a class="btn btn-default prev" href="womens-ministry.html"><i class="ti-angle-double-left"></i><h4 class="mb-0 ms-2">Prev</h4></a>
									</div>											
								</div>
							</div>
							<!-- Row 3 -->
						</div>
						<!-- Col -->
						<div class="col-lg-4 ps-5 px-sm-15">
							<!-- Sidebar -->
							<div class="sidebar right-sidebar">
								<!-- Search -->
								<div class="widget search-widget">
									<div class="search-form-wrapper">
										<form class="search-form" role="search">
											<div class="input-group add-on">
												<input class="form-control" placeholder="Search for.." name="srch-term" type="text">
												<div class="input-group-btn">
													<button class="btn btn-default search-btn" type="submit"><i class="ti-arrow-right"></i></button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- Search -->											
								<!-- Popular Post -->
								<div class="widget popular-posts">
									<div class="widget-title">
										<!-- Title -->
										<h3 class="title">Popular Posts</h3>
									</div>
										<ul class="list-post-content">
										<li>
											<!--Media-->
											<div class="media list-post">
												<div class="side-noimg themebg-color">
													<span class="fa fa-quote-left"></span>																
												</div>                                                            
												<div class="media-body">
													 <a href="sermon-single.html">Testimony Love Offering So Blessed</a>
													<div class="meta-items mt-2">
														<span class="post-date"><i class="ti-time me-2 theme-color"></i>Apr 18, 2019</span>
													</div>
												</div>
											</div>
											<!-- Media End -->
										</li>
										<li>
											<!--Media-->
											<div class="media list-post">
												<div class="side-noimg themebg-color">
													<span class="fa fa-anchor"></span>																
												</div>
												<div class="media-body">
													<a href="sermon-single.html">Belongs to those who fail in their duty</a>
													<div class="meta-items mt-2">
														<span class="post-date"><i class="ti-time me-2 theme-color"></i>Apr 18, 2019</span>
													</div>
												</div>
											</div>
											<!-- Media End -->
										</li>
										<li>
											<!--Media-->
											<div class="media list-post">
												<span class="popular-thumb me-3">
													<img width="70" height="70" class="rounded" src="images/blog/thumb/blog_thumb3-80x80.jpg" alt="">
												</span>
												<div class="media-body">
													<a href="sermon-single.html">An Important Conversation Around</a>
													<div class="meta-items mt-2">
														<span class="post-date"><i class="ti-time me-2 theme-color"></i>Apr 18, 2019</span>
													</div>
												</div>
											</div>
											<!-- Media End -->
										</li>													
									</ul>
								</div>
								<!-- Popular Post -->                                            
								<!-- Tag Cloud -->
								<div class="widget tag-cloud">
									<div class="widget-title">
										<!-- Title -->
										<h3 class="title">Tag Cloud</h3>
									</div>
									<div class="tagcloud">
										<a href="#" class="tag-cloud-link">biblestory (12)</a>
										<a href="#" class="tag-cloud-link">church (2)</a>
										<a href="#" class="tag-cloud-link">donate (2)</a>
										<a href="#" class="tag-cloud-link">hope (2)</a>
										<a href="#" class="tag-cloud-link">jesus (11)</a>
										<a href="#" class="tag-cloud-link">prayer (13)</a>
										<a href="#" class="tag-cloud-link">sermon (3)</a>
									</div>
								</div>
								<!-- Tag Cloud -->
								<!-- Latest Post -->
								<div class="widget recent-posts mb-0">
									<div class="widget-title">
										<!-- Title -->
										<h3 class="title">Latest Posts</h3>
									</div>
										<ul class="list-post-content">
										<li>
											<!--Media-->
											<div class="media list-post">
												<span class="latest-thumb me-3">
													<img width="70" height="70" class="rounded" src="images/blog/thumb/blog_thumb1-80x80.jpg" alt="">
												</span>                                                           
												<div class="media-body">
													 <a href="blog-single.html">Giving Back – Uganda Training Centers</a>
													<div class="meta-items mt-2">
														<span class="post-date"><i class="ti-calendar me-2 theme-color"></i>Oct 21, 2019</span>
													</div>
												</div>
											</div>
											<!-- Media End -->
										</li>
										<li>
											<!--Media-->
											<div class="media list-post">
												<span class="latest-thumb me-3">
													<img width="70" height="70" class="rounded" src="images/blog/thumb/blog_thumb2-80x80.jpg" alt="">
												</span>
												<div class="media-body">
													<a href="blog-single.html">Spirit Of The Lord Is, From The New Life</a>
													<div class="meta-items mt-2">
														<span class="post-date"><i class="ti-calendar me-2 theme-color"></i>Oct 21, 2019</span>
													</div>
												</div>
											</div>
											<!-- Media End -->
										</li>
										<li>
											<!--Media-->
											<div class="media list-post">
												<span class="latest-thumb me-3">
													<img width="70" height="70" class="rounded" src="images/blog/thumb/blog_thumb4-80x80.jpg" alt="">
												</span>
												<div class="media-body">
													<a href="blog-single.html">Help End The Water Crisis For Families</a>
													<div class="meta-items mt-2">
														<span class="post-date"><i class="ti-calendar me-2 theme-color"></i>Oct 20, 2019</span>
													</div>
												</div>
											</div>
											<!-- Media End -->
										</li>													
									</ul>
								</div>
								<!-- Latest Post -->
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