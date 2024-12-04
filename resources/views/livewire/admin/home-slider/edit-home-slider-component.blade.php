<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Home Slider infomation</h3>
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
                        <a href="{{route('home-slider')}}">
                            <div class="text-tiny">Home Slider</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit Slider</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-product form-style-1" wire:submit.prevent='Update'>
                    
                    <div class="body-title">Slider Title <span class="tf-color-1">*</span></div>
                    <input class="flex-grow fs-3" type="text" placeholder="Slider Title" wire:model='title'>
                
                    <div class="body-title">Slider Sub-title <span class="tf-color-1">*</span></div>
                    <input class="flex-grow fs-3" type="text" placeholder="Slider Sub-title" wire:model='sub_title'>

                    <div class="body-title">Slider Description <span class="tf-color-1">*</span></div>
                    <textarea class="flex-grow fs-3" type="text" placeholder="Slider Description" wire:model='description'></textarea>
                
                    <div class="body-title">Upload images <span class="tf-color-1">*</span>
                    </div>
                    <div class="upload-image flex-grow">
                        <div class="item" id="imgpreview" style="display:none">
                            <img src="upload-1.html" class="effect8" alt="">
                        </div>
                        <div id="upload-file" class="item up-load">
                            <label class="uploadfile" for="myFile">
                                <span class="icon">
                                    <i class="icon-upload-cloud"></i>
                                </span>
                                <span class="body-text">Drop your images here or select <span
                                        class="tf-color">click to browse</span></span>
                                <input type="file" id="myFile" wire:model='newImage'>
                                @if ($newImage)
                                    <img src="{{$newImage->temporaryUrl()}}" alt="" width="300">
                                @else
                                    <img src="{{asset('assets/images/Sliders')}}/{{$image}}" alt="" width="300" class="mb-5">
                                @endif
                            </label>
                        </div>
                    </div>
                    

                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
