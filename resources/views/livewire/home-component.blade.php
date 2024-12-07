<div>
    <!-- Slider Start -->
	<style>
		.banner {
			position: relative;
			overflow: hidden;
			background: #fff;
			background: url("{{asset('assets/images/Sliders')}}/{{$slider->image}}") no-repeat;
			background-size: cover;
			min-height: 550px;
			}
	</style>
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xl-7">
					<div class="block">
						<div class="mb-3 divider"></div>
						<span class="text-sm text-uppercase letter-spacing ">{{$slider?->sub_title}}</span>
						<h1 class="mt-3 mb-3">{{$slider?->title}}</h1>

						<p class="pr-5 mb-4">{{$slider?->description}}</p>
						<div class="btn-container ">
							<a href="{{route('apply')}}" class="btn btn-main-2 btn-icon btn-round-full">Make admission<i class="ml-2 icofont-simple-right "></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="feature-block d-lg-flex">
						<div class="mb-5 feature-item mb-lg-0">
							<div class="mb-4 feature-icon">
								<i class="icofont-ui-clock"></i>
							</div>
							<span>Latest news</span>
							<h4 class="mb-3">Our latest news</h4>
							<ul class="w-hours list-unstyled">
								<li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
								<li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
								<li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
							</ul>
							<a href="{{route('news')}}" class="btn btn-main btn-round-full">Check news</a>
						</div>

						<div class="mb-5 feature-item mb-lg-0">
							<div class="mb-4 feature-icon">
								<i class="icofont-surgeon-alt"></i>
							</div>
							<span>Make admission online</span>
							<h4 class="mb-3">Admission details</h4>
							<p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
							<a href="{{route('apply')}}" class="btn btn-main btn-round-full">Make admission</a>
						</div>

						<div class="mb-5 feature-item mb-lg-0">
							<div class="mb-4 feature-icon">
								<i class="icofont-support"></i>
							</div>
							<span>Emegency Cases</span>
							<h4 class="mb-3">Contact Us</h4>
							<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
							<a href="{{route('contact')}}" class="btn btn-main btn-round-full">Contact us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-sm-6">
					<div class="about-img">
						<img src="images/about/img-1.jpg" alt="" class="img-fluid">
						<img src="images/about/img-2.jpg" alt="" class="mt-4 img-fluid">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="mt-4 about-img mt-lg-0">
						<img src="images/about/img-3.jpg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pl-4 mt-4 about-content mt-lg-0">
						<h2 class="title-color">Why Choose HIMS for Medical Training in Bangladesh</h2>
						<p class="mt-4 mb-5">Heartbeat institute of medical science (HIMS) as a pioneer Institute for providing to improve the skills of medical student, Nutritionist, Pharmacist & Health Service Professionals. We work for building a diverse and inclusive medical community that sets the standard for educating to be leaders in creating a healthier, better world to enrich learning, foster innovation, and help to tackle the most vexing challenges in health care.</p>

						<a href="" class="btn btn-main-2 btn-round-full btn-icon">Read more about us<i class="ml-3 icofont-simple-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <section class="cta-section ">
		<div class="container">
			<div class="cta position-relative">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="icofont-doctor"></i>
							<span class="h3 counter" data-count="58">0</span>k
							<p>Happy People</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="icofont-flag"></i>
							<span class="h3 counter" data-count="700">0</span>+
							<p>Surgery Comepleted</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="icofont-badge"></i>
							<span class="h3 counter" data-count="40">0</span>+
							<p>Expert Doctors</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-stat">
							<i class="icofont-globe"></i>
							<span class="h3 counter" data-count="20">0</span>
							<p>Worldwide Branch</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section class="section service gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="text-center col-lg-7">
					<div class="section-title">
						<h2>Advanced Medical Skills @ Your Fingertips</h2>
						<div class="mx-auto my-4 divider"></div>
						<p>Explore our most sought-after courses and stay ahead in your field. All specialties covered to expand your medical knowledge.</p>
					</div>
				</div>
			</div>

			<div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="mb-4 service-item">
                            <a href="">
                                <!-- <i class="text-lg icofont-laboratory"></i> -->
                                <img src="{{ asset('assets/images/courses/'.$course->image) }}" alt="" class="img-fluid" width="100%">
                                <br>
                                <h4 class="mt-3 mb-3">{{ $course->course_name }}</h4>

                            <div class="content">
                                <a href="{{route('apply')}}" class="btn btn-main-2 btn-round-full btn-icon">more details | Enrol<i class="ml-3 icofont-simple-right"></i></a>
                            </div>
                        </a>
                        </div>
                    </div>
                @endforeach


			</div>
		</div>
	</section>
	<section class="section appoinment">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 ">
					<div class="appoinment-content">
						<img src="images/about/img-3.jpg" alt="" class="img-fluid">
						<div class="emergency">
							<h2 class="text-lg"><i class="text-lg icofont-phone-circle"></i>0 1730-191922</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-10 ">
					<div class="mt-5 appoinment-wrap mt-lg-0">
						<h2 class="mb-2 title-color">Make Admission</h2>
						<p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
						<form id="admission-form" class="appoinment-form" method="post" action="/submit-admission">


							<div class="row">
								<!-- Course Selection -->
								<div class="col-lg-6">
									<div class="form-group">
										<select class="form-control" name="course" required>
											<option value="" disabled selected>Choose Course</option>
											<option value="basic-first-aid">Basic First Aid</option>
											<option value="diploma-nursing">Diploma in Nursing</option>
											<option value="pharmacy-technician">Pharmacy Technician</option>
											<option value="medical-laboratory">Medical Laboratory Technology</option>
										</select>
									</div>
								</div>

								<!-- Full Name -->
								<div class="col-lg-6">
									<div class="form-group">
										<input name="full_name" type="text" class="form-control" placeholder="Full Name" required>
									</div>
								</div>

								<!-- Date of Birth -->
								<div class="col-lg-6">
									<div class="form-group">
										<input name="dob" type="date" class="form-control" placeholder="Date of Birth" required>
									</div>
								</div>

								<!-- Email -->
								<div class="col-lg-6">
									<div class="form-group">
										<input name="email" type="email" class="form-control" placeholder="Email Address" required>
									</div>
								</div>

								<!-- Phone -->
								<div class="col-lg-6">
									<div class="form-group">
										<input name="phone" type="text" class="form-control" placeholder="Phone Number" required>
									</div>
								</div>

								<!-- Address -->
								<div class="col-lg-6">
									<div class="form-group">
										<input name="address" type="text" class="form-control" placeholder="Address" required>
									</div>
								</div>

								<!-- Message (Optional) -->
								<div class="col-lg-12">
									<div class="form-group">
										<textarea name="message" class="form-control" rows="4" placeholder="Additional Information (Optional)"></textarea>
									</div>
								</div>
							</div>

							<!-- Submit Button -->
							<div class="form-group">
								<a class="btn btn-main btn-round-full" href="">Submit Application<i class="ml-2 icofont-simple-right"></i></a>
							</div>
						</form>
				</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section testimonial-2 gray-bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="text-center section-title">
						<h2>We trained over 5000+ Students</h2>
						<div class="mx-auto my-4 divider"></div>
						<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 testimonial-wrap-2">
					<div class="testimonial-block style-2 gray-bg">
						<i class="icofont-quote-right"></i>

						<div class="testimonial-thumb">
							<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
						</div>

						<div class="client-info ">
							<h4>Amazing service!</h4>
							<span>John Partho</span>
							<p>
								They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
							</p>
						</div>
					</div>

					<div class="testimonial-block style-2 gray-bg">
						<div class="testimonial-thumb">
							<img src="images/team/test-thumb2.jpg" alt="" class="img-fluid">
						</div>

						<div class="client-info">
							<h4>Expert doctors!</h4>
							<span>Mullar Sarth</span>
							<p>
								They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
							</p>
						</div>

						<i class="icofont-quote-right"></i>
					</div>

					<div class="testimonial-block style-2 gray-bg">
						<div class="testimonial-thumb">
							<img src="images/team/test-thumb3.jpg" alt="" class="img-fluid">
						</div>

						<div class="client-info">
							<h4>Good Support!</h4>
							<span>Kolis Mullar</span>
							<p>
								They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
							</p>
						</div>

						<i class="icofont-quote-right"></i>
					</div>

					<div class="testimonial-block style-2 gray-bg">
						<div class="testimonial-thumb">
							<img src="images/team/test-thumb4.jpg" alt="" class="img-fluid">
						</div>

						<div class="client-info">
							<h4>Nice Environment!</h4>
							<span>Partho Sarothi</span>
							<p class="mt-4">
								They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
							</p>
						</div>
						<i class="icofont-quote-right"></i>
					</div>

					<div class="testimonial-block style-2 gray-bg">
						<div class="testimonial-thumb">
							<img src="images/team/test-thumb1.jpg" alt="" class="img-fluid">
						</div>

						<div class="client-info">
							<h4>Modern Service!</h4>
							<span>Kolis Mullar</span>
							<p>
								They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
							</p>
						</div>
						<i class="icofont-quote-right"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section clients">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="text-center section-title">
						<h2>Partners who support us</h2>
						<div class="mx-auto my-4 divider"></div>
						<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row clients-logo">
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/1.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/2.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/3.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/4.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/5.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/6.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/3.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/4.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/5.png" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="client-thumb">
						<img src="images/about/6.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
