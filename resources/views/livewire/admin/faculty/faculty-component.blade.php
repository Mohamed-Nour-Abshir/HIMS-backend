<div>
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                <h3>All Faculties</h3>
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
                        <div class="text-tiny">Faculties</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="wg-table table-all-user">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex flex-wrap items-center justify-between gap10">
                                <h3 class="card-title">Faculty</h3>
                                <a href="{{ route('faculty.create') }}" class="btn btn-primary btn-lg">
                                    <i class="icon-plus"></i>
                                    <span>Add New</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(session()->has('message'))
                                    <div class="mb-3 text-3xl text-success" style="font-size: 1.5rem">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faculties as $key=>$faculty)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td class="pname">
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/faculty')}}/{{$faculty?->image}}" alt="" class="image" width="100">
                                                    </div>
                                                </td>
                                                <td>{{$faculty?->name}}</td>
                                                <td>{{$faculty?->designation}}</td>
                                                <td>
                                                    <div class="list-icon-function">
                                                        <a href="{{ route('faculty.edit', $faculty->id) }}">
                                                            <div class="item edit">
                                                                <i class="icon-edit"></i>
                                                            </div>
                                                        </a>
                                                        <a href="javascript:void(0)" wire:click.prevent="deleteFaculty({{$faculty->id}})">
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
