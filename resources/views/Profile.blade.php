<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="PreReq/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="PreReq/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="PreReq/js/html5shiv.min.js"></script>
	<script src="PreReq/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="PreReq/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="PreReq/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="PreReq/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="PreReq/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="PreReq/css/color/color-1.css">

</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
							<li>
								<select class="header-lang-bx">
									<option data-icon="flag flag-uk">English UK</option>
									<option data-icon="flag flag-us">English US</option>
								</select>
							</li>
							{{-- <li><a href="login.html">Login</a></li>
							<li><a href="register.html">Register</a></li> --}}
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
						<a href="index.html"><img src="PreReq/images/logo.png" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
							<a href="index.html"><img src="PreReq/images/logo.png" alt=""></a>
						</div>
                        <ul class="nav navbar-nav">
							<li class="active"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-down"></i></a>

							</li>

                        </ul>

							</li>




								</ul>
							</li>
						</ul>
						<div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(PreReq/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Profile</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Profile</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp1">
                <div class="container">
					 <div class="row">
						<div class="col-lg-3 col-md-4 col-sm-12 m-b30">
							<div class="profile-bx text-center">
								<br>
								<div class="profile-info">
									<h4> {{$User->name}}</h4>
                                    <span style="color: rgb(106, 2, 106);font-weight: bold">adresse email</span>
									<span> {{$User->email}}</span><br>
                                    <span style="color: rgb(106, 2, 106);font-weight: bold">Date de naissance</span><br>
                                    <span>{{$User->date_naiss}}</span>
								</div>
								<div class="profile-social">
									<ul class="list-inline m-a0">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
								<div class="profile-tabnav">
									<ul class="nav nav-tabs">
										<li class="nav-item">
											<a class="nav-link active"  href="{{ route('Profile') }}"><i class="ti-book"></i>Events</a>
										</li>

										<li class="nav-item">
											<a class="nav-link"  href="{{ route('userProfile') }}"><i class="ti-pencil-alt"></i>Edit Profile</a>
										</li>

									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8 col-sm-12 m-b30">
							<div class="profile-content-bx">
								<div class="tab-content">
									<div class="tab-pane active" id="courses">
										<div class="profile-head">
											<h3>Your events</h3>
											<div class="feature-filters style1 ml-auto">
												<ul class="filters" data-toggle="buttons">
													<li data-filter="" class="btn active">
														<input type="radio">
														<a href="#"><span>All</span></a>
													</li>
													<li data-filter="publish" class="btn">
														<input type="radio">
														<a href="#"><span>Publish</span></a>
													</li>
													<li data-filter="pending" class="btn">
														<input type="radio">
														<a href="#"><span>Pending</span></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="courses-filter">
											<div class="clearfix">



												<ul style="list-style: none" id="masonry" class="ttr-gallery-listing magnific-image row">
                                                    @foreach ($Events as $event )
                                                    <li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
														<div class="cours-bx">
															<div >
																<img src="{{ $event->Event->ev_pic}}" alt="">
															</div>
															<div class="info-bx text-center">
																<h5></a></h5>
																<span>{{ $event->Event->ev_name}}</span>
															</div>
															<div class="cours-more-info">
																{{-- <div class="review">
																	<span>3 Review</span>
																	<ul class="cours-star">
																		<li class="active"><i class="fa fa-star"></i></li>
																		<li class="active"><i class="fa fa-star"></i></li>
																		<li class="active"><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																		<li><i class="fa fa-star"></i></li>
																	</ul>
																</div> --}}
																<div class="price">

																	<h5>{{$event->Event->ev_price}}</h5>
																</div>
															</div>
														</div>
													</li>
                                                    @endforeach
												</ul>

											</div>
										</div>
									</div>



											</div>
										</div>
									</div>

    </div>
    <!-- Content END-->
	<!-- Footer ==== -->

    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>
<!-- External JavaScripts -->
<script src="PreReq/js/jquery.min.js"></script>
<script src="PreReq/vendors/bootstrap/js/popper.min.js"></script>
<script src="PreReq/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="PreReq/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="PreReq/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="PreReq/vendors/magnific-popup/magnific-popup.js"></script>
<script src="PreReq/vendors/counter/waypoints-min.js"></script>
<script src="PreReq/vendors/counter/counterup.min.js"></script>
<script src="PreReq/vendors/imagesloaded/imagesloaded.js"></script>
<script src="PreReq/vendors/masonry/masonry.js"></script>
<script src="PreReq/vendors/masonry/filter.js"></script>
<script src="PreReq/vendors/owl-carousel/owl.carousel.js"></script>
<script src="PreReq/js/functions.js"></script>
<script src="PreReq/js/contact.js"></script>
<script src='PreReq/vendors/switcher/switcher.js'></script>
</body>

</html>
