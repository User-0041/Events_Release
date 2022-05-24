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
	<link rel="icon" href="/PreReq/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="/PreReq/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="/PreReq/js/html5shiv.min.js"></script>
	<script src="/PreReq/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css//assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="/PreReq/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="/PreReq/css/color/color-1.css">

</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(/PreReq/images/background/bg2.jpg);">
			<a href="index.html"></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="{{ route('login') }}">Click here</a></p>
				</div>
				<form class="contact-bx" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Name</label>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Phone Number</label>
									<input id="num_tel" type="tel" class="form-control @error('num_tel') is-invalid @enderror" name="num_tel" value="{{ old('num_tel') }}" required autocomplete="num_tel">
                                    @error('num_tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
                                    <label>Gender</label><br><br>
                                    <input type="checkbox" id="sex" name="sex" value="F">Female
                                    <input type="checkbox" id="sex" name="sex" value="M">Male
                                </div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Password</label>
									<input name="password" type="password" class="form-control" required=""id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Date of birth</label><br>
									<input id="date_naiss" type="date" class="form-control @error('date_naiss') is-invalid @enderror" name="date_naiss" value="{{ old('date_naiss') }}" required autocomplete="date_naiss">
                                    @error('date_naiss')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
							</div>
						</div>
                        <div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									{{-- <label>Picture</label><br><br>
									<input id="user_pic" type="file" class=" @error('user_pic') is-invalid @enderror" name="user_pic" value="{{ old('user_pic') }}" required autocomplete="user_pic">
                                    @error('user_pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> --}}
							</div>
						</div><br><br>
                        <center>
                            <div class="col-lg-12 m-b30">
                                <button name="submit" type="submit" value="Submit" class="btn button-md">  {{ __('Sign up') }}</button>
                            </div>
                        </center>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="/PreReq/js/jquery.min.js"></script>
<script src="/PreReq/vendors/bootstrap/js/popper.min.js"></script>
<script src="/PreReq/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/PreReq/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/PreReq/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="/PreReq/vendors/magnific-popup/magnific-popup.js"></script>
<script src="/PreReq/vendors/counter/waypoints-min.js"></script>
<script src="/PreReq/vendors/counter/counterup.min.js"></script>
<script src="/PreReq/vendors/imagesloaded/imagesloaded.js"></script>
<script src="/PreReq/vendors/masonry/masonry.js"></script>
<script src="/PreReq/vendors/masonry/filter.js"></script>
<script src="/PreReq/vendors/owl-carousel/owl.carousel.js"></script>
<script src="/PreReq/js/functions.js"></script>
<script src="/PreReq/js/contact.js"></script>
</body>

</html>
