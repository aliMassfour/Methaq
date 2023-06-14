<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-instructor-request.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 15:48:20 GMT -->

<head>
	<title>الخدمات</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">




	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon2.ico') }}">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
	<link rel="stylesheet" type="text/css"
		href="{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
	<nav class="navbar sidebar navbar-expand-xl navbar-dark " style="background-color: #dee2e6;">

		<!-- Navbar brand for xl START -->
		<div class="d-flex align-items-center">
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item" src="{{ asset('assets/images/favicon2.ico') }}" alt=""
					style="width: 200px; height: 200px;">
			</a>
		</div>
		<!-- Navbar brand for xl END -->

		<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
			id="offcanvasSidebar">
			<div class="offcanvas-body sidebar-content d-flex flex-column " style="background-color: #afa939;">

				<!-- Sidebar menu START -->
				<ul class="navbar-nav flex-column" id="navbar-sidebar" dir="rtl">

					<li class="nav-item">
						<a class="nav-link active text-right" href="{{ route('admin.index') }}">
							<i class="fas fa-user-cog fa-fw ms-2"></i>
							الخدمات
						</a>

					</li>

					<li class="nav-item"> <a class="nav-link text-right" href="{{ route('settings') }}"><i
								class="fas fa-user-cog fa-fw ms-2"></i>إعدادات الحساب</a></li>
					<li class="nav-item">
						<form action="{{ route('logout') }}" method="post">
							@csrf
							<div class="nav-item" id="navbar-sidebar">
								<button style="border: none" class="nav-link active text-right" type="submit"
									value="logout">
									تسجيل الخروج</button>
							</div>
						</form>
					</li>
				</ul>
				<!-- Sidebar menu end -->

			</div>
		</div>


	</nav>
	<!-- Sidebar END -->
	@yield('content')

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

	<!-- Vendors -->
	<script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>

	<!-- Template Functions -->
	<script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>