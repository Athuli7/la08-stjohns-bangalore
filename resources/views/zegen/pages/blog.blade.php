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


<!-- Page Content -->
<div class="content-wrapper pad-none">
	<div class="content-inner">
		<!-- Blog Single Section -->
		<section id="blog-single" class="blog-single">
			<div class="container">
				<!-- Blog Main Wrap -->
				<div class="blog-main-wrap blog-list">
					<!-- Row -->
					<div class="row">
						<!-- Col -->
						<div class="col-lg-8">
							<!-- blog-wrap -->
							<div class="blog-wrap mb-4 pb-3">
								<!-- blog-info-wrap -->
								<div class="blog-info-wrap">
									<!-- blog img -->
									<div class="blog-thumb mb-4 pb-2">
										<img src="{{ $post->image }}" width="1280" height="853" class="img-fluid b-radius-8" alt="blog-img">
									</div>
									<!-- Meta -->
									<div class="post-meta top-meta margin-bottom-30">
										<ul class="nav">
											{{-- <li>
												<a href="#"><span class="author-img">
												<img alt="" src="images/icons/author-icon.jpg" class="avatar avatar-30 photo rounded-circle me-2" height="30" width="30"></span>Jack</a>
											</li> --}}
											{{-- <li class="nav-item">
												<div class="post-category">
													<span class="ti-folder me-2 theme-color"></span>
													<a href="#">Jesus Love</a>, <a href="#">Sermon</a>
												</div>
											</li> --}}
											<li class="nav-item">
												<div class="post-date">
													<span class="ti-time me-2 theme-color"></span>
													<a href="{{ route('post_details', ['slug' => $post->slug]) }}">{{ $post->published->format('M d, Y') }}</a>
												</div>
											</li>                                                                                                                
										</ul>
									</div>
									<!-- Meta -->
									<div class="blog-content pb-4 mb-2">
										{!! Str::markdown($post->content ?? "") !!}
									</div>
								</div>
								<!-- blog-info-wrap -->
							</div>
							<!-- blog-wrap -->
						</div>
						<!-- Col -->
						<!-- Sidebar -->
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
				<!-- Blog Main Wrap -->
			</div>
			<!-- Container -->
		</section>
		<!-- Blogs Section End -->
	</div>
</div>