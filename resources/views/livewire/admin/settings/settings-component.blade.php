<div>
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Website Settings</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{route('dashboard')}}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="{{route('settings')}}">
                            <div class="text-tiny">Setings</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit settings</div>
                    </li>
                </ul>
            </div>
            
            <form class="tf-section-2 form-add-product" wire:submit.prevent='updateSettings'>
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Website name <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10" type="text" placeholder="Enter website name" wire:model="web_name">
                    </fieldset>

                    <div class="gap22 cols">
                        <fieldset class="name">
                            <div class="body-title mb-10">Website Mail <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Enter website email" wire:model="web_email">
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Website phone <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Enter website phone no" wire:model='web_phone'>
                        </fieldset>
                    </div>

                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Company Address <span
                                class="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" placeholder="Website Address" wire:model='address'></textarea>
                    </fieldset>

                    <fieldset class="name">
                        <div class="body-title mb-10">Working Days and Hours <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="working Days (Sat - Thu) Wroking Hours (9:00am - 10:00pm)" wire:model='working_hours_days'>
                    </fieldset>

                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Facebook Link <span
                                    class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Enter facebook Link" wire:model='facebook_link'>
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Twitter Link <span
                                    class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Enter twitter link" wire:model='twitter_link'>
                        </fieldset>
                    </div>


                    <div class="cols gap22">
                        <fieldset class="name">
                            <div class="body-title mb-10">Linkedin Link <span class="tf-color-1">*</span>
                            </div>
                            <input class="mb-10" type="text" placeholder="Enter Linkedin link" wire:model='linkedin_link'>
                        </fieldset>
                        
                    </div>


                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title">Upload Webste Logo <span class="tf-color-1">*</span>
                        </div>
                        <div class="upload-image flex-grow">
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
                                    <input type="file" id="myFile" wire:model='web_newLogo'>
                                    @if ($web_newLogo)
                                        <img src="{{$web_newLogo->temporaryUrl()}}" alt="" width="300">
                                    @else
                                        <img src="{{asset('assets/images/Settings')}}/{{$web_logo}}" alt="" width="300" class="mb-5">
                                    @endif
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="body-title mb-10">Upload Website favicon</div>
                        <div class="upload-image mb-16">
                            <div id="galUpload" class="item up-load">
                                <label class="uploadfile" for="gFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="text-tiny">Drop your images here or select <span
                                            class="tf-color">click to browse</span></span>
                                    <input type="file" id="gFile" wire:model='web_newFavicon'>
                                    @if ($web_newFavicon)
                                        <img src="{{$web_newFavicon->temporaryUrl()}}" alt="" width="300">
                                    @else
                                        <img src="{{asset('assets/images/Settings')}}/{{$web_favicon}}" alt="" width="300" class="mb-5">
                                    @endif
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="shortdescription">
                        <div class="body-title mb-10">Map Link <span
                                class="tf-color-1">*</span></div>
                        <textarea class="mb-10 ht-150" placeholder="Website Address" wire:model='map_link'></textarea>
                    </fieldset>

                    <div class="cols gap10">
                        <button class="tf-button w-full" type="submit">Update Settings</button>
                    </div>
                </div>
            </form>
            
        </div>
        
    </div>
</div>
