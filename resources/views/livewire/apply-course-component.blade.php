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
                
                <form id="admission-form" class="appoinment-form" method="post" action="/submit-admission">
                    
                
                    <div class="row">
                        <!-- Course Selection -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="course" required>
                                    <option value="" disabled selected>Choose Course</option>
                                    <option value="basic-first-aid">Basic First Aid</option>
                                    <option value="diploma-nursing">Diploma in Nursing</option>
                                    <option value="pharmacy-technician">Pharmacy Technician</option>
                                    <option value="medical-laboratory">Medical Laboratory Technology</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Full Name -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="full_name" type="text" class="form-control" placeholder="Full Name" required>
                            </div>
                        </div>
                
                        <!-- Date of Birth -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="dob" type="date" class="form-control" placeholder="Date of Birth" required>
                            </div>
                        </div>
                
                        <!-- Email -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                
                        <!-- Phone -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" type="text" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>
                
                        <!-- Address -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="address" type="text" class="form-control" placeholder="Address" required>
                            </div>
                        </div>
                
                        <!-- Message (Optional) -->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="4" placeholder="Additional Information (Optional)"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="form-group">
                        <a class="btn btn-main btn-round-full" href="">Submit Application<i class="icofont-simple-right ml-2"></i></a>
                    </div>
                </form>
                
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</div>
