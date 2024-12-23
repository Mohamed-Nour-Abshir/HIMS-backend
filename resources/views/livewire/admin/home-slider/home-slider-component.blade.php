<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                <h3>Home slider</h3>
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
                        <div class="text-tiny">Slider</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="wg-table table-all-user">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Sub title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="pname">
                                        <div class="image">
                                            <img src="{{asset('assets/images/Sliders')}}/{{$slider?->image}}" alt="" class="image" width="300">
                                        </div>
                                    </td>
                                    <td>{{$slider?->title}}</td>
                                    <td>{{$slider?->sub_title}}</td>
                                    <td>{{$slider?->description}}</td>
                                    <td>
                                        <div class="list-icon-function">
                                            <a href="{{route('home-slider.edit', $slider?->id ?? "1")}}">
                                                <div class="item edit">
                                                    <i class="icon-edit"></i> Edit
                                                </div>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="divider"></div>
                    <div class="flex flex-wrap items-center justify-between gap10 wgp-pagination">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
