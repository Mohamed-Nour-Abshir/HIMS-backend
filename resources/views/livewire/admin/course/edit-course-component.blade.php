<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                <h3>Edit New Course</h3>
                <ul class="flex flex-wrap items-center justify-start breadcrumbs gap10">
                    <li>
                        <a href="{{route('dashboard')}}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{route('home-slider')}}">
                            <div class="text-tiny">Course</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Create Course</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <!-- form-add-product -->
                <form class="tf-section-2 form-add-product" wire:submit.prevent='updateCourse({{ $course_id }})'>

                <div class="wg-box">
                    <fieldset class="name">
                        <div class="mb-10 body-title">Course name <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10 @if('course_name') is-invalid @endif" type="text" placeholder="Enter Course name"
                            wire:model='course_name'>

                        @if('course_name')
                        <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                            {{ $errors->first('course_name') }}
                        </div>
                        @endif
                    </fieldset>

                    <fieldset class="name">
                        <div class="mb-10 body-title">Department <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10 @if('department') is-invalid @endif" type="text" placeholder="Enter Department"
                            wire:model='department'>

                        @if('department')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('department') }}
                            </div>
                        @endif
                    </fieldset>

                    <fieldset class="name">
                        <div class="mb-10 body-title">Course Duration <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10 @if('duration') is-invalid @endif" type="text" placeholder="Enter Course Duration"
                            wire:model='duration'>

                        @if('duration')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('duration') }}
                            </div>
                        @endif
                    </fieldset>

                    <fieldset class="name">
                        <div class="mb-10 body-title">Lectures <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10 @if('lectures') is-invalid @endif" type="text" placeholder="Enter Lectures"
                            wire:model='lectures'>

                        @if('lectures')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('lectures') }}
                            </div>
                        @endif
                    </fieldset>

                    <fieldset class="name">
                        <div class="mb-10 body-title">Hours <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10 @if('hours') is-invalid @endif" type="text" placeholder="Enter Hours"
                            wire:model='hours'>

                        @if('hours')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('hours') }}
                            </div>
                        @endif
                    </fieldset>

                    <fieldset class="description">
                        <div class="mb-10 body-title">Course Module <span class="tf-color-1">*</span>
                        </div>
                        <textarea class="mb-10 @if('course_modules') is-invalid @endif"  placeholder="Course Module"
                            wire:model='course_modules'></textarea>

                        @if('course_module')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('course_modules') }}
                            </div>
                        @endif
                    </fieldset>

                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title">Upload images <span class="tf-color-1">*</span>
                        </div>
                        <div class="flex-grow upload-image">
                            {{-- <div class="item" id="imgpreview" style="display:none">
                                <img src="../../../localhost_8000/images/upload/upload-1.png"
                                    class="effect8" alt="">
                            </div> --}}
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Drop your images here or select <span
                                            class="tf-color">click to browse</span></span>
                                    <input type="file" class="@if('image') is-invalid @endif" id="myFile" wire:model="image" accept="image/*">
                                    @if ($image)
                                        <img src="{{$image->temporaryUrl()}}" alt="" width="300">
                                    @else
                                    <img src="{{asset('assets/images/courses/'.$oldimage)}}" alt="" width="300">
                                    @endif
                                </label>
                            </div>
                        </div>
                        @if('image')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('image') }}
                            </div>
                        @endif
                    </fieldset>

                    <fieldset class="description">
                        <div class="mb-10 body-title">Description <span class="tf-color-1">*</span>
                        </div>
                        <textarea class="mb-10 @if('description') is-invalid @endif')" name="description" placeholder="Description"
                            wire:model='description'></textarea>
                        @if('description')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </fieldset>


                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="mb-10 body-title">Regular Price <span
                                    class="tf-color-1">*</span></div>
                            <input class="mb-10 @if('regular_price') is-invalid @endif" type="text" placeholder="Enter regular price"
                                wire:model='regular_price'>
                            @if('regular_price')
                                <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                    {{ $errors->first('regular_price') }}
                                </div>
                            @endif
                        </fieldset>

                        <fieldset class="name">
                            <div class="mb-10 body-title">Discount Price <span
                                    class="tf-color-1">*</span></div>
                            <input class="mb-10 @if('discount_price') is-invalid @endif" type="text" placeholder="Enter discount price"
                                wire:model='discount_price'>
                            @if('discount_price')
                                <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                    {{ $errors->first('discount_price')}}
                                </div>
                            @endif
                        </fieldset>
                    </div>



                    <div class="">

                        <fieldset class="name">
                            <div class="mb-10 body-title">Course Status</div>
                            <div class="mb-10 select">
                                <select class="@if('status') is-invalid @endif')" wire:model="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        @if('status')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('status') }}
                            </div>
                        @endif
                        </fieldset>
                    </div>
                         @if(session()->has('message'))
                            <div class="text-3xl text-success" style="font-size: 1.5rem">
                                {{ session()->get('message') }}
                            </div>
                            @elseif(session()->has('error'))
                            <div class="text-3xl text-danger" style="font-size: 1.5rem">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    <div class="cols gap10">

                        <button class="w-full tf-button" type="submit">Save</button>
                    </div>
                </div>
            </form>
            <!-- /form-add-product -->
            </div>
        </div>
    </div>
</div>
