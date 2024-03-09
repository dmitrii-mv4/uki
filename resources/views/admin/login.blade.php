<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<title>Вход в панель управления</title>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="/assets/admin/porto/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/css/custom.css">

		<!-- Head Libs -->
		<script src="/assets/admin/porto/vendor/modernizr/modernizr.js"></script>

	</head>
	<body class="body-login">
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-end">
						<h2 class="custom-login-title title text-uppercase m-0"> Вход в панель управления</h2>
					</div>
					<div class="custom-card-body card-body">
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
							<div class="form-group mb-3">
								<label>{{ __('Почта') }}</label>
								<div class="input-group">
                                    <input id="email" type="email" class="custom-login-input form-control form-control-lg\ @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
									
                                    <span class="castum-input-group-text input-group-text">
										<i class="bx bx-user text-4"></i>
									</span>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">{{ __('Пароль') }}</label>
									{{-- <a href="pages-recover-password.html" class="float-end">Lost Password?</a> --}}
								</div>
								<div class="input-group">
                                    <input id="password" type="password" class="custom-login-input form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

									<span class="castum-input-group-text input-group-text">
										<i class="bx bx-lock text-4"></i>
									</span>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
                                        <input class="custom-form-check-input form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
									</div>
								</div>
								<div class="col-sm-4 text-end">
                                    <button type="submit" class="btn btn-primary mt-2">
                                        {{ __('Войти') }}
                                    </button>
								</div>
							</div>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2024. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/nanoscroller/nanoscroller.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->

		<!-- Theme Base, Components and Settings -->
		<script src="/assets/admin/porto/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="/assets/admin/porto/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="/assets/admin/porto/js/theme.init.js"></script>

	</body>
</html>