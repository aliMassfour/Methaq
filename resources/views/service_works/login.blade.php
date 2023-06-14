<!DOCTYPE html>
<html lang="en">

<head>
	<title>تسجيل الدخول</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/loginvendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/login/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login/util.css">
	<link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
	</link>
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post"
					action="{{ route('login') }}">
					@csrf
					<span class="login100-form-title">
						تسجيل الدخول
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="يرجى ادخال اسم المستخدم">
						<input class="input100 text-right" type="email" name="email" placeholder="الايميل">
						<span class="focus-input100"></span>
					</div>

					@error('email')
					<p class="text-danger text-right ">خطأ في الايميل</p>
					@enderror

					<div class="wrap-input100 validate-input" data-validate="يرجى ادخال كلمة المرور">
						<input class="input100 text-right" type="password" name="password" placeholder="كلمة المرور">
						<span class="focus-input100"></span>

					</div>

					@error('password')
					<p class="text-danger text-right ">كلمة المرور خاطئة</p>
					@enderror


					<div class="text-right p-t-13 p-b-23 text-right">
						<span class="txt1">
							نسيت
						</span>

						<a href="#" class="txt2 text-right">
							اسم المستخدم / كلمة المرور؟
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class=" submit login100-form-btn text-right">
							تسجيل الدخول
						</button>
					</div><br><br>


				</form>
			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="js/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/login/vendor/bootstrap/js/popper.js"></script>
	<script src="ls/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="js/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="js/login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/login/main.js"></script>

</body>

</html>