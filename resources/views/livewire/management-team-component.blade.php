<div>
    <!-- team -->
	<section class="py-5 pt-3 section doctors">
		<div class="container">
			<div class="row justify-content-center">
					<div class="text-center col-lg-6">
						<div class="section-title">
							<h2 class="">Our Faculty Members</h2>
							<div class="mx-auto my-4 divider"></div>
							<p>Here are some notable faculty members </p>
						</div>
					</div>
			</div>

			<div class="row portfolio-gallery">
				@foreach ($faculties as $faculty)
                    <div class="mb-4 col-lg-3 col-sm-6 col-md-6 shuffle-item" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                            <div class="doctor-img">
                                    <img src="{{ asset('assets/images/faculty/'.$faculty->image) }}" alt="{{ $faculty->slug }}" class="img-fluid w-100">
                            </div>
                            </div>
                            <div class="mt-3 content">
                                <h4 class="mb-0"><a href="doctor-single.html">{{ $faculty?->name }}</a></h4>
                                <p>{{ $faculty?->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>

	<!-- cta -->
	<section class="section cta-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="cta-content">
						<div class="mb-4 divider"></div>
						<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have any course</span></h2>
						<a href="{{route('apply')}}" class="btn btn-main-2 btn-round-full">Apply Now<i class="ml-2 icofont-simple-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
