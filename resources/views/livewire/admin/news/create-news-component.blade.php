<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                <h3>Add New News</h3>
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
                            <div class="text-tiny">News</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Create News</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <!-- form-add-product -->
                <form class="tf-section-2 form-add-product" wire:submit.prevent='createNews'>

                <div class="wg-box">
                    <fieldset class="name">
                        <div class="mb-10 body-title">Title <span class="tf-color-1">*</span>
                        </div>
                        <input class="mb-10 @if('title') is-invalid @endif" type="text" placeholder="Title"
                            wire:model='title'>

                        @if('title')
                        <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </fieldset>

                    <fieldset class="name">
                        <div class="mb-10 body-title">Description <span class="tf-color-1">*</span>
                        </div>

                        <textarea class="mb-10 @if('description') is-invalid @endif" name="description" placeholder="Description"
                            wire:model='description'></textarea>

                        @if('description')
                        <div class="text-3xl invalid-feedback" style="font-size: 1.5rem">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                    </fieldset>



                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title">Upload images(<small>Image height should be 600px</small>) <span class="tf-color-1">*</span>
                        </div>
                        <div class="flex-grow upload-image">
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


                         @if(session()->has('success'))
                            <div class="text-3xl text-success" style="font-size: 1.5rem">
                                {{ session()->get('success') }}
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
