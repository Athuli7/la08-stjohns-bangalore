@php
	$variables = \App\Helpers\VariableHelper::getVariables();
	$strings = $variables['strings'];
@endphp
@extends('zegen.layouts.layout01')
@section('content')
@component('zegen.components.header01', [
	'variables' => $variables
])
@endcomponent
<!-- header -->
<!-- page-header -->
@component('zegen.components.page-header01', [
	"breadcrumbs" => [],
	'page_name' => "Contact us",
	'page_link' => route('contact'),
])
@endcomponent

<!-- page-header -->
<!-- Page Content -->
<div class="content-wrapper pad-none">
	<div class="content-inner">
		<!-- Contact Section -->
		<section id="contact-section" class="contact-section pad-bottom-none">
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Col -->
					<div class="col-lg-4 mb-lg-0 mb-4">
						<div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg1.jpg">
							<div class="f-box c-page text-center typo-white">
								<div class="feature-icon margin-bottom-10">
									<i class="ti-location-pin"></i>
								</div>
								<div class="feature-content">
									<div class="feature-title">
										<h5 class="mb-2">Our Location</h5>
									</div>
									<p class="mb-0">{{ VariableHelper::getTextblock( 'tenant_address') }}</p>
								</div>											
							</div>
						</div>
					</div>
					<!-- Col -->
					<div class="col-lg-4 mb-lg-0 mb-4">
						<div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg2.jpg">
							<div class="f-box c-page text-center typo-white">
								<div class="feature-icon margin-bottom-10">
									<i class="ti-headphone-alt"></i>
								</div>
								<div class="feature-content">
									<div class="feature-title">
										<h5 class="mb-2">Phone Number</h5>
									</div>
									<a href="tel:{{ $strings['tenant_phone_01'] ?? "" }}">{{ $strings['tenant_phone_01'] ?? "" }}</a>
									<br>
									<a href="tel:{{ $strings['tenant_phone_02'] ?? "" }}">{{ $strings['tenant_phone_02'] ?? "" }}</a>
								</div>											
							</div>
						</div>
					</div>
					<!-- Col -->
					<div class="col-lg-4">
						<div class="div-bg-img b-radius-20" data-bg="images/contact/contact_bg3.jpg">
							<div class="f-box c-page text-center typo-white">
								<div class="feature-icon margin-bottom-10">
									<i class="ti-email"></i>
								</div>
								<div class="feature-content">
									<div class="feature-title">
										<h5 class="mb-2">Email Address</h5>
									</div>
									<a href="mailto:{{ $strings['tenant_email_01'] ?? "" }}">{{ $strings['tenant_email_01'] ?? "" }}</a>
									<br>
									<a href="mailto:{{ $strings['tenant_email_02'] ?? "" }}">{{ $strings['tenant_email_02'] ?? "" }}</a>
								</div>											
							</div>
						</div>
					</div>
				</div>
				<!-- Row -->
			</div>
			<!-- Container -->
		</section>
		<!-- Contact Section End -->
		<!-- Contact Section -->
		<section class="contact-form-section form-with-img">
			<div class="container">
				<div class="row">
					<!-- col -->
					<div class="col-lg-8 pe-0">                                    
						<!-- Contact Form -->
						<div class="contact-form-4 bg-white">
							<!-- Form -->
							<div class="contact-form-wrap">
								<!-- form inputs -->
								<form id="contact-form" class="contact-form" action="inc/function.php" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<!-- form group -->
											<div class="form-group">
												<input id="name" class="form-control" name="name" placeholder="Name" data-bv-field="name" type="text" />
											</div>
										</div>
										<div class="col-md-12">
											<!-- form group -->
											<div class="form-group">
												<input id="email" class="form-control" name="email" placeholder="Email" data-bv-field="email" type="email">
											</div>
										</div>
										<div class="col-md-12">
											<!-- form group -->
											<div class="form-group">                                                            
												<input id="phone" class="form-control" name="phone" placeholder="Phone" data-bv-field="phone" type="text">
											</div>
										</div>
										<div class="col-md-12">
											<div class="contact-message">
												<!-- form group -->
												<div class="form-group">
													<textarea id="message" class="form-control textarea" rows="5" name="message" placeholder="Your Message" data-bv-field="message"></textarea>
												</div>
											</div>                                                        
											<!-- form button -->
											<button type="submit" id="contact-submit" class="btn btn-default mt-0 theme-btn">Send Now</button>
										</div>
									</div>
									<span class="clearfix"></span>
								</form>
								<!-- form inputs end -->
								<p id="contact-status-msg" class="hide"></p>
							</div>
							<!-- Form End-->
						</div>
						<!-- contact-form-1 -->
					</div>
					<!-- .col -->
					<div class="col-lg-4 pad-none">
						<div class="contact-img">
							<img class="img-fluid" src="images/contact/contact_bg4.jpg" width="752" height="888" alt="Contact Map">
						</div>
					</div>
					 <!-- Col -->
				</div>
			</div>
		</section>
		<!-- Contact Form Section End -->					
		<!-- Contact Map -->
		<section class="contact-map pad-top-none">
			<div class="container">
				<div class="row">
					<!-- col -->
					<div class="col-md-12"> 
						<!-- Screan Reader Text -->
						<h2 class="screen-reader-text">Map</h2>
						<!-- Container Fluid -->
						<div class="container-fluid pad-none">
							<!-- Map -->
							<div class="map mt-0">
								<div id="site-google-map" class="b-radius-0"
									style="width:100%;height:400px;" data-map-style="Silver"
									data-map-lat="51.508742" data-map-lng="-0.120850"></div>
							</div>
							<!-- Map -->
						</div>
						<!-- Container Fluid -->
					</div>
					<!-- col -->
				</div>
			</div>	
		</section>
		<!-- Contact Map End -->									
	</div>
</div>

@endsection