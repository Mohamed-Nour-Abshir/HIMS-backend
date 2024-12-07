<div>
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="block text-center">
                <span class="text-white">Book your Seat</span>
                <h1 class="text-capitalize mb-5 text-lg">Admission</h1>
      
                <!-- <ul class="list-inline breadcumb-nav">
                  <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                  <li class="list-inline-item"><span class="text-white">/</span></li>
                  <li class="list-inline-item"><a href="#" class="text-white-50">Book your Seat</a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
    </section>
      
    <section class="appoinment section">
    <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <div class="mt-3">
                <div class="feature-icon mb-3">
                <i class="icofont-support text-lg"></i>
                </div>
                <span class="h3">Call for Help!</span>
                <h3 class="text-color mt-3">+880 1730-191922 </h3>
            </div>
        </div>
    
        <div class="col-lg-8">
                <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                <h2 class="mb-2 title-color">Apply for Admission</h2>
                <p class="mb-4">Start your journey with us today! Join our vibrant community of learners and take the first step toward achieving your educational goals. Explore our programs, apply now, and unlock your potential.</p>
                
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
    </div>
    </section>
</div>
