<div>
    <!-- latest notice -->
<section id="notice" class="py-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-12">
                <h1 class="mx-auto text-center title_design teachers">Respected Teachers</h1>
            </div>
        </div>
        <!-- notice carousel -->
         <div class="row notice-carousel">
            @foreach ($teachers as $teacher)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card_top">
                            <img src="{{ asset('assets/images/faculty/'.$teacher->image) }}" alt="{{ $teacher->slug }}" class="card-img-top news_img">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $teacher?->name }}</h5>
                            <p class="card-text">{{ $teacher?->designation }}</p>
                            {{-- <a href="#" class="btn btn-outline-primary btn-sm">Read More <i class="ml-2 icofont-simple-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
         </div>
    </div>
</section>
</div>
