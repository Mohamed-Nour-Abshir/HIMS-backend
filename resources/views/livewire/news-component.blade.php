<div>
    <!-- latest notice -->
<section id="notice" class="py-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-12">
                <h1 class="mx-auto text-center title_design">Latest News</h1>
            </div>
        </div>
        <!-- notice carousel -->
         <div class="row notice-carousel">
            @foreach ($newses as $news)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card_top">
                            <img src="{{ asset('assets/images/news/'.$news->image) }}" alt="{{ $news?->slug }}" class="card-img-top news_img" width="200px" height="200px">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"> {{ $news?->title }}</h6>
                            <p class="card-text">
                                {!! Str::limit($news?->description, 50, '...') !!}
                            </p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Read More <i class="ml-2 icofont-simple-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach


         </div>
    </div>
</section>
</div>
