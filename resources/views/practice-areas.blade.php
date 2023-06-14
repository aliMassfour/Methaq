@extends('layouts.main')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('images/1.7ade2102.jpg');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">

		<div class="row no-gutters slider-text js-fullheight align-items-center " data-scrollax-parent="true">
			<center>
				<div class="col-md-6 ftco-animate" dir="rtl" style="text-align: right;">
					<h1 class="subheading">تعرف على خدماتنا</h1>
					{{-- <h2>
						<span class="txt-rotate text-white" data-period="2000"
							data-rotate='[  "الاستشارات القانونية", "التحكيم والوساطة", "الدفاع القانوني" ,"وغيرها من الخدمات"]'></span>
					</h2> --}}
					<!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
					<p class="mb-4"> نؤمن بأن القانون هو المنارة التي تضيء طريق العدالة، ونحن نسعى دائمًا لتوفير
						خدمات قانونية عالية الجودة والمهنية لعملائنا، لتحقيق النجاح والفوز في كل قضية نتولاها</p>

				</div>
			</center>
		</div>

	</div>
</div>
<section class="ftco-section">
	<div class="container">
		<div class="row d-flex justify-content-center">
			@foreach ($services as $service )
			<div class="col-md-3 text-center">
				<div class="practice-area ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						{{-- <span class="flaticon-family"></span> --}}
						<img src="{{ asset($service->image) }}" alt="">
					</div>
					<h3><a href="practice-single.html">{{ $service->name }}</a></h3>
					<p>{{ $service->descreption }}
					</p>
					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
							class="ion-ios-arrow-round-forward"></span></a>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>



<section class="ftco-section ftco-no-pt ftco-no-pb " id="about">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 d-flex">
				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
					style="background-image:url(images/person_2.jpg);">
					<a href="images/saudi.mp4"
						class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
						<span class="icon-play"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 pl-md-5">
				<div class="row justify-content-start pt-3 pb-3">
					<div class="col-md-12 heading-section ftco-animate" dir="rtl">
						<span class="subheading">من نحن؟</span><br>
						<h2 class="mb-4 text-right">فريق محاماة متخصص لتقديم الخدمات القانونيّة الشاملة والموثوقة
						</h2>
						<p< /p><br>
							<div class="tabulation-2 mt-4">
								<ul class="nav nav-pills nav-fill d-md-flex d-block">
									<li class="nav-item mb-md-0 mb-2">
										<a class="nav-link active py-2 text-center" data-toggle="tab"
											href="#home1">مهمّتنا</a>
									</li>
									<li class="nav-item px-lg-2 mb-md-0 mb-2">
										<a class="nav-link py-2 text-center" data-toggle="tab" href="#home2">رسالتنا</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 mb-md-0 mb-2 text-center" data-toggle="tab"
											href="#home3">قيمُنا</a>
									</li>
								</ul>
								<div class="tab-content bg-light rounded mt-2">
									<div class="tab-pane container p-0 active" id="home1">
										<p class="text-right"> نعمل جاهدين لتلبية احتياجات عملائنا في مجالات متنوعة
											من القانون ونسعى لتحقيق العدالة لعملائنا في جميع جوانب حياتهم
											القانونيّة، نستمع بعناية لاحتياجات العملاء وتلبية متطلباتهم بمهنية
											واحترافية.</p>
									</div>
									<div class="tab-pane container p-0 fade" id="home2">
										<p class="text-right">توفير خدمات قانونية عالية الجودة وذات مصداقية عالية
											لعملائنا. نحن نسعى جاهدين لتقديم المشورة القانونية الشاملة والموثوقة
											لعملائنا، وتمكينهم من فهم حقوقهم وواجباتهم والإجراءات القانونية المتعلقة
											بقضاياهم.

										</p>
									</div>
									<div class="tab-pane container p-0 fade" id="home3">
										<p class="text-right">الالتزام بأعلى معايير النزاهة والأخلاق في تقديم
											الخدمات القانونية، نحترم التنوع والتعدد الثقافي ونتعهد بتقديم الخدمات
											القانونية دون أي تمييز أو تحيز </p>
									</div>
								</div>
							</div>
							<div class="years d-flex mt-4 mt-md-5 mr-3" dir="ltr">
								<h4>
									<span class="number mr-2" data-number="25">0</span>
									<span>سنة من الخبرة !</span>
								</h4>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br><br><br><br>


<section class="ftco-section ftco-no-pt ftco-no-pb " id="whatsapp">
	<div class="container">
		<div class="row d-flex justify-content-end">

			<div class="col-md-8 py-4 px-md-4 bg-primary">
				<div class="row">

					<div class="col-md-6 d-flex align-items-center">
						<form action="#" class="subscribe-form">
							<div class="form-group d-flex">
								<input type="text" class="form-control" placeholder="WhatsApp" readonly>
								<a href=""><img src="images/whatsapp.ec57a4a3.png"
										style="height: 50px; width: 50px;"></a>
							</div>
						</form>
					</div>
					<div class="col-md-6 ftco-animate d-flex align-items-center">
						<h2 class="mb-0 text-right" style="color:white; font-size: 24px;">تواصل معنا واحجز عبر</h2>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>





<style>
	h1 {
		color: white;
	}
</style>
@endsection