<!DOCTYPE html>

<html lang="en">
	
	<head><base href=""/>
		<title>Login | SIMSKK ITENAS</title>
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
		
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> 

		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	
	
	<body id="kt_body" class="app-blank">
		
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
		
		
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				
				<a href="../../demo41/dist/index.html" class="d-block d-lg-none mx-auto py-20">
					<img alt="Logo" src="assets/media/logos/default.svg" class="theme-light-show h-25px" />
					<img alt="Logo" src="assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
				</a>
				
				
				<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
					
					<div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
						
						<div class="d-flex flex-stack py-2">
							
							<div class="me-2"></div>														
						</div>
						
						
						<div class="py-20">
							
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
								@csrf
								<div class="card-body">
									
									<div class="text-start mb-10">
										
										<h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
										
										
										<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access & earn money</div>
										
									</div>
									
									
									<div class="fv-row mb-8">
										
										<input type="text" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-solid @error('email') is-invalid @enderror" autofocus/>
										@error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									
									<div class="fv-row mb-7">
										
										<input type="text" placeholder="Password" name="password" required autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-solid @error('password') is-invalid @enderror" />
										@error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
									
									
									{{-- <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
										<div></div>
										
										<a href="../../demo41/dist/authentication/layouts/fancy/reset-password.html" class="link-primary" data-kt-translate="sign-in-forgot-password">Forgot Password ?</a>
										
									</div> --}}
									
									
									<div class="d-flex flex-stack">
										
										<button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
											
											<span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
											
											
											<span class="indicator-progress">
												<span data-kt-translate="general-progress">Please wait...</span>
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
											</span>
											
										</button>
										
										
									</div>
									
								</div>
								
							</form>
							
						</div>
						
						
						<div class="m-0">
																			
							
						</div>
						
					</div>
					
				</div>
				
				
				<div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(assets/media/auth/bg11.png)"></div>
				
			</div>
			
		</div>
		
		
		<script>var hostUrl = "assets/";</script>
		
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		
		
		<script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
		<script src="{{ asset('assets/js/custom/authentication/sign-in/i18n.js') }}"></script>
		
		
	</body>
	
</html>