<div>
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <span class="text-white">News details</span>
                <h1 class="mb-5 text-lg text-capitalize">Blog Single</h1>

                <!-- <ul class="list-inline breadcumb-nav">
                  <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                  <li class="list-inline-item"><span class="text-white">/</span></li>
                  <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section blog-wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="row">
             <div class="mb-5 col-lg-12">
              <div class="single-blog-item">
                  <img src="{{ asset('images/blog/blog-1.jpg') }}" alt="" class="img-fluid">

                  <div class="mt-5 blog-item-content">
                      {{-- <div class="mb-3 blog-item-meta">
                          <span class="mr-3 text-color-2 text-capitalize"><i class="mr-2 icofont-book-mark"></i> Equipment</span>
                          <span class="mr-3 text-muted text-capitalize"><i class="mr-2 icofont-comment"></i>5 Comments</span>
                          <span class="mr-3 text-black text-capitalize"><i class="mr-2 icofont-calendar"></i> 28th January 2019</span>
                      </div> --}}
                      <div class="mb-4" style="width: 100%;">
                          <img src="{{ asset('assets/images/news/'.$news->image) }}" alt="{{ $news->slug }}" class="img-fluid">
                      </div>

                      <h2 class="mb-4 text-md"><a href="blog-single.html">{{ $news->title }}</a></h2>

                      <p class="mb-4 lead">
                          {!! $news?->description !!}
                      </p>


                      <div class="clearfix mt-5">


                          {{-- <ul class="float-right list-inline">
                              <li class="list-inline-item"> Share: </li>
                              <li class="list-inline-item"><a href="#!"><i class="icofont-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="#!"><i class="icofont-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#!"><i class="icofont-pinterest"></i></a></li>
                              <li class="list-inline-item"><a href="#!"><i class="icofont-linkedin"></i></a></li>
                          </ul> --}}
                      </div>
                  </div>
              </div>
          </div>

      </div>
        </div>

          </div>
        </div>
      </section>
</div>
