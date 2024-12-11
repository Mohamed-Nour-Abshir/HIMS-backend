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
						<img src="{{asset('assets/images/about/img-1.jpg')}}" alt="" class="img-fluid">
						<img src="{{asset('assets/images/about/img-2.jpg')}}" alt="" class="mt-4 img-fluid">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="mt-4 about-img mt-lg-0">
						<img src="{{asset('assets/images/about/img-3.jpg')}}" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pl-4 mt-4 about-content mt-lg-0">
						<h2 class="title-color">Why Choose HIMS for Medical Training in Bangladesh</h2>
						<p class="mt-4 mb-5">Heartbeat institute of medical science (HIMS) as a pioneer Institute for providing to improve the skills of medical student, Nutritionist, Pharmacist & Health Service Professionals. We work for building a diverse and inclusive medical community that sets the standard for educating to be leaders in creating a healthier, better world to enrich learning, foster innovation, and help to tackle the most vexing challenges in health care.</p>

						<a href="{{route('mission')}}" class="btn btn-main-2 btn-round-full btn-icon">Read more about us<i class="ml-3 icofont-simple-right"></i></a>
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
						<img src="{{asset('assets/images/about/img-3.jpg')}}" alt="" class="img-fluid">
						<div class="emergency">
							<h2 class="text-lg"><i class="text-lg icofont-phone-circle"></i>0 1730-191922</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-10 ">
					<div class="mt-5 appoinment-wrap mt-lg-0">
						<h2 class="mb-2 title-color">Make Your Admission Today</h2>
						<p class="mb-4">Join our institution to unlock a world of opportunities! Start your academic journey by enrolling in one of our prestigious programs. Take the first step towards achieving your dreams and building a brighter future with us.</p>

						<form id="admission-form" class="appoinment-form" wire:submit.prevent='applyNow'>
							<div class="row">
								<div class="col-12">
									@if(Session::has('message'))
										<div class="alert alert-success contact__msg" role="alert">
											{{Session::get('message')}}
										</div>
									@endif
								</div>
							</div>
							<div class="row">
								<!-- Course Selection -->
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Course</label>
										<select class="form-control" wire:model='course_name'>
											<option value="" disabled selected>Choose Course</option>
											@foreach ($courses as $course)
												<option value="{{$course->course_name}}">{{$course->course_name}}</option>
											@endforeach

										</select>
										@error('course_name') <span class="text-danger">{{$message}}</span> @enderror
									</div>
								</div>

								<!-- Full Name -->
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Full Name</label>
										<input wire:model="full_name" type="text" class="form-control" placeholder="Full Name">
										@error('full_name') <span class="text-danger">{{$message}}</span> @enderror
									</div>
								</div>

								<!-- Date of Birth -->
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Date of Birth</label>
										<input wire:model="dob" type="date" class="form-control" placeholder="Date of Birth">
										@error('dob') <span class="text-danger">{{$message}}</span> @enderror
									</div>
								</div>

								<!-- Email -->
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Email address</label>
										<input wire:model="email" type="email" class="form-control" placeholder="Email Address">
										@error('email') <span class="text-danger">{{$message}}</span> @enderror
									</div>
								</div>

								<!-- Phone -->
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Phone number</label>
										<input wire:model="phone" type="text" class="form-control" placeholder="Phone Number">
										@error('phone') <span class="text-danger">{{$message}}</span> @enderror
									</div>
								</div>

								<!-- Address -->
								<div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">BMDC Registration No</label>
                                        <input wire:model="bmdc_reg_no" type="text" class="form-control" placeholder="BMDC Registration No">
                                        @error('bmdc_reg_no') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Present address</label>
                                        <input wire:model="address" type="text" class="form-control" placeholder="Address">
                                        @error('address') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>

								<!-- Message (Optional) -->
								<div class="col-lg-12">
									<div class="form-group">
										<label for="">Additional Information</label>
										<textarea wire:model="additional_info" class="form-control" rows="4" placeholder="Additional Information (Optional)"></textarea>
									</div>
								</div>
							</div>

							<!-- Submit Button -->
							<div class="form-group">
								<button class="btn btn-main btn-round-full">Submit Application<i class="ml-2 icofont-simple-right"></i></button>
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
						<h2>Empowering Over 5,000 Students Worldwide</h2>
						<div class="mx-auto my-4 divider"></div>
						<p>Join our community of learners and unlock your true potential with cutting-edge courses, expert mentorship, and hands-on training. Discover opportunities to excel in your career and make a lasting impact in your chosen field.</p>

					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12 testimonial-wrap-2">
                    @foreach ($feedbacks as $feedback)
                        <div class="testimonial-block style-2 gray-bg">
                            <i class="icofont-quote-right"></i>

                            <div class="testimonial-thumb">
                                <img src="{{ asset('assets/images/client_feedback/'.$feedback->client_image) }}" alt="{{ $feedback->client_name ?? 'default alt' }}" class="img-fluid">
                            </div>

                            <div class="client-info ">
                                <h4>{{ $feedback->client_name }}</h4>
                                <span>{{ $feedback->client_designation }}</span>
                                <p>
                                    {!! $feedback->client_feedback !!}
                                </p>
                            </div>
                        </div>
                    @endforeach


				</div>
			</div>
		</div>
	</section>
	<section class="section clients">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="text-center section-title">
						<h2>Our Trusted Partners</h2>
						<div class="mx-auto my-4 divider"></div>
						<p>We are proud to collaborate with industry leaders and organizations that share our vision of innovation and excellence. Their support helps us achieve our goals and make a positive impact in the communities we serve.</p>

					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row clients-logo">
				@foreach ($partners as $partner)
					<div class="col-lg-2">
						<div class="client-thumb">
							<img src="{{asset('assets/images/partners')}}/{{$partner->image}}" alt="{{$partner->alt}}" class="img-fluid">
						</div>
					</div>
				@endforeach


			</div>
		</div>
	</section>
</div>
