@php
	$menu = \App\Models\WebsiteMenu::where('slug', 'main-menu')
		->whereWebsiteId(config('app.site_id'))
		->first()
		->GetNavigatableTree()
@endphp
<header>
	<!--Mobile Header-->
	<div class="mobile-header bg-white typo-dark">
		<div class="mobile-header-inner">
			<div class="sticky-outer">
				<div class="sticky-head">
					<div class="basic-container clearfix">
						<ul class="nav mobile-header-items pull-left">
							<li class="nav-item"><a href="#" class="zmm-toggle img-before"><i class="ti-menu"></i></a></li>
						</ul>
						<ul class="nav mobile-header-items pull-center">
							<li>
								<a href="{{ route('home') }}" class="img-before">
									<img src="{{ $variables['strings']['logo_dark'] ?? "" }}" class="img-fluid" width="149" height="45" alt="Logo">
								</a>
							</li>
						</ul>
						<ul class="nav mobile-header-items pull-right">
							<li class="nav-item"><a href="#" class="img-before overlay-search-switch"><i class="icon-magnifier icons"></i></a></li>
						</ul>
					</div>
					<!-- .basic-container -->
				</div>
				<!-- .sticky-head -->
			</div>
			<!-- .sticky-outer -->
		</div>
		<!-- .mobile-header-inner -->
	</div>
	<!-- .mobile-header -->
	<!--Header-->
	<div class="header-inner header-1">
		<!--Sticky part-->
		<div class="sticky-outer">
			<div class="sticky-head">
				<!--Navbar-->
				<nav class="navbar nav-shadow">
					<div class="basic-container clearfix">
						<div class="navbar-inner">
							<!--Overlay Menu Switch-->
							<ul class="nav navbar-items pull-left">
								<li class="list-item">
									<a href="{{ route('home') }}" class="logo-general"><img src="{{ $variables['strings']['logo_dark'] ?? "" }}" class="img-fluid" width="166" height="50" alt="Logo" /></a>
									<a href="{{ route('home') }}" class="logo-sticky"><img src="{{ $variables['strings']['logo_dark'] ?? "" }}" class="img-fluid" width="166" height="50" alt="Logo" /></a>
								</li>
							</ul>
							<!-- Menu -->
							<ul class="nav navbar-items pull-right">
								<!--List Item-->
								<li class="list-item">
									<ul class="nav navbar-main menu-dark">
										<li class="dropdown"><a href="{{ route('home') }}">Home</a>
										</li>
										@foreach ($menu as $item)
											<li class="dropdown @if(count($item->children) > 0) dropdown-sub"><a href="#"> @else "><a href="{{ \App\Helpers\URLHelper::getRoutableURL($item) }}"> @endif {{ $item->name }}</a>
												@if(count($item->children) > 0)
													<ul class="dropdown-menu">
														@foreach ($item->children as $child)
															<li><a href="{{ \App\Helpers\URLHelper::getRoutableURL($child) }}">{{ $child->name }}</a></li>
														@endforeach
													</ul>
												@endif
											</li>
										@endforeach
										<li class="dropdown"><a href="{{ route('contact') }}">Contact Us</a></li>
									</ul>
								</li>
								<!--List Item End-->
								<!--List Item-->
								<li class="list-item">
									<div class="header-navbar-text-1">
										@if($variables['booleans']['donate_button'] ?? false)
											<a href="{{ route('donate') }}" class="h-donate-btn">Donate</a>
										@endif
									</div>
								</li>
								<!--List Item End-->
							</ul>
							<!-- Menu -->
						</div>
					</div>
				</nav>
			</div>
			<!--sticky-head-->
		</div>
		<!--sticky-outer-->
	</div>
</header>