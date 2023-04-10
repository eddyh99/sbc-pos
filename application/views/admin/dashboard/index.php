<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Keen
Product Version: 3.0.3
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/keen" />
		<meta property="og:site_name" content="Keenthemes | Keen" />
		<link rel="canonical" href="https://preview.keenthemes.com/keen" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->

		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?= base_url()?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->

		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?= base_url()?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->


	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		
	<!--begin::Theme mode setup on page load-->
		<script>
			var defaultThemeMode = "light"; 
			var themeMode; 
			if (document.documentElement){ 
				if (document.documentElement.hasAttribute("data-bs-theme-mode")){ 
					themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); 
				} else { 
					if (localStorage.getItem("data-bs-theme")!== null){ 
						themeMode = localStorage.getItem("data-bs-theme");
					} else { 
						themeMode = defaultThemeMode; 
					}
				} if(themeMode === "system"){ 
					themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
				} 
				document.documentElement.setAttribute("data-bs-theme", themeMode); 
			}
			</script>
		// <!--end::Theme mode setup on page load-->

		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">

			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::sidebar mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="../../demo1/dist/index.html" class="d-lg-none">
								<img alt="Logo" src="assets/media/logos/default-small.svg" class="theme-light-show h-30px" />
								<img alt="Logo" src="assets/media/logos/default-small-dark.svg" class="theme-dark-show h-30px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::User menu-->
								<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="assets/media/avatars/300-3.jpg" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/media/avatars/300-3.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">Max Smith
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
												<span class="menu-text">My Projects</span>
												<span class="menu-badge">
													<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
												</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title">My Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<span class="form-check-label text-muted fs-7">Notifications</span>
														</label>
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">My Statements</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Language
												<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
												<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
													</span>English</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
													</span>Spanish</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
													</span>German</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
													</span>Japanese</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
													</span>French</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5 my-1">
											<a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->
								<!--begin::Header menu toggle-->
								<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
									<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
												<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="../../demo1/dist/index.html">
								<img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-30px app-sidebar-logo-default" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
								<span class="svg-icon svg-icon-2 rotate-180">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
										<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
								<!--begin::Menu-->
								<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title active">Dashboards</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu content-->
										<!-- <div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
										</div> -->
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
														<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Setup</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/projects.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Projects</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/campaigns.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Campaigns</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/documents.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Documents</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/followers.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Followers</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/user-profile/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
														<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
														<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
														<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Master Data</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/security.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Security</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/billing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Billing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/statements.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Statements</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/referrals.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Referrals</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/api-keys.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">API Keys</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/account/logs.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Logs</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
														<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Laporan</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Member</span>
												</span>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Email Templates</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/welcome-message.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Welcome Message</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/reset-password.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Reset Password</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/subscription-confirmed.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Subscription Confirmed</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/card-declined.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Credit Card Declined</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/promo-1.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Promo 1</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/promo-2.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Promo 2</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/authentication/email/promo-3.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Promo 3</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/welcome.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Welcome Message</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/verify-email.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Verify Email</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/coming-soon.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Coming Soon</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/password-confirmation.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Password Confirmation</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/account-deactivated.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Account Deactivation</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/error-404.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Error 404</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/error-500.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Error 500</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/authentication/general/maintenance.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Maintenance</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/files/fil003.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
														<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Member</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor" />
														<path d="M8.70001 6C8.10001 5.7 7.39999 5.40001 6.79999 5.10001C7.79999 4.00001 8.90001 3 10.1 2.2C10.7 2.1 11.4 2 12 2C12.7 2 13.3 2.1 13.9 2.2C12 3.2 10.2 4.5 8.70001 6ZM12 8.39999C13.9 6.59999 16.2 5.30001 18.7 4.60001C18.1 4.00001 17.4 3.6 16.7 3.2C14.4 4.1 12.2 5.40001 10.5 7.10001C11 7.50001 11.5 7.89999 12 8.39999ZM7 20C7 20.2 7 20.4 7 20.6C6.2 20.1 5.49999 19.6 4.89999 19C4.59999 18 4.00001 17.2 3.20001 16.6C2.80001 15.8 2.49999 15 2.29999 14.1C4.99999 14.7 7 17.1 7 20ZM10.6 9.89999C8.70001 8.09999 6.39999 6.9 3.79999 6.3C3.39999 6.9 2.99999 7.5 2.79999 8.2C5.39999 8.6 7.7 9.80001 9.5 11.6C9.8 10.9 10.2 10.4 10.6 9.89999ZM2.20001 10.1C2.10001 10.7 2 11.4 2 12C2 12 2 12 2 12.1C4.3 12.4 6.40001 13.7 7.60001 15.6C7.80001 14.8 8.09999 14.1 8.39999 13.4C6.89999 11.6 4.70001 10.4 2.20001 10.1ZM11 20C11 14 15.4 9.00001 21.2 8.10001C20.9 7.40001 20.6 6.8 20.2 6.2C13.8 7.5 9 13.1 9 19.9C9 20.4 9.00001 21 9.10001 21.5C9.80001 21.7 10.5 21.8 11.2 21.9C11.1 21.3 11 20.7 11 20ZM19.1 19C19.4 18 20 17.2 20.8 16.6C21.2 15.8 21.5 15 21.7 14.1C19 14.7 16.9 17.1 16.9 20C16.9 20.2 16.9 20.4 16.9 20.6C17.8 20.2 18.5 19.6 19.1 19ZM15 20C15 15.9 18.1 12.6 22 12.1C22 12.1 22 12.1 22 12C22 11.3 21.9 10.7 21.8 10.1C16.8 10.7 13 14.9 13 20C13 20.7 13.1 21.3 13.2 21.9C13.9 21.8 14.5 21.7 15.2 21.5C15.1 21 15 20.5 15 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Rekapan Harian</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
														<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Stok Out</span>
										</span>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M14 3V20H2V3C2 2.4 2.4 2 3 2H13C13.6 2 14 2.4 14 3ZM11 13V11C11 9.7 10.2 8.59995 9 8.19995V7C9 6.4 8.6 6 8 6C7.4 6 7 6.4 7 7V8.19995C5.8 8.59995 5 9.7 5 11V13C5 13.6 4.6 14 4 14V15C4 15.6 4.4 16 5 16H11C11.6 16 12 15.6 12 15V14C11.4 14 11 13.6 11 13Z" fill="currentColor" />
														<path d="M2 20H14V21C14 21.6 13.6 22 13 22H3C2.4 22 2 21.6 2 21V20ZM9 3V2H7V3C7 3.6 7.4 4 8 4C8.6 4 9 3.6 9 3ZM6.5 16C6.5 16.8 7.2 17.5 8 17.5C8.8 17.5 9.5 16.8 9.5 16H6.5ZM21.7 12C21.7 11.4 21.3 11 20.7 11H17.6C17 11 16.6 11.4 16.6 12C16.6 12.6 17 13 17.6 13H20.7C21.2 13 21.7 12.6 21.7 12ZM17 8C16.6 8 16.2 7.80002 16.1 7.40002C15.9 6.90002 16.1 6.29998 16.6 6.09998L19.1 5C19.6 4.8 20.2 5 20.4 5.5C20.6 6 20.4 6.60005 19.9 6.80005L17.4 7.90002C17.3 8.00002 17.1 8 17 8ZM19.5 19.1C19.4 19.1 19.2 19.1 19.1 19L16.6 17.9C16.1 17.7 15.9 17.1 16.1 16.6C16.3 16.1 16.9 15.9 17.4 16.1L19.9 17.2C20.4 17.4 20.6 18 20.4 18.5C20.2 18.9 19.9 19.1 19.5 19.1Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Careers</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/careers/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Careers List</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/pages/careers/apply.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Careers Apply</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor" />
														<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Utilities</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Modals</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">General</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/invite-friends.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Invite Friends</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/view-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">View Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/select-users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Upgrade Plan</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/general/share-earn.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Share & Earn</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Forms</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-target.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Target</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-card.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Card</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-address.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">New Address</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/create-api-key.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create API Key</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/forms/bidding.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Bidding</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Wizards</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-app.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create App</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Campaign</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-account.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Business Acc</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-project.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Create Project</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Top Up Wallet</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Offer a Deal</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Two Factor Auth</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
														<!--begin:Menu link-->
														<span class="menu-link">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Search</span>
															<span class="menu-arrow"></span>
														</span>
														<!--end:Menu link-->
														<!--begin:Menu sub-->
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/search/users.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Users</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item">
																<!--begin:Menu link-->
																<a class="menu-link" href="../../demo1/dist/utilities/modals/search/select-location.html">
																	<span class="menu-bullet">
																		<span class="bullet bullet-dot"></span>
																	</span>
																	<span class="menu-title">Select Location</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Menu sub-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Search</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/users.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/search/select-location.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Location</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Wizards</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/horizontal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Horizontal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/vertical.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Vertical</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/two-factor-authentication.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Two Factor Auth</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-app.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create App</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-campaign.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Campaign</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-account.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Account</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/create-project.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Create Project</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Top Up Wallet</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/utilities/wizards/offer-a-deal.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Offer a Deal</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item pt-5">
										<!--begin:Menu content-->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
														<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Projects</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">My Projects</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Project</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Targets</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Budget</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/users.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Users</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/files.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Files</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/activity.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Activity</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/projects/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
														<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
														<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">eCommerce</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Catalog</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Products</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Categories</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Product</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Product</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Category</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Category</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Sales</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Orders Listing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/details.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Order Details</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Add Order</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Edit Order</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customers</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/listing.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Listing</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/details.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Details</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Reports</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Products Viewed</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/sales.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Sales</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/returns.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Returns</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Customer Orders</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Shipping</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z" fill="currentColor" />
														<path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Contacts</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Getting Started</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/add-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add Contact</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/edit-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Edit Contact</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/contacts/view-contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Contact</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor" />
														<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Support Center</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Overview</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tickets</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tickets List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Ticket</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tutorials</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorials List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/post.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Tutorial Post</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/faq.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">FAQ</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/licenses.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Licenses</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/support-center/contact.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Contact Us</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="currentColor" />
														<path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">User Management</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Users</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/users/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Users List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/users/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View User</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Roles</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/roles/list.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Roles List</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/user-management/roles/view.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">View Role</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/user-management/permissions.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Permissions</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs040.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.7 8L7.49998 15.3L4.59999 20.3C3.49999 18.4 3.1 17.7 2.3 16.3C1.9 15.7 1.9 14.9 2.3 14.3L8.8 3L11.7 8Z" fill="currentColor" />
														<path opacity="0.3" d="M11.7 8L8.79999 3H13.4C14.1 3 14.8 3.4 15.2 4L20.6 13.3H14.8L11.7 8ZM7.49997 15.2L4.59998 20.2H17.6C18.3 20.2 19 19.8 19.4 19.2C20.2 17.7 20.6 17 21.7 15.2H7.49997Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Customers</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/customers/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Getting Started</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/customers/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customer Listing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/customers/view.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Customer Details</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/maps/map002.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M8.7 4.19995L4 6.30005V18.8999L8.7 16.8V19L3.1 21.5C2.6 21.7 2 21.4 2 20.8V6C2 5.4 2.3 4.89995 2.9 4.69995L8.7 2.09998V4.19995Z" fill="currentColor" />
														<path d="M15.3 19.8L20 17.6999V5.09992L15.3 7.19989V4.99994L20.9 2.49994C21.4 2.29994 22 2.59989 22 3.19989V17.9999C22 18.5999 21.7 19.1 21.1 19.3L15.3 21.8998V19.8Z" fill="currentColor" />
														<path opacity="0.3" d="M15.3 7.19995L20 5.09998V17.7L15.3 19.8V7.19995Z" fill="currentColor" />
														<path opacity="0.3" d="M8.70001 4.19995V2L15.4 5V7.19995L8.70001 4.19995ZM8.70001 16.8V19L15.4 22V19.8L8.70001 16.8Z" fill="currentColor" />
														<path opacity="0.3" d="M8.7 16.8L4 18.8999V6.30005L8.7 4.19995V16.8Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Subscription</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Getting Started</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Subscription List</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/add.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add Subscription</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/subscriptions/view.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Subscription</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M22 7H2V11H22V7Z" fill="currentColor" />
														<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Invoice Manager</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
												<!--begin:Menu link-->
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View Invoices</span>
													<span class="menu-arrow"></span>
												</span>
												<!--end:Menu link-->
												<!--begin:Menu sub-->
												<div class="menu-sub menu-sub-accordion menu-active-bg">
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-1.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Invoice 1</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-2.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Invoice 2</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item">
														<!--begin:Menu link-->
														<a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-3.html">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Invoice 3</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Menu sub-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Create Invoice</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
														<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">File Manager</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/folders.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Folders</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/files.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Files</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/blank.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Blank Directory</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/file-manager/settings.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Settings</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
														<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Inbox</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Messages</span>
													<span class="menu-badge">
														<span class="badge badge-success">3</span>
													</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Compose</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">View & Reply</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
														<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
														<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Chat</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/chat/private.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Private Chat</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/chat/group.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Group Chat</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Drawer Chat</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="../../demo1/dist/apps/calendar.html">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
														<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
														<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Calendar</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item pt-5">
										<!--begin:Menu content-->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/layouts/lay008.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="currentColor" />
														<path opacity="0.3" d="M20 21H11C10.4 21 10 20.6 10 20V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Layout Options</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/light-sidebar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Light Sidebar</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/dark-sidebar.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dark Sidebar</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/light-header.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Light Header</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../../demo1/dist/layouts/dark-header.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Dark Header</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/keen/demo1/layout-builder.html">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs014.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M11.8 5.2L17.7 8.6V15.4L11.8 18.8L5.90001 15.4V8.6L11.8 5.2ZM11.8 2C11.5 2 11.2 2.1 11 2.2L3.8 6.4C3.3 6.7 3 7.3 3 7.9V16.2C3 16.8 3.3 17.4 3.8 17.7L11 21.9C11.3 22 11.5 22.1 11.8 22.1C12.1 22.1 12.4 22 12.6 21.9L19.8 17.7C20.3 17.4 20.6 16.8 20.6 16.2V7.9C20.6 7.3 20.3 6.7 19.8 6.4L12.6 2.2C12.4 2.1 12.1 2 11.8 2Z" fill="currentColor" />
														<path d="M11.8 8.69995L8.90001 10.3V13.7L11.8 15.3L14.7 13.7V10.3L11.8 8.69995Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Layout Builder</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item pt-5">
										<!--begin:Menu content-->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
										</div>
										<!--end:Menu content-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/html/keen/docs/base/utilities" target="_blank">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="currentColor" />
														<path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Components</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/html/keen/docs" target="_blank">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
														<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Documentation</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link" href="https://preview.keenthemes.com/html/keen/docs/getting-started/changelog" target="_blank">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="currentColor" />
														<path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Changelog v3.0.3</span>
										</a>
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
							<a href="https://preview.keenthemes.com/html/keen/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
								<span class="btn-label">Docs & Components</span>
								<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
								<span class="svg-icon btn-icon svg-icon-2 m-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
										<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
										<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
										<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
										<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Sidebar-->

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Default</h1>
										<!--end::Title-->

										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboards</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">

									<!--begin::Row Active project & project earnings & authors achievements-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">

										<!--begin::Active projects && external link-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 20-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #3E97FF;background-image:url('assets/media/svg/shapes/widget-bg-1.png')">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects in April</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end pt-0">
													<!--begin::Progress-->
													<div class="d-flex align-items-center flex-column mt-3 w-100">
														<div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
															<span>43 Pending</span>
															<span>72%</span>
														</div>
														<div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
															<div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
													<!--end::Progress-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 20-->
											<!--begin::List widget 26-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title text-gray-800 fw-bold">External Links</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
																	<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 2-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mb-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Ticket</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Customer</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																<!--begin::Menu item-->
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">New Group</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--end::Menu item-->
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Admin Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Staff Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Member Group</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Contact</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mt-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3 py-3">
																	<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 2-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																	<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																	<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																	<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																	<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																	<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																	<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::LIst widget 26-->
										</div>
										<!--end::Active projects && external link-->

										<!--begin::project earnings && Highlight-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 17-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-success fs-base">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->2.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Others</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 17-->
											<!--begin::List widget 25-->
											<div class="card card-flush h-lg-50">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title text-gray-800">Highlights</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar d-none">
														<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
														<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
															<!--begin::Display range-->
															<div class="text-gray-600 fw-bold">Loading date range...</div>
															<!--end::Display range-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
															<span class="svg-icon svg-icon-1 ms-2 me-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																	<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																	<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Daterangepicker-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
														<!--end::Section-->
														<!--begin::Statistics-->
														<div class="d-flex align-items-senter">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																	<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Number-->
															<span class="text-gray-900 fw-bolder fs-6">7.8</span>
															<!--end::Number-->
															<span class="text-gray-400 fw-bold fs-6">/10</span>
														</div>
														<!--end::Statistics-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Quotes</div>
														<!--end::Section-->
														<!--begin::Statistics-->
														<div class="d-flex align-items-senter">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-danger me-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor" />
																	<path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Number-->
															<span class="text-gray-900 fw-bolder fs-6">730</span>
															<!--end::Number-->
														</div>
														<!--end::Statistics-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Agent Earnings</div>
														<!--end::Section-->
														<!--begin::Statistics-->
														<div class="d-flex align-items-senter">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																	<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--begin::Number-->
															<span class="text-gray-900 fw-bolder fs-6">$2,309</span>
															<!--end::Number-->
														</div>
														<!--end::Statistics-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::LIst widget 25-->
										</div>
										<!--end::project earnings && Highlight-->

										<!--begin::Col-->
										<div class="col-xxl-6">
											<!--begin::Tables widget 16-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Authors Achievements</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
																	<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 2-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mb-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Ticket</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Customer</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																<!--begin::Menu item-->
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">New Group</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--end::Menu item-->
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Admin Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Staff Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Member Group</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Contact</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mt-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3 py-3">
																	<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 2-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-drive fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-bank fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-like-1 fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-remote-control fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5">
																<!--begin::Icon-->
																<div class="nav-icon mb-3">
																	<i class="fonticon-telegram fs-1 p-0"></i>
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
																<!--end::Title-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
																			<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																			<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">78.34%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-2.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">63.83%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">92.56%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-7.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody Fishers</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">63.08%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
																			<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																			<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-25.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">85.23%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-24.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">74.83%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-20.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">90.06%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-17.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">54.08%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
																			<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																			<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-11.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">New York</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">52.34%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-23.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald Richards</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">77.65%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-4.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie Alexander</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">82.47%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-1.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney Henry</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">67.84%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
																			<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																			<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-12.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene McCoy</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">London</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">53.44%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-21.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinneyr</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">74.64%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-30.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">88.56%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-14.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">63.16%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
																			<th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
																			<th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
																			<th class="p-0 pb-3 w-50px text-end">VIEW</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-6.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">68.54%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-10.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">55.83%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-9.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">93.46%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div class="symbol symbol-circle symbol-50px me-3">
																						<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																					</div>
																					<div class="d-flex justify-content-start flex-column">
																						<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
																						<span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-13">
																				<span class="text-gray-600 fw-bold fs-6">64.48%</span>
																			</td>
																			<td class="text-end pe-0">
																				<div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
																			</td>
																			<td class="text-end">
																				<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
																					<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
																					<span class="svg-icon svg-icon-5 svg-icon-gray-700">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
																							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</a>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--end::Table container-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Tables widget 16-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row Active project & project earnings & authors achievements-->

									<!--begin::Row performace overview & performance-->
									<div class="row gx-5 gx-xl-10">

										<!--begin::performance overview-->
										<div class="col-xxl-6 mb-5 mb-xl-10">
											<!--begin::Chart widget 8-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Performance Overview</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<ul class="nav" id="kt_chart_widget_8_tabs">
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab">Month</a>
															</li>
															<li class="nav-item">
																<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab">Week</a>
															</li>
														</ul>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Tab content-->
													<div class="tab-content">
														<!--begin::Tab pane-->
														<div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-5">
																<!--begin::Statistics-->
																<div class="d-flex align-items-center mb-2">
																	<span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
																	<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
																	<span class="badge badge-light-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->4,8%</span>
																</div>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
															<!--end::Chart-->
															<!--begin::Items-->
															<div class="d-flex flex-wrap pt-5">
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Courses</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Radio</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Items-->
														</div>
														<!--end::Tab pane-->
														<!--begin::Tab pane-->
														<div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
															<!--begin::Statistics-->
															<div class="mb-5">
																<!--begin::Statistics-->
																<div class="d-flex align-items-center mb-2">
																	<span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
																	<span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
																	<span class="badge badge-light-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->2.2%</span>
																</div>
																<!--end::Statistics-->
																<!--begin::Description-->
																<span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
																<!--end::Description-->
															</div>
															<!--end::Statistics-->
															<!--begin::Chart-->
															<div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
															<!--end::Chart-->
															<!--begin::Items-->
															<div class="d-flex flex-wrap pt-5">
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Google Ads</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Courses</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-column pt-sm-3 pt-6">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center mb-3 mb-sm-6">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																	<!--begin::Item-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<span class="fw-bold text-gray-600 fs-6">Radio</span>
																		<!--end::Label-->
																	</div>
																	<!--ed::Item-->
																</div>
																<!--ed::Item-->
															</div>
															<!--ed::Items-->
														</div>
														<!--end::Tab pane-->
													</div>
													<!--end::Tab content-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart widget 8-->
										</div>
										<!--end::performance overview-->

										<!--begin::only performace-->
										<div class="col-xl-6 mb-5 mb-xl-10">
											<!--begin::Chart widget 36-->
											<div class="card card-flush overflow-hidden h-xl-100">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Performance</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
														<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4">
															<!--begin::Display range-->
															<div class="text-gray-600 fw-bold">Loading date range...</div>
															<!--end::Display range-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
															<span class="svg-icon svg-icon-1 ms-2 me-0">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																	<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																	<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Daterangepicker-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body d-flex align-items-end p-0">
													<!--begin::Chart-->
													<div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
													<!--end::Chart-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Chart widget 36-->
										</div>
										<!--end::only performace-->
									</div>
									<!--end::Row performace overview & performance-->

									<!--begin::Row visits country & visit sosmed & analyse your infrastrcture-->
									<div class="row gx-5 gx-xl-10">
										
										<!--begin::Visits country-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::List widget 8-->
											<div class="card card-flush h-lg-100">
												<!--begin::Header-->
												<div class="card-header pt-7 mb-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Visits by Country</span>
														<span class="text-gray-400 mt-1 fw-semibold fs-6">20 countries share 97% visits</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="../../demo1/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-light">View All</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-0">
													<!--begin::Items-->
													<div class="m-0">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Flag-->
															<img src="assets/media/flags/united-states.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Section-->
															<div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">United States</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct link clicks</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Info-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->2.6%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Flag-->
															<img src="assets/media/flags/brazil.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Section-->
															<div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">All Social Channels</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Info-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																				<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.4%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Flag-->
															<img src="assets/media/flags/turkey.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Section-->
															<div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mailchimp Campaigns</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Info-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->0.2%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Flag-->
															<img src="assets/media/flags/france.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Section-->
															<div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Impact Radius visits</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Info-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->4.1%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Flag-->
															<img src="assets/media/flags/india.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Section-->
															<div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Many Sources</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Info-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-danger fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																				<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->8.3%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
														<!--begin::Separator-->
														<div class="separator separator-dashed my-3"></div>
														<!--end::Separator-->
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Flag-->
															<img src="assets/media/flags/sweden.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
															<!--end::Flag-->
															<!--begin::Section-->
															<div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
																<!--begin::Content-->
																<div class="me-5">
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
																	<!--end::Title-->
																	<!--begin::Desc-->
																	<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																	<!--end::Desc-->
																</div>
																<!--end::Content-->
																<!--begin::Info-->
																<div class="d-flex align-items-center">
																	<!--begin::Number-->
																	<span class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="m-0">
																		<!--begin::Label-->
																		<span class="badge badge-light-success fs-base">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																		<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->1.9%</span>
																		<!--end::Label-->
																	</div>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::LIst widget 8-->
										</div>
										<!--end::Visits country-->

										<!--begin::Visits sosmed-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::List widget 9-->
											<div class="card card-flush h-xl-100">
												<!--begin::Header-->
												<div class="card-header py-7">
													<!--begin::Statistics-->
													<div class="m-0">
														<!--begin::Heading-->
														<div class="d-flex align-items-center mb-2">
															<!--begin::Title-->
															<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
															<!--end::Title-->
															<!--begin::Label-->
															<span class="badge badge-light-success fs-base">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->2.2%</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Description-->
														<span class="fs-6 fw-semibold text-gray-400">Visits by Social Networks</span>
														<!--end::Description-->
													</div>
													<!--end::Statistics-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
																	<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Menu 2-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mb-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Ticket</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Customer</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																<!--begin::Menu item-->
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">New Group</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--end::Menu item-->
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Admin Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Staff Group</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Member Group</a>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">New Contact</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mt-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<div class="menu-content px-3 py-3">
																	<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
																</div>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 2-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body card-body d-flex justify-content-between flex-column pt-3">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">579</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->2.6%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<img src="assets/media/svg/brand-logos/linkedin-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Media</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-danger fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.4%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<img src="assets/media/svg/brand-logos/slack-icon.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">794</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->0.2%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<img src="assets/media/svg/brand-logos/youtube-3.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video Channel</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">978</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->4.1%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Flag-->
														<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
														<!--end::Flag-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
															<!--begin::Content-->
															<div class="me-5">
																<!--begin::Title-->
																<a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
																<!--end::Title-->
																<!--begin::Desc-->
																<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social Network</span>
																<!--end::Desc-->
															</div>
															<!--end::Content-->
															<!--begin::Wrapper-->
															<div class="d-flex align-items-center">
																<!--begin::Number-->
																<span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>
																<!--end::Number-->
																<!--begin::Info-->
																<div class="m-0">
																	<!--begin::Label-->
																	<span class="badge badge-light-success fs-base">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->8.3%</span>
																	<!--end::Label-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::List widget 9-->
										</div>
										<!--end::Visits sosmed-->
										
										<!--begin::analyse your infrastrcture-->
										<div class="col-xxl-4 mb-5 mb-xl-10">
											<!--begin::Engage widget 11-->
											<div class="card card-flush h-xl-100" style="background-color: #202B46; background-image:url('assets/media/svg/shapes/widget-bg-2.png')" data-bs-theme="light">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-between mt-6 bgi-no-repeat bgi-size-cover bgi-position-x-center">
													<!--begin::Wrapper-->
													<div class="mb-10">
														<!--begin::Title-->
														<div class="fs-1 fw-bold text-white text-center mb-9">
														<span class="me-2">Analyse Your
														<br />
														<span class="position-relative d-inline-block">
															<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-success opacity-75-hover">Infrastructure</a>
															<!--begin::Separator-->
															<span class="position-absolute opacity-25 bottom-0 start-0 border-4 border-success border-bottom w-100"></span>
															<!--end::Separator-->
														</span></span>with Keen</div>
														<!--end::Title-->
														<!--begin::Action-->
														<div class="text-center">
															<a href='#' class="btn btn-sm btn-color-white bg-body bg-opacity-15 bg-hover-opacity-25 fw-bold fs-7" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Get Started</a>
														</div>
														<!--begin::Action-->
													</div>
													<!--begin::Wrapper-->
													<!--begin::Illustration-->
													<img class="mx-auto h-150px h-lg-200px mb-11" src="assets/media/svg/illustrations/sigma/illustration-realestate.svg" alt="" />
													<!--end::Illustration-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 11-->
										</div>
										<!--end::analyse your infrastrcture-->

									</div>
									<!--end::Row visits country & visit sosmed &analyse your infrastrcture-->


								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
							
						</div>
						<!--end::Content wrapper-->

						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Software Bali Creative</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->

			</div>
			<!--end::Page-->

		</div>
		<!--end::App-->


		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->

		<!--begin::Javascript-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?= base_url()?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?= base_url()?>assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?= base_url()?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>

		<script src="<?= base_url()?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->

		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?= base_url()?>assets/js/widgets.bundle.js"></script>
		<script src="<?= base_url()?>assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?= base_url()?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?= base_url()?>assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="<?= base_url()?>assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->

		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>