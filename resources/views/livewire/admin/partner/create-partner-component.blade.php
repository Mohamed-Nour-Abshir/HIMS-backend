<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Add Partner</h3>
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
                        <a href="{{route('partners')}}">
                            <div class="text-tiny">Partners</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">create Partner</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form class="form-new-product form-style-1" wire:submit.prevent='createPartner'>
                    
                    <div class="body-title">Image Alt <span class="tf-color-1">*</span></div>
                    <input class="flex-grow fs-3" type="text" placeholder="Image Alt" wire:model='image_alt'>
                    @error('image_alt') <span class="text-danger fw-bolder">{{$message}}</span>@enderror
                    <div class="body-title">Upload image <span class="tf-color-1">*</span>
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
                                <input type="file" id="myFile" wire:model='image'>
                               
                                @if($image)
                                    <img src="{{$image->temporaryUrl()}}" alt="" width="300">
                                @endif
                            </label>
                        </div>
                        @error('image') <span class="text-danger">{{$message}}</span>@enderror 
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
