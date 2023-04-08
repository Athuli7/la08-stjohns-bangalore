<section class="blog-section pad-top-50 pad-bottom-95">
	<div class="container">
		<!-- Blog Wrap -->
		<div class="row">
			<div class="col-md-12">
				<div class="title-wrap text-center">
					<div class="section-title">
						<span class="sub-title theme-color text-uppercase">Our {{ config('app.pretty_name.posts') }}</span>
						<h2 class="section-title margin-top-5">Latest entries</h2>
						<span class="border-bottom center"></span>
					</div>
				</div>
				<div class="row">
					<!--Blog Main Slider-->
					<div class="owl-carousel blog-main-wrapper blog-style-1" data-loop="1" data-nav="0"
						data-dots="1" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000"
						data-smartspeed="1000" data-margin="30" data-items="3" data-items-tab="2"
						data-items-mob="1">
						@foreach ($posts as $post)
						<!--Item-->
						<div class="item">
							<!--Blog Inner-->
							<div class="blog-inner">
								<div class="blog-thumb relative">
									<img src="{{ asset($post->image) }}" class="img-fluid" width="768" height="600" alt="blog-img" />
									<div class="top-meta">
										<ul class="top-meta-list">
											<li>
												<div class="post-date"><a href="{{ route('post_details', ['slug' => $post->slug]) }}"><i class="ti-calendar"></i> {{ $post->published->format('M d, Y') }}</a></div>
											</li>
										</ul>
									</div>
								</div>
								<div class="blog-details">
									<div class="blog-title">
										<h4 class="margin-bottom-10"><a href="{{ route('post_details', ['slug' => $post->slug]) }}"
												class="blog-name">{{ $post->name }}</a></h4>
									</div>
									<div class="post-desc mt-2">
										<div class="blog-link">
											<a target="_blank" href="{{ route('post_details', ['slug' => $post->slug]) }}" class="link font-w-500">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<!--Blog Inner Ends-->
						</div>
						<!--Item Ends-->
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- Blog Wrap -->
	</div>
</section>