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
	<link rel="stylesheet" type="text/css" href="/PreReq/css/assets.css">

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

		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Login to your <span>Account</span></h2>
					<p>Don't have an account? <a href="{{ route('register') }}">Create one here</a></p>
				</div>
				<form class="contact-bx" method="POST" action="{{ route('login') }}">
                    @csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>{{ __('Email Address') }}</label>
									<input id="email" type="email"  required="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>{{ __('Password') }}</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                                    <label class="custom-control-label"  for="remember">{{ __('Remember Me') }}</label>
								</div>
                                @if (Route::has('password.request'))
								<a href="{{ route('password.request') }}" class="ml-auto">{{ __('Forgot Your Password?') }}</a>
                                @endif
							</div>
						</div>

						<div class="col-lg-12 m-b30">
							<center>
							<button name="submit" type="submit" value="Submit" class="btn button-md">{{ __('Login') }}</button>
						</center>
                        </div>
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
<script src='/PreReq/vendors/switcher/switcher.js'></script>
</body>

</html>
