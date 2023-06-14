{{--
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-instructor-request.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 15:48:20 GMT -->

<head>
	<title>إعدادات الحساب</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">




	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css">
	<link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
	</link>
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

	<main>
		--}}
		<!-- Sidebar START -->\
		@extends('layouts.admin')
		@section('content')
		{{-- <nav class="navbar sidebar navbar-expand-xl navbar-dark " style="background-color: #dee2e6;">

			<!-- Navbar brand for xl START -->
			<div class="d-flex align-items-center">
				<a class="navbar-brand" href="index.html">
					<img class="navbar-brand-item" src="assets/images/favicon2.ico" alt=""
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
							<a class="nav-link text-right" href="services.html">
								<i class="fas fa-user-cog fa-fw ms-2"></i>
								الخدمات
							</a>

						</li>

						<li class="nav-item"> <a class="nav-link active text-right" href="setting.html"><i
									class="fas fa-user-cog fa-fw ms-2"></i>إعدادات الحساب</a></li>
					</ul>
					<!-- Sidebar menu end -->

				</div>
			</div>
		</nav>
		<!-- Sidebar END --> --}}

		<!-- Page content START -->
		<div class="page-content" dir="rtl">

			<!-- Page main content START -->
			<div class="page-content-wrapper border">
				<!-- Toggler for sidebar START -->
				<div class="navbar-expand-xl sidebar-offcanvas-menu">
					<button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas"
						data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false"
						aria-label="Toggle navigation" data-bs-auto-close="outside">
						<i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
					</button>
				</div>
				<!-- Toggler for sidebar END -->

				<!-- Title -->
				<div class="row mb-3">
					<div class="col-10">
						<h1 class="h3 mb-2 mb-sm-0 text-right" style="display: inline;">تعديل معلومات الحساب :</h1>

					</div>
				</div>

				<!-- Change password -->
				<div class="card-body">
					<div class="table-responsive border-0">
						<div class="bg-light rounded-3 p-4 mb-3">
							<div class="d-md-flex justify-content-between align-items-center">
								<!-- Content -->
								<div>
									<h6 class="h5">تغيير كلمة المرور</h6>
									<p class="mb-1 mb-md-0">اختر كلمة مرور قوية لحماية حسابك</p>
								</div>
								<!-- Button -->
								<div>
									<a href="{{ route('admin.change.password') }}" class="btn btn-primary mb-1" data-bs-toggle="modal"
										data-bs-target="#changePassword">انقر للتغيير</a>
									<p class="mb-0 small h6">Last change 10 Aug 2020</p>
								</div>
							</div>
						</div>
					</div>
				</div>




				<div class="card-body">
					<div class="table-responsive border-0">
						<div class="bg-light rounded-3 p-4 mb-3">
							<div class="d-md-flex justify-content-between align-items-center">
								<!-- Content -->
								<div>
									<h6 class="h5">تغيير الإيميل</h6>
									<p class="mb-1 mb-md-0">يمكنك تحديث الإيميل</p>
								</div>
								<!-- Button -->
								<div>
									<a href="{{ route('admin.change.email') }}" class="btn btn-primary mb-1" data-bs-toggle="modal"
										data-bs-target="#changeEmail">انقر للتغيير</a>
									<p class="mb-0 small h6">Last change 10 Aug 2020</p>
								</div>
							</div>
						</div>
					</div>
				</div>
	</main>







{{-- 
	<!-- Popup modal for Change Password START -->
	<div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true"
		dir="rtl">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal header -->
				<div class="modal-header bg-dark">
					<h5 class="modal-title text-white" id="changePasswordLabel">Change Password</h5>
					<button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
						aria-label="Close"><i class="bi bi-x-lg"></i></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form class="row">

						<p class="mb-2">انتهت صلاحية كلمة مرورك، قم بتعيين كلمة مرور جديدة</p>
						<!-- Input item -->
						<div class="col-12">
							<label class="form-label">كلمة المرور القديمة : <span class="text-danger">*</span></label>
							<input type="Password" class="form-control" placeholder="Enter old password">
						</div>

						<p class="mb-2 mt-4">يجب أن تكون كلمة المرور مكونة من 8 محارف على الأقل ولا تحوي فراغات</p>
						<!-- Input item -->
						<div class="col-12 mb-3">
							<label class="form-label">كلمة المرور الجديدة : <span class="text-danger">*</span></label>
							<input type="password" class="form-control" placeholder="Enter new passowrd">
						</div>

						<!-- Input item -->
						<div class="col-12">
							<label class="form-label">تأكيد كلمة المرور : <span class="text-danger">*</span></label>
							<input type="password" class="form-control" placeholder="Enter confirm passowrd">
						</div>
					</form>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success my-0">Change Password</button>
				</div>
			</div>
		</div>
	</div> --}}



{{-- 
	<!-- Popup modal for Change Email START -->
	<div class="modal fade" id="changeEmail" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true"
		dir="rtl">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal header -->
				<div class="modal-header bg-dark">
					<h5 class="modal-title text-white" id="changePasswordLabel">Change Password</h5>
					<button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
						aria-label="Close"><i class="bi bi-x-lg"></i></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form class="row">
						<!-- Input item -->
						<div class="col-12">
							<label class="form-label">الايميل الجديد :<span class="text-danger">*</span></label>
							<input type="email" class="form-control" placeholder="Enter old password">
						</div>
						<!-- Input item -->
						<div class="col-12 mb-3">
							<label class="form-label">كلمة المرور : <span class="text-danger">*</span></label>
							<input type="password" class="form-control" placeholder="Enter new passowrd">
						</div>
					</form>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success my-0">Change Email</button>
				</div>
			</div>
		</div>
	</div> --}}


	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<!-- Bootstrap JS -->
	{{-- <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="assets/vendor/choices/js/choices.min.js"></script>
	<script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>

	<!-- Template Functions -->
	<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/admin-instructor-request.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 15:48:20 GMT -->

</html> --}}
@endsection