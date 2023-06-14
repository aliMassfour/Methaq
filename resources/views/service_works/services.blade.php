@extends('layouts.admin')
@section('content')

<main>

	<!-- Sidebar START -->


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
					<h1 class="h3 mb-2 mb-sm-0 text-right" style="display: inline;">الخدمات المعروضة للعامة:</h1>
					<a href="#" style="float:left ;" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#add">
						+ إضافة خدمة جديدة</a>
				</div>



			</div>

			<!-- Main card START -->
			<div class="card bg-transparent border">

				<!-- Card header START -->
				<div class="card-header bg-light border-bottom">
					<!-- Search and select START -->
					<div class="row g-3 align-items-center justify-content-between">



						<!-- Card body START -->
						<div class="card-body">

							<div class="table-responsive border-0">
								<table class="table table-dark-gray align-middle p-4 mb-0 table-hover" dir="rtl">

									<!-- Table head -->
									<thead>
										<tr>
											<th scope="col" class="border-0 rounded-end text-center">اسم الخدمة</th>
											<th scope="col" class="border-0 text-center">وصف الخدمة</th>
											<th scope="col" class="border-0 text-center">أيقونة الخدمة</th>
											<th scope="col" class="border-0 rounded-start text-center">تعديل أو حذف
											</th>
										</tr>
									</thead>

									<!-- Table body START -->
									<tbody>


										@foreach ($services as $service )
										<tr>
											<!-- Table data -->
											<td>
												<div class="d-flex align-items-center position-relative">

													<div class="mb-0 ms-2">
														<!-- Title -->
														<h6 class="mb-0"><a href="#"
																class="stretched-link text-right">{{ $service->name
																}}
															</a></h6>
													</div>
												</div>
											</td>

											<!-- Table data -->
											<td class="text-right text-sm-start">
												<h6 class="mb-0 text-right" style="float: right;">
													{{ $service->descreption }}</h6>
											</td>

											<!-- Table data -->
											<td>
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="{{ asset($service->image) }}" class="rounded-circle"
														alt="">
												</div>
											</td>

											<!-- Table data -->
											<!-- Table data -->
											<td>
												<a href="{{ route('services.edit',$service->id) }}"
													class="btn btn-success me-1 mb-1 mb-md-0 ">تعديل</a>
												<form method="post"
													action="{{ route('services.destroy',$service->id) }}">
													@csrf
													@method('DELETE')
													<button type="submit" class="btn btn-primary-soft me-1 mb-0"
														data-bs-toggle="modal" data-bs-target="#appDetail">حذف</button>
												</form>
											</td>
										</tr>


										@endforeach


									</tbody>
									<!-- Table body END -->
								</table>
							</div>
							<!-- Instructor request table END -->
						</div>
						<!-- Card body END -->

						{{-- <!-- Card footer START -->
						<div class="card-footer bg-transparent pt-0">
							<!-- Pagination START -->
							<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
								<!-- Content -->
								<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
								<!-- Pagination -->
								<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
									<ul
										class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
										<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
													class="fas fa-angle-left"></i></a></li>
										<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
										<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
										<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
										<li class="page-item mb-0"><a class="page-link" href="#"><i
													class="fas fa-angle-right"></i></a></li>
									</ul>
								</nav>
							</div>
							<!-- Pagination END --> --}}
						</div>
						<!-- Card footer END -->
					</div>
					<!-- Main card END -->
				</div>
				<!-- Page main content END -->

			</div>
			<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!--add a new service-->
<!-- Modal START -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="appDetaillabel" aria-hidden="true" dir="rtl">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">

			<!-- Modal header -->
			<div class="modal-header bg-dark">
				<h5 class="modal-title text-white" id="appDetaillabel">أضف معلومات الخدمة وانقر على " حفظ"</h5>
				<button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i
						class="bi bi-x-lg"></i></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body p-5">
				<!-- Name -->
				<div class="card-body px-1 px-sm-4">
					<!-- Step content START -->
					<div class="bs-stepper-content">
						<form action="{{ route('service.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="row g-4">
								<!-- Course title -->
								<div class="col-12">
									<label class="form-label">الاسم</label>
									<input class="form-control" type="text" name="name" placeholder="ضع اسم الخدمة هنا">
								</div>

								<!-- Short description -->
								<div class="col-12 text-right">
									<label class="form-label">الوصف</label>
									<textarea name="descreption" class="form-control text-right" rows="2"
										placeholder="اكتب وصفاً للخدمة" style="float: right;">

									</textarea>
								</div>

								<div class="col-12">
									<label class="form-label">انقر لإضافة أيقونة</label>
									<input name="image" class="form-control" type="file">
								</div>
							</div>
							<!-- Modal footer -->
							<div class="modal-footer">
								<button type="submit" class="btn btn-danger-soft my-0"
									data-bs-dismiss="modal">حفظ</button>
							</div>
						</form>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>









<!-- Modal START -->







{{--
<!-- Modal START -->
<div class="modal fade" id="appDetail" tabindex="-1" aria-labelledby="appDetaillabel" aria-hidden="true" dir="rtl">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">

			<!-- Modal header -->
			<div class="modal-header bg-dark">
				<h5 class="modal-title text-white" id="appDetaillabel">هل أنت متأكد من أّنك تريد حذف الخدمة؟</h5>
				<button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i
						class="bi bi-x-lg"></i></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body p-5">
				<!-- Name -->
				<span class="small">اسم الخدمة</span>
				<h6 class="mb-3">القانون العائلي</h6>


				<img src="assets/images/avatar/03.jpg" class="rounded-circle" alt="">


				<!-- Summary -->

				<p class="text-dark mb-2 text-right">
					هو فرع من فروع القانون الذي يتعامل مع الجرائم الجنائية والعقوبات المفروضة على الجناة. ويهدف هذا
					القانون إلى حماية المجتمع من الأعمال الإجرامية والحفاظ على النظام العام
					هو فرع من فروع القانون الذي يتعامل مع الجرائم الجنائية والعقوبات المفروضة على الجناة. ويهدف هذا
					القانون إلى حماية المجتمع من الأعمال الإجرامية والحفاظ على النظام العام
					هو فرع من فروع القانون الذي يتعامل مع الجرائم الجنائية والعقوبات المفروضة على الجناة. ويهدف هذا
					القانون إلى حماية المجتمع من الأعمال الإجرامية والحفاظ على النظام العام
					هو فرع من فروع القانون الذي يتعامل مع الجرائم الجنائية والعقوبات المفروضة على الجناة. ويهدف هذا
					القانون إلى حماية المجتمع من الأعمال الإجرامية والحفاظ على النظام العام </p>

			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">حذف</button>
			</div>
		</div>
	</div>
</div> --}}
<!-- Modal END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>
@endsection