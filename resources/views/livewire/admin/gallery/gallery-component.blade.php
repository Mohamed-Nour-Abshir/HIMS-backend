<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                <h3>All Galleries</h3>
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
                        <div class="text-tiny">Galleries</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="wg-table table-all-user">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex flex-wrap items-center justify-between gap10">
                                <h3 class="card-title">Gallery</h3>
                                <a href="{{ route('gallery.create') }}" class="btn btn-primary btn-lg">
                                    <i class="icon-plus"></i>
                                    <span>Add New</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(session()->has('message'))
                                    <div class="mb-3 text-3xl text-green-600 text-success" style="font-size: 1.5rem">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Image Alt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $key=>$gallery)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td class="pname">
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/gallery')}}/{{$gallery?->image}}" alt="" class="image" width="300">
                                                    </div>
                                                </td>
                                                <td>{{$gallery?->image_alt}}</td>
                                                <td>
                                                    <div class="list-icon-function">
                                                        <a href="{{ route('gallery.edit', $gallery->id) }}">
                                                            <div class="item edit">
                                                                <i class="icon-edit"></i>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)" onclick="confirm('Are you sure to delete this feedback?') || event.stopImmediatePropagation()"  wire:click.prevent="deleteGallery({{$gallery->id}})">
                                                            <div class="item trash">
                                                                <i class="icon-trash"></i>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div class="flex flex-wrap items-center justify-between gap10 wgp-pagination">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
