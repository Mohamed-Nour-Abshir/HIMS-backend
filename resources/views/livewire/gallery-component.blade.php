<div>
    <!-- latest notice -->
<section id="notice" class="py-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="mb-3 col-md-12">
                <h1 class="mx-auto text-center title_design ">Our Gallery</h1>
            </div>
        </div>
        <!-- notice carousel -->
         <div class="row gallery">
            @foreach ($galleries as $gallery)
                <div class="col-md-12">
                    <div class=" gallery_card">
                        <div class="card_top">
                            <img src="{{ asset('assets/images/gallery/'.$gallery->image) }}" alt="{{ $gallery?->image_alt }}" class="card-img-top news_img">
                        </div>
                    </div>
                </div>
            @endforeach

         </div>
         <div class="mt-4 row gallery-menu">
            @foreach ($galleries as $gallery)
                <div class="col-md-12">
                    <div class=" gallery_card card_bottom">
                        <div class="card_nav">
                            <img src="{{ asset('assets/images/gallery/'.$gallery->image) }}" alt="{{ $gallery?->image_alt }}" class="card-img-top card_menu news_img">
                        </div>
                    </div>
                </div>
            @endforeach
         </div>
    </div>
</section>
</div>
