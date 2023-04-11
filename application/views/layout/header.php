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

	<head><base href="../"/>
		<title>Software Bali Creative - Dashboard</title>
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
		<link rel="shortcut icon" href="<?= base_url()?>assets/media/logos/favicon.ico" />
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


	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<!-- ====== Start App ====== -->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!-- ====== Start Page ====== -->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">

				<!-- ====== Start Header ====== -->
				<div id="kt_app_header" class="app-header">

					<!-- ====== Start Header container ====== -->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">

						<!-- ====== Start sidebar mobile toggle ====== -->
						<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<!-- ====== Start Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!-- ====== End sidebar mobile toggle ====== -->

						<!-- ====== Start Mobile logo ====== -->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="../../demo1/dist/index.html" class="d-lg-none">
								<img alt="Logo" src="<?= base_url()?>assets/media/logos/default-small.svg" class="theme-light-show h-30px" />
								<img alt="Logo" src="<?= base_url()?>assets/media/logos/default-small-dark.svg" class="theme-dark-show h-30px" />
							</a>
						</div>
						<!-- ====== Start Mobile logo ====== -->

						<!-- ====== Start Header wrapper ====== -->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

							<!-- ======= Start Menu wrapper ====== -->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

								<!-- ====== Start Menu ====== -->
								<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">

									<!-- ====== Start Menu item ====== -->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">

										<!-- ====== Start Menu link ====== -->
										<span class="menu-link">
											<span class="menu-title">/ Dashboard</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--====== End Menu link ====== -->

									</div>
									<!--====== End Menu item ====== -->

								</div>
								<!--====== End Menu ====== -->

							</div>
							<!--======= End Menu wrapper ====== -->

						</div>
						<!-- ====== End Header wrapper ====== -->

					</div>
					<!-- ====== End Header container ====== -->
				</div>
				<!-- ====== End Header ====== -->
				

				<!-- ======  Start Wrapper Side Bar ====== -->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<!-- ====== Start Sidebar Desktop ======-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

						<!-- ====== Start Logo Desktop ===== -->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">

							<!-- ====== Start Logo Desktop ===== -->
							<a href="#" class="app-sidebar-logo-default text-white fw-bold">
								SBC Dashboard
							</a>
							<!--====== End Logo Desktop ===== -->

							<!--====== Start Sidebar Toggle ===== -->
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
							<!--====== End Sidebar Toggle =====-->

						</div>
						<!--====== End Logo Desktop ===== -->


						<!-- ====== Start sidebar menu ====== -->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">

							<!-- ====== Start Menu wrapper ====== -->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">

								<!-- ====== Start Menu ====== -->
								<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

									<!-- ====== Start Menu item Dashboard ====== -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">

										<!-- ====== Start Menu link ====== -->
										<span class="menu-link active">
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
											<span class="menu-title">Dashboard</span>
										</span>
										<!--====== End Menu link ====== -->

									</div>
									<!--====== End Menu item Dashboard ====== -->


									<!-- ====== Start Main Menu Analysis ====== -->
									<div class="menu-item pt-5">
										<!-- ====== Start Menu content ====== -->
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Analysis</span>
										</div>
										<!-- ====== End Menu content ====== -->
									</div>
									<!-- ====== Start Main Menu Analysis ====== -->

									
									<!-- ====== Start Menu item Setup  ====== -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">

										<!-- ===== Start Menu link Setup ===== -->
										<span class="menu-link">
											<span class="menu-icon">
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
														<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
													</svg>
												</span>
											</span>
											<span class="menu-title">Setup</span>
											<span class="menu-arrow"></span>
										</span>
										<!--===== End Menu link Setup Setup  ===== -->

										<!-- ======  Start Sub Menu Setup  ====== -->
										<div class="menu-sub menu-sub-accordion">

											<!-- ======  Start Menu item Pengguna ===== -->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Pengguna</span>
												</a>
											</div>
											<!--======  End Menu item Pengguna ===== -->

											<!-- ======  Start Menu item Store ===== -->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Store</span>
												</a>
											</div>
											<!-- ======  End Menu item Store ===== -->

											<!-- ======  Start Menu item Brand ===== -->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Brand</span>
												</a>
											</div>
											<!-- ======  End  Menu item Brand ===== -->

											<!-- ======  Start Menu item Kategori ===== -->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Kategori</span>
												</a>
											</div>
											<!-- ======  Start Menu item Kategori ===== -->

											<!-- ======  Start Menu item Size ===== -->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Size</span>
												</a>
											</div>
											<!-- ======  Start Menu item Size ===== -->
											
										</div>
										<!--======  End Sub Menu Setup  ====== -->
									</div>
									<!-- ====== End Menu item ====== -->


									<!-- ====== Start Menu item Master Data ====== -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">

										<!-- ====== Start Menu link Master Data ====== -->
										<span class="menu-link">
											<span class="menu-icon">
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor" />
														<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor" />
														<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor" />
														<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor" />
													</svg>
												</span>
											</span>
											<span class="menu-title">Master Data</span>
											<span class="menu-arrow"></span>
										</span>
										<!-- ====== End Menu link Master Data ======-->

										<!-- ====== Start Sub Menu Master Data ======-->
										<div class="menu-sub menu-sub-accordion">

											<!-- ====== Start Menu item Staff ====== -->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Staff</span>
												</a>
											</div>
											<!-- ====== Start Menu item Staff ======-->

											<!--====== Start Menu item Produk ======-->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Produk</span>
												</a>
											</div>
											<!--====== End Menu item Produk ======-->
											
											<!--====== Start Menu item Produk Size ======-->
											<div class="menu-item">
												<a class="menu-link" href="<?= base_url()?>dashboard#">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Security</span>
												</a>
											</div>
											<!--====== End Menu item Produk ======-->

										</div>
										<!-- ====== End Sub Menu Master Data ======-->

									</div>
									<!-- ====== End Menu item Master Data ====== -->

									<!-- ====== Start Menu item Member ====== -->
									<div class="menu-item menu-accordion">
										<a class="menu-link" href="<?= base_url()?>dashboard#">
											<span class="menu-icon">
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
														<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
													</svg>
												</span>
											</span>
											<span class="menu-title">Member</span>
										</a>
									</div>
									<!--====== End Menu item Member ====== -->

									<!-- ====== Start Main Menu item Laporan -->
									<div class="menu-item pt-5">
										<div class="menu-content">
											<span class="menu-heading fw-bold text-uppercase fs-7">Laporan</span>
										</div>
									</div>
									<!-- ====== End Main Menu item Laporan -->

									<!-- ===== Start Menu item Lapoan ====== -->
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
										<!--===== Start Menu item Laporan ====== -->
										<span class="menu-link">
											<span class="menu-icon">
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor" />
														<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor" />
													</svg>
												</span>
											</span>
											<span class="menu-title">Laporan</span>
											<span class="menu-arrow"></span>
										</span>
										<!--===== End Menu item Lapoan ====== -->

										<!--===== Start Sub Menu Laporan ====== -->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Persediaan Global</span>
												</a>
											</div>
											<!--===== End Menu item Persediaan Global ====== -->

											<!--===== Start Menu item Penjualan Summary ====== -->
											<div class="menu-item">
												<a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Penjualan Summary</span>
												</a>
											</div>
											<!--End Menu item Penjualan Summary-->

										</div>
										<!--===== End Sub Menu Laporan ======-->
									</div>
									<!--===== Start Menu item Lapoan ====== -->

									<!-- ====== Start Menu item Rekapan Harian ====== -->
									<div class="menu-item menu-accordion">
										<!-- ====== Start Menu link ====== -->
										<a class="menu-link " href="<?= base_url()?>dashboard#">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
														<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Rekapan Harian</span>
										</a>
										<!--====== End Menu link ====== -->

									</div>
									<!--====== End Menu item Rekapan Harian ====== -->

									<!-- ====== Start Menu item Stock Out ====== -->
									<div  class="menu-item menu-accordion">
										<!-- ====== Start Menu link ====== -->
										<a class="menu-link" href="<?= base_url()?>dashboard#">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
														<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
														<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Stock Out</span>
										</a>
										<!--====== End Menu link ====== -->

									</div>
									<!--====== End Menu item Stock Out ====== -->

									<!-- ====== Start Menu item Konfirmasi Permintaan ====== -->
									<div  class="menu-item menu-accordion">
										<!-- ====== Start Menu link ====== -->
										<a class="menu-link " href="<?= base_url()?>dashboard#">
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
											<span class="menu-title">Konfirmasi Permintaan</span>
										</a>
										<!--====== End Menu link ====== -->

									</div>
									<!--====== End Menu item Konfirmasi Permintaan ====== -->

									<!-- ====== Start Menu item Logout ====== -->
									<div class="menu-item menu-accordion">
										<!-- ====== Start Menu link ====== -->
										<a class="menu-link " href="<?= base_url()?>dashboard#">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M8 6C6.89543 6 6 6.89543 6 8V40C6 41.1046 6.89543 42 8 42H40C41.1046 42 42 41.1046 42 40V24V8C42 6.89543 41.1046 6 40 6H8ZM42 24L32 32V26H16V22H32V16L42 24Z" fill="currentColor"/>
														<path d="M32 16L42 24L32 32V26H16V22H32V16Z" fill="#324558"/>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Logout</span>
										</a>
										<!--====== End Menu link ====== -->

									</div>
									<!--====== End Menu item Logout ====== -->

								</div>
								<!--====== End Menu ====== -->
							</div>
							<!--====== End Menu wrapper ====== -->
						</div>
						<!--====== End sidebar menu ====== -->

					</div>
					<!--====== End Sidebar Desktop ======-->

					
					<!-- ====== Start Main Content ====== -->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
