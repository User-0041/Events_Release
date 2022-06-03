<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
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
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
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
	<link rel="stylesheet" type="text/css" href="PreReq/vendors/calendar/fullcalendar.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="PreReq/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="PreReq/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="PreReq/css/style.css">
	<link rel="stylesheet" type="text/css" href="PreReq/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="PreReq/css/color/color-1.css">

</head>
<body class="ttr-opened-sidebar ">

	<!-- header start -->


	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">User Profile</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>User Profile</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>User Profile</h4>
						</div>

						<div class="widget-inner">
							<form action="{{route('UserUpdate')}}" method="POST" enctype="multipart/form-data" class="edit-profile m-b30">

                                @csrf
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
											<input class="form-control" name="name" type="text" value="{{$User->name}}">
                                            @error('name')


											<small class="text-danger"><{{ $message }}></small>
                                            @enderror
										</div>

									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email Address</label>
										<div class="col-sm-7">
											<input class="form-control" name="email" type="text" value="{{$User->email}}">
                                            @error('email')


											<small class="text-danger"><{{ $message }}></small>
                                            @enderror
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Phone Number</label>
										<div class="col-sm-7">
											<input class="form-control"   name="num_tel"  type="text" value="{{$User->num_tel}}">
                                            @error('num_tel')


											<small class="text-danger"><{{ $message }}></small>
                                            @enderror
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-sm-2 col-form-label">Date de naissance</label>
										<div class="col-sm-7">
											<input class="form-control" type="date" name="date_naiss" value="{{$User->date_naiss}}">
                                            @error('date_naiss')


											<small class="text-danger"><{{ $message }}></small>
                                            @enderror
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
								  </div>
								  <div class="">
									<div class="">
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-7">
												<button type="submit" class="btn">Save changes</button>
												<button type="reset" class="btn-secondry">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<form  action="{{route('changepassword')}}" method="POST" enctype="multipart/form-data" class="edit-profile">
                                @csrf

								<div class="">
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>4. Password</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Current Password</label>
										<div class="col-sm-7">
											<input name="current_password" class="form-control" type="password" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">New Password</label>
										<div class="col-sm-7">
											<input name="new_password" class="form-control" type="password" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Re Type Password</label>
										<div class="col-sm-7">
											<input name="new_confirm_password" class="form-control" type="password" value="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
									</div>
									<div class="col-sm-7">
										<button type="submit" class="btn">Save changes</button>
										<button type="reset" class="btn-secondry">Cancel</button>
									</div>
								</div>

							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

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
<script src='PreReq/vendors/scroll/scrollbar.min.js'></script>
<script src="PreReq/js/functions.js"></script>
<script src="PreReq/vendors/chart/chart.min.js"></script>
<script src="PreReq/js/admin.js"></script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
</html>
