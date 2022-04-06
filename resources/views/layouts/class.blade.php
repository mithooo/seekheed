
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Class | @yield('title') </title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
	
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('public/user/assets/plugins/global/plugins.bundle.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('public/user/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('public/user/assets/css/style.bundle.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{asset('public/assets/css/toastr.css')}}" type="text/css">

		<!--end::Global Theme Styles-->
		@yield('styles')
	
		<link rel="shortcut icon" href="{{asset('public/user/assets/media/logos/favicon.ico')}}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header Mobile-->
					<div id="kt_header_mobile" class="header-mobile">
						<!--begin::Logo-->
						<a href="{{route('home')}}">
							<img alt="Logo" src="{{asset('public/resource/assets/img/logo.png')}}" class="max-h-30px" />
						</a>
						<!--end::Logo-->
						<!--begin::Toolbar-->
						<div class="d-flex align-items-center">
							<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
								<span></span>
							</button>
							<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
								<span class="svg-icon svg-icon-xl">
									<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
							</button>
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header Mobile-->
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid">
							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">
								<!--begin::Logo-->
								<a href="{{route('home')}}" class="mr-20">
									<img alt="Logo" src="{{asset('public/resource/assets/img/logo.png')}}" class="logo-default max-h-35px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar topbar-minimize">
								<!--begin::User-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item" >
										<div class="btn btn-icon btn-clean h-40px w-100px mr-5 btn-dropdown">
											<a href="{{route('home')}}"><span class="text text-light"><b>Go To Seekheed</b></span></a>
										</div>
									</div>
									<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
											<span class="svg-icon svg-icon-lg">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
										<!--begin::Header-->
										<div class="d-flex align-items-center p-8 rounded-top">
											<!--begin::Symbol-->
											{{-- <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
												<img src="{{Auth::user()->image}}" alt="" />
											</div> --}}
											<!--end::Symbol-->
											<!--begin::Text-->
											<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5">{{Auth::user()->name}}</div>

											<!--end::Text-->
										</div>
										<!--end::Header-->
										<!--begin::Nav-->
										<div class="navi navi-spacer-x-0">
											<!--begin::Item-->
										
											<!--end::Item-->
										
											<!--begin::Footer-->
											<div class="navi-separator "></div>
											<div class="navi-footer">
												<a href="{{route('user.logout')}}" class="btn btn-light-primary font-weight-bold">Sign Out</a>
										
											</div>
											<!--end::Footer-->
										</div>
										<!--end::Nav-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Header Menu Wrapper-->
					<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
						<div class="container-fluid	">
							<!--begin::Header Menu-->
							<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
								<!--begin::Header Nav-->
								<ul class="menu-nav">
									<li class="menu-item {{Request::is('class/dashboard')?'menu-item-open menu-item-here':''}} menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="{{route('class.dashboard')}}" class="menu-link">
											<span class="menu-text">Dashboard</span>
										</a>
										
									</li>
									<li class="menu-item {{Request::is('class/subject')?'menu-item-open menu-item-here':''}} menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="{{route('class.subject.index')}}" class="menu-link">
											<span class="menu-text">Subjects</span>
										</a>
										
									</li>
									<li class="menu-item {{Request::is('class/book')?'menu-item-open menu-item-here':''}} menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="{{route('class.book.index')}}" class="menu-link">
											<span class="menu-text">Books</span>
										</a>
										
									</li>
									<li class="menu-item {{Request::is('class/lecture')?'menu-item-open menu-item-here':''}} menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="{{route('class.lecture.index')}}" class="menu-link">
											<span class="menu-text">Lectures</span>
										</a>
										
									</li>
									<li class="menu-item {{Request::is('class/event')?'menu-item-open menu-item-here':''}} menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="{{route('class.event.index')}}" class="menu-link">
											<span class="menu-text">Events</span>
										</a>
										
									</li>
									<li class="menu-item {{Request::is('class/world')?'menu-item-open menu-item-here':''}} menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="{{url('class/world')}}" class="menu-link">
											<span class="menu-text">World Clock & Map</span>
										</a>
										
									</li>
									<li class="menu-item {{Request::is('birthchart')?'menu-item-open menu-item-here':''}} menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
										<a href="{{route('birthchart')}}" class="menu-link">
											<span class="menu-text">Birthchart</span>
										</a>
										
									</li>
								
								
								
								</ul>
							
								<!--end::Header Nav-->
							</div>
							<!--end::Header Menu-->
						</div>
					</div>
					<!--end::Header Menu Wrapper-->
					<!--begin::Container-->
					<div class="d-flex flex-row flex-column-fluid container-fluid">
						<!--begin::Content Wrapper-->
						<div class="main d-flex flex-column flex-row-fluid">
						
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Dashboard-->
								@yield('content')
								
								<!--end::Dashboard-->
							</div>
							<!--end::Content-->
						</div>
						<!--begin::Content Wrapper-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<a href="#"  class="text-white text-hover-primary">Tritec Kodes</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
	
	
	
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('public/user/assets/plugins/global/plugins.bundle.js?v=7.0.3')}}"></script>
		<script src="{{asset('public/user/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.3')}}"></script>
		<script src="{{asset('public/user/assets/js/scripts.bundle.js?v=7.0.3')}}"></script>
		<script src="{{asset('assets/js/toastr.js')}}"></script>
    
        @toastr_render
		<!--end::Global Theme Bundle-->
	@yield('scripts')
	</body>
	<!--end::Body-->
</html>