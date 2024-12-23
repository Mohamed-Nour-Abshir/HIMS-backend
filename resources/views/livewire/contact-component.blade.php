<div>
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                <span class="text-white">Contact Us</span>
                <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>
    
                <!-- <ul class="list-inline breadcumb-nav">
                    <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="list-inline-item"><span class="text-white">/</span></li>
                    <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
                </ul> -->
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- contact form start -->
    
    <section class="section contact-info pb-0">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                <i class="icofont-live-support"></i>
                <h5>Call Us</h5>
                +88 {{$settings->web_phone}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                <i class="icofont-support-faq"></i>
                <h5>Email Us</h5>
                {{$settings->web_email}}
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-block mb-4 mb-lg-0">
                <i class="icofont-location-pin"></i>
                <h5>Location</h5>
                {{$settings->address}}
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact Us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Have questions or need assistance? We're here to help! Reach out to us, and our team will get back to you promptly with the support you need.</p>
                    
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="contact__form " wire:submit.prevent='Contact'>
                <!-- form message -->
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
                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Full Name" wire:model='name'>
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </div>

                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email Address" wire:model='email'>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Query Topic" wire:model='subject'>
                        @error('subject') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone Number" wire:model='phone'>
                        @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    </div>
                </div>

                <div class="form-group-2 mb-4">
                    <textarea class="form-control" rows="8" placeholder="Your Message" wire:model='message'></textarea>
                    @error('message') <span class="text-danger">{{$message}}</span> @enderror
                </div>

                <div>
                    <input class="btn btn-main btn-round-full" type="submit" value="Send Messege"></input>
                </div>
                </form>
            </div>
            </div>
        </div>
    </section>
    
    
    <div class="google-map">
        <iframe src="{{$settings->map_link}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
