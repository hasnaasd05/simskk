<!DOCTYPE html>

<html lang="en">
	
	<head>
		<base href="/"/>
		<title>@isset($title){{ $title }} |@endisset SIMSKK ITENAS</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="Sistem Informasi" />
		{{-- <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" /> --}}
		<meta property="og:site_name" content="SIMSKK | ITENAS" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		
		@yield('vendor-css')
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> 

		@yield('page-css')
		
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	
	
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="false" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		
		<script>
			var defaultThemeMode = "light"; 
			var themeMode; 
			if ( document.documentElement ) { 
				if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { 
					themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); 
				} else { 
					if ( localStorage.getItem("data-bs-theme") !== null ) { 
						themeMode = localStorage.getItem("data-bs-theme"); 
					} else { 
						themeMode = defaultThemeMode; }
				} 
				if (themeMode === "system") { 
					themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; 
				} 
				document.documentElement.setAttribute("data-bs-theme", themeMode); 
			}
		</script>
		
		
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
					
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-outline ki-abstract-14 fs-2"></i>
							</div>
						</div>
						
						
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-13">
							<a href="{{ route('dashboard') }}">
								<img alt="Logo" src="assets/media/logos/demo41.svg" class="h-25px" />
							</a>
						</div>
						
						
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">																
							</div>
							
							
							<div class="app-navbar flex-shrink-0">															
								
								<div class="app-navbar-item ms-5" id="kt_header_user_menu_toggle">
									
									<div class="cursor-pointer symbol symbol-35px symbol-md-45px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img class="symbol symbol-circle symbol-35px symbol-md-45px" src="assets/media/avatars/300-13.jpg" alt="user" />
									</div>
									
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/media/avatars/300-13.jpg" />
												</div>
												
												
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">Max Smith
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
												</div>
												
											</div>
										</div>
																				
										<div class="separator my-2"></div>																			
										
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Mode
												<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
													<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
													<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
												</span></span>
											</a>
											
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
												
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-night-day fs-2"></i>
														</span>
														<span class="menu-title">Light</span>
													</a>
												</div>
												
												
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-moon fs-2"></i>
														</span>
														<span class="menu-title">Dark</span>
													</a>
												</div>
												
												
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-screen fs-2"></i>
														</span>
														<span class="menu-title">System</span>
													</a>
												</div>
												
											</div>
											
										</div>
										
										
										<div class="menu-item px-5 my-1">
											<a href="../../demo41/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
										</div>
										
										
										<div class="menu-item px-5">
											<a href="../../demo41/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
										</div>
										
									</div>
									
									
								</div>
								
								
								{{-- <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
									<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" id="kt_app_header_menu_toggle">
										<i class="ki-outline ki-text-align-left fs-2 fs-md-1"></i>
									</div>
								</div> --}}
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				
				<div class="app-wrapper d-flex" id="kt_app_wrapper">
					
					@include('layouts.sidebar')
										
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						
						<div class="d-flex flex-column flex-column-fluid">
							
							<div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
								
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
									
									<div class="d-flex flex-stack flex-row-fluid">
										
										<div class="d-flex flex-column flex-row-fluid">
											
											{{-- breadcrumbs --}}
											{{-- <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3">
												
												<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
													<a href="../../demo41/dist/index.html" class="text-white text-hover-primary">
														<i class="ki-outline ki-home text-gray-700 fs-6"></i>
													</a>
												</li>
												
												
												<li class="breadcrumb-item">
													<i class="ki-outline ki-right fs-5 text-gray-700 mx-n1"></i>
												</li>
												
												
												<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Corporate</li>
												
											</ul> --}}
											
											
											<div class="page-title d-flex align-items-center me-3">
												
												<h1 class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">{{$title}}</h1>
												
											</div>
											
										</div>
										
										{{-- button toolbar --}}
										{{-- <div class="d-flex align-items-center gap-2 gap-lg-5">
											
											<div class="m-0">
												
												<a href="#" class="btn btn-flex btn-sm h-40px btn-light fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">History</a>
												
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b7802ca7f08">
													
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bold">Filter Options</div>
													</div>
													
													
													<div class="separator border-gray-200"></div>
													
													
													<div class="px-7 py-5">
														
														<div class="mb-10">
															
															<label class="form-label fw-semibold">Status:</label>
															
															
															<div>
																<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b7802ca7f08" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															
														</div>
														
														
														<div class="mb-10">
															
															<label class="form-label fw-semibold">Member Type:</label>
															
															
															<div class="d-flex">
																
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																
																
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																
															</div>
															
														</div>
														
														
														<div class="mb-10">
															
															<label class="form-label fw-semibold">Notifications:</label>
															
															
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															
														</div>
														
														
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														
													</div>
													
												</div>
												
												
											</div>
											
											
											<a href="#" class="btn btn-flex btn-sm h-40px fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">New
											<span class="d-none d-sm-inline">Ticket</span></a>
											
										</div> --}}
										
									</div>
									
								</div>
								
							</div>
							
							
							<div id="kt_app_content" class="app-content">
								
								<div id="kt_app_content_container" class="app-container container-fluid">
									
									@yield('content')
									
								</div>
								
							</div>
							
						</div>
						
						
						<div id="kt_app_footer" class="app-footer">
							
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a class="ms-25" href="https://tik.itenas.ac.id/" target="https://tik.itenas.ac.id/">UPT-TIK</a> 
									<a class="ms-25" href="https://www.itenas.ac.id/" target="https://itenas.ac.id/">Itenas</a>
								</div>
																
								<div class="d-none d-lg-inline-block">
									<span class="d-none d-sm-inline-block me-1"> All rights Reserved</span>
									<span class="float-md-end d-none d-md-block"> Hand-crafted & Made with ❤️</span>
								</div>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>	
		
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>	
				
		<script>var hostUrl = "assets/";</script>
		
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		
		
		<script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

		<!-- Vendors JS -->
		@yield('js')
	
		@if (Session::has('swal'))
			<script>
				Swal.fire({
					icon: '{{ session('swal')['icon'] }}',
					title: '{{ session('swal')['title'] }}',
					text: '{{ session('swal')['text'] }}',
					showConfirmButton: false,
					timer: 2000,
				});
			</script>
		@endif

		@yield('script')		
					
    </body>
	
</html>