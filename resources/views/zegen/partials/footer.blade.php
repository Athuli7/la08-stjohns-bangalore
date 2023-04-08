@php
	$variables = \App\Helpers\VariableHelper::getVariables();
	$strings = $variables['strings'];
	$menu = \App\Models\WebsiteMenu::where('slug', 'footer-menu')
		->whereWebsiteId(config('app.site_id'))
		->first()
		->GetNavigatableTree()
@endphp

<footer id="footer" class="footer footer-1 footer-bg-img" data-bg="{{ asset("images/bg/footer-bg.jpg") }}">
	<!--Footer Widgets Columns Posibilities 4-->
	<div class="footer-widgets">
		<div class="footer-middle-wrap footer-overlay-dark">
			<div class="color-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 widget text-widget">
						<div class="widget-title">
							<!-- Title -->
							<h3 class="title typo-white">About St. John's</h3>
						</div>
						<!-- Text -->
						<div class="widget-text margin-bottom-30">
							<p>{{ VariableHelper::getTextblock('footer_about') }}</p>
						</div>
						<div class="social-icons">
							<a href="{{ $strings['facebook_link'] ?? "" }}" class="social-fb"><span class="ti-facebook"></span></a>
							<a href="{{ $strings['twitter_link'] ?? "" }}" class="social-twitter"><span class="ti-twitter"></span></a>
							<a href="{{ $strings['instagram_link'] ?? "" }}" class="social-instagram"><span class="ti-instagram"></span></a>
							<a href="{{ $strings['pintrest_link'] ?? "" }}" class="social-pinterest"><span class="ti-pinterest"></span></a>
							<a href="{{ $strings['youtube_link'] ?? "" }}" class="social-youtube"><span class="ti-youtube"></span></a>
						</div>
					</div>
					<!-- Col -->
					<div class="col-lg-3 widget text-widget">
						<div class="widget-title">
							<!-- Title -->
							<h3 class="title typo-white">Quick Links</h3>
						</div>
						<!-- Text -->
						<div class="menu-quick-links">
							<ul class="menu">
								@foreach ($menu as $item)
									<li class="menu-item"><a href="{{ \App\Helpers\URLHelper::getRoutableURL($item) }}">{{ $item->name }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- Col -->
					<div class="col-lg-3 widget recent-posts">
						<div class="widget-title">
							<!-- Title -->
							<h3 class="title typo-white">Latest News</h3>
						</div>
						<nav>
							<ul class="footer-list-posts">
								@foreach (\App\Models\WebsitePost::where('website_id', config('app.site_id'))->limit(2)->get() as $post)
									
								<li>
									<div class="side-image">
										<a href="{{ route('post_details', ['slug' => $post->slug]) }}"><img width="80" height="80" src="{{ $post->image }}" class="img-responsive wp-post-image" alt="Blog"></a>
									</div>
									<div class="side-item-text"><a href="{{ route('post_details', ['slug' => $post->slug]) }}">{{ $post->name }}</a>
										<span class="post-date d-block">{{ $post->published->format('M d, Y') }}</span>
									</div>
								</li>
								
								@endforeach
							</ul>
						</nav>
					</div>
					<!-- Col -->
					<div class="col-lg-3 widget contact-info-widget">
						<div class="widget-title">
							<!-- Title -->
							<h3 class="title typo-white">Newsletter</h3>
						</div>
						<p>{{ VariableHelper::getTextblock('footer_newsletter_signup', 'Sign up for our weekly newsletter to stay updated on all news and events at the Church. Email updates on new Announcements.') }}</p>
						<div class="mailchimp-widget-wrap">
							<!-- subscribe form -->
							<form id="subscribe-form-1" class="subscribe-form">
								<div class="input-group add-on">
									<input type="text" class="form-control" name="mcemail" autocomplete="off"
										id="mcemail-1" placeholder="Email Address">
									<div class="input-group-btn">
										<button class="btn btn-default subscribe-btn" type="submit">Sign Up</button>
									</div>
								</div>
								<p class="subscribe-status-msg hide"></p>
							</form>
						</div>
					</div>
					<!-- Col -->
				</div>
			</div>
		</div>
	</div>
	<!--Footer Copyright Columns Posibilities 4-->
	<div class="footer-copyright">
		<div class="footer-bottom-wrap pad-tb-20 typo-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="footer-bottom-items pull-left">
							<li class="nav-item">
								<div class="nav-item-inner">
									Copyrights © {{ date('Y') }} <a href="{{ route('home') }}">{{ config('app.site_long_name') }}</a>.
									Designed by <a href="https://hamanahel.in?ref=la08-zegen">Hamanahel Software Solutions</a>
								</div>
							</li>
						</ul>
						<ul class="footer-bottom-items footer-menu pull-right">
							<li class="nav-item">
								<a href="#">Privacy</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('contact') }}">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>