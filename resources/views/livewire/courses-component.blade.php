<div>
    <!-- courses -->
    <section class="py-5 pt-3 section doctors">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-6">
                    <div class="section-title">
                        <h2 class="">Courses</h2>
                        <div class="mx-auto my-4 divider"></div>
                        <p>Our curriculum is designed to meet international standards, and all courses are taught and assessed in Bangla & English, unless otherwise specified.</p>
                    </div>
                </div>
            </div>

            <div class="mb-5 text-center col-12">
                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                    <label class="btn active">
                        <input type="radio" name="shuffle-filter" value="courses" checked="checked"/>All Our Courses
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="faculty" />Our Faculty
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="scholarship" />Scholarships
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="fees" />Tuition Fees
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="apply" />Apply Now
                    </label>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">
            <!-- courses list -->
                <!-- course 1 -->
            @foreach ($courses as $course)
                <div id="courses" class="mb-4 col-lg-4 col-sm-6 col-md-6 shuffle-item" data-groups="[&quot;courses&quot;]">
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <a href="course-details.html">
                                    <img src="{{ asset('assets/images/courses/'.$course->image) }}" alt="doctor-image" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                        <div class="p-3 mt-3 text-center text-white content bg-info">
                            <h4 class="mb-0"><a href="course-details.html" class="text-white">{{ $course->course_name }}</a></h4>
                            <p class="mb-0">{{ $course->department }}</p>
                            <small><a href="course-details.html" class="text-white">more details | Enroll now</a></small>
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- faculty list -->
                <div id="faculty-list" class="mb-4 col-lg-4 col-sm-6 col-md-6 shuffle-item" data-groups="[&quot;faculty&quot;]">
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                        <div class="doctor-img">
                                <img src="images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
                        </div>
                        </div>
                        <div class="mt-3 content">
                            <h4 class="mb-0"><a href="doctor-single.html">Thomas Henry</a></h4>
                            <p>Cardiology</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4 col-lg-4 col-sm-6 col-md-6 shuffle-item" data-groups="[&quot;faculty&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                <img src="images/team/2.jpg" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="mt-3 content">
                                <h4 class="mb-0"><a href="doctor-single.html">Harrision Samuel</a></h4>
                                <p>Radiology</p>
                            </div>
                        </div>
                </div>

                <div class="mb-4 col-lg-4 col-sm-6 col-md-6 shuffle-item" data-groups="[&quot;faculty&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                <img src="images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="mt-3 content">
                                <h4 class="mb-0"><a href="doctor-single.html">Alexandar James</a></h4>
                                <p>Dental</p>
                            </div>
                        </div>
                </div>

            <!-- scholarship information  -->
                <div id="scholarships" class="mb-4 col-lg-12 col-sm-12 col-md-12 shuffle-item" data-groups="[&quot;scholarship&quot;]">
                    <table class="table table-bordered">
                        <tr>
                            <th>Course name</th>
                            <th>Duration</th>
                            <th>Tuition Fess</th>
                            <th>Scholarship</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                    </table>
                </div>

            <!-- Tuition fees  -->
                <div id="tuition-fees" class="mb-4 col-lg-12 col-sm-12 col-md-12 shuffle-item" data-groups="[&quot;fees&quot;]">
                    <p class="text-center">Tuition Fees for Bangladeshi Students
                        * All kinds of amount given in Tk (BDT) *</p>
                    <table class="table table-bordered">
                        <tr>
                            <th>Course name</th>
                            <th>Duration</th>
                            <th>Tuition Fess</th>
                            <th>Scholarship</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                        <tr>
                            <td>Diploma in Medical Ultrasound Programme</td>
                            <td>4 semesters</td>
                            <td>1,10,000</td>
                            <td>20,000</td>
                            <td>90,000</td>
                        </tr>
                    </table>
                </div>

            <!-- Apply Now  -->
                <div id="apply-now" class="mb-4 col-lg-12 col-sm-12 col-md-12 shuffle-item" data-groups="[&quot;apply&quot;]">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h2 class="text-center">Student Application Form</h2>
                            <p class="text-center">Give valid information After filling-up the form our team will contact you for confirmation</p>
                            <form id="admission-form" class="appoinment-form" method="post" action="">
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
                                    <a class="mx-auto btn btn-main btn-round-full d-block" href="">Submit Application<i class="ml-2 icofont-simple-right"></i></a>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- /courses -->

    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="mb-4 divider"></div>
                        <h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to join us</span></h2>
                        <a href="{{route('apply')}}" class="btn btn-main-2 btn-round-full">Apply Now<i class="ml-2 icofont-simple-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
