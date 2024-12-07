<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                <h3>Mission & Vision</h3>
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
                            <div class="text-tiny">mission & vision</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">mission-vision</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <!-- form-add-product -->
                <form class="tf-section-2 form-add-product" wire:submit.prevent='mission_vision_update'>

                <div class="wg-box">
                    <fieldset>
                        <div class="mb-10 body-title">Upload Image</div>
                        <div class="mb-16 upload-image">
                            <div id="galUpload" class="item up-load">
                                <label class="uploadfile" for="gFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="text-tiny">Drop your images here or select <span
                                            class="tf-color">click to browse</span></span>
                                    <input type="file" id="gFile" wire:model='chairman_image'>
                                    @if ($chairman_image)
                                        <img src="{{$chairman_image->temporaryUrl()}}" alt="" width="300">
                                    @else
                                        <img src="{{asset('assets/images/mission_vision/'.$chairman_old_image)}}" alt="" width="300" class="mb-5">
                                    @endif
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="description">
                        <div class="mb-10 body-title">Chairman's Message <span class="tf-color-1">*</span>
                        </div>
                        <textarea class="mb-10 @error('chairman_message') is-invalid @enderror')"  placeholder="Chairman Message" wire:model='chairman_message'></textarea>
                        @error('chairman_message')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('chairman_message') }}
                            </div>
                        @enderror
                    </fieldset>
                </div>




                <div class="wg-box">
                    <fieldset>
                        <div class="body-title">Upload images <span class="tf-color-1">*</span>
                        </div>
                        <div class="flex-grow upload-image">
                            <div id="upload-file" class="item up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Drop your images here or select <span
                                            class="tf-color">click to browse</span></span>
                                    <input type="file" class="@error('md_image') is-invalid @enderror" id="myFile" wire:model="md_image" accept="image/*">
                                    @if ($md_image)
                                        <img src="{{$md_image->temporaryUrl()}}" alt="" width="300">
                                    @else
                                        <img src="{{asset('assets/images/mission_vision/'.$md_old_image)}}" alt="" width="300">
                                    @endif
                                </label>
                            </div>
                        </div>
                        @error('md_image')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('md_image') }}
                            </div>
                        @enderror
                    </fieldset>

                    <fieldset class="description">
                        <div class="mb-10 body-title">Managing Director's Message <span class="tf-color-1">*</span>
                        </div>
                        <textarea class="mb-10 @error('md_message') is-invalid @enderror')"  placeholder="Managing Director Message"
                            wire:model='md_message'></textarea>
                        @error('md_message')
                            <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                                {{ $errors->first('md_message') }}
                            </div>
                        @enderror
                    </fieldset>

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

                        <button class="w-large tf-button" type="submit">Save</button>
                    </div>
                </div>
            </form>
            <!-- /form-add-product -->
            </div>
        </div>
    </div>
</div>
