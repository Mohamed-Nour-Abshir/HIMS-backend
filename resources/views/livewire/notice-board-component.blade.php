<div>
    	<!-- latest notice -->
	<section id="notice" class="py-5 pt-3">
		<div class="container">
			<div class="row">
				<div class="mb-3 col-md-12">
					<h1 class="mx-auto text-center title_design">Latest Notice</h1>
				</div>
			</div>
			<!-- notice carousel -->
			<div class="row notice-carousel">
                @foreach ($notices as $notice)
                    <div class="col-md-12">
                        <div class="card">
                            <img src="{{ asset('assets/images/notice/'.$notice->image) }}" alt="{{ $notice->slug }}" class="card-img-top" width="100%" height="200px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $notice->title }}</h5>
                                <p class="card-text">
                                    {!! Str::limit($notice->description, 50, '...') !!}
                                </p>
                                <a href="{{ route('notice.details', $notice->slug) }}" class="btn btn-outline-primary btn-sm">Read More <i class="ml-2 icofont-simple-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

			</div>
		</div>
	</section>
</div>
