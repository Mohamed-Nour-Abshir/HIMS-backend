<div>
    <!-- mission and vission  -->
	<section class="py-5 pt-3 section appoinment">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-10">
					<h3>Chairman Message</h3>
					<p>
                        {!! $mission_vision->chairman_message !!}
                    </p>
				</div>
				<div class="col-lg-6 ">
					<div class="appoinment-content">
						<img src="{{ asset('assets/images/mission_vision/'.$mission_vision->chairman_image) }}" alt="chairman message related image" class="img-fluid mission-image">
					</div>
				</div>
			</div>

			<div class="mt-5 row align-items-center" style="margin-top: 40px !important;">
				<div class="col-lg-6 col-md-10">
					<h3>Managing Director Message</h3>
					<p>
                        {!! $mission_vision->md_message !!}
                    </p>
				</div>
				<div class="col-lg-6 col-md-10">
					<div class="appoinment-content">
						<img src="{{ asset('assets/images/mission_vision/'.$mission_vision->md_image) }}" alt="managing director message related image" class="img-fluid mission-image">
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
