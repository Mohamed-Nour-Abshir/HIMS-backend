<div>
    <div class="main-content-inner">

        <div class="main-content-wrap">
            <div class="tf-section-1 mb-30">
                <div class="flex gap20 flex-wrap-mobile">
                    <div class="w-full">

                        <div class="wg-chart-default mb-20 bg-primary">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag" style="color: #fff !important;"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2 text-light">Total Applications</div>
                                        <h4 class="text-light">{{$admissions->count()}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20 bg-success">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag" style="color: #fff !important;"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2 text-light">Total Courses</div>
                                        <h4 class="text-light">{{$courses->count()}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20 bg-secondary">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag" style="color: #fff !important;"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2 text-light">Team</div>
                                        <h4 class="text-light">{{$team->count()}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="w-full">

                        <div class="wg-chart-default mb-20 bg-warning">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag" style="color: #fff !important;"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2 text-light">Notice</div>
                                        <h4 class="text-light">{{$notices->count()}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20 bg-info">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag" style="color: #fff !important;"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2 text-light">News</div>
                                        <h4 class="text-light">{{$news->count()}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wg-chart-default mb-20 bg-danger">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap14">
                                    <div class="image ic-bg">
                                        <i class="icon-shopping-bag" style="color: #fff !important;"></i>
                                    </div>
                                    <div>
                                        <div class="body-text mb-2 text-light">Contacts</div>
                                        <h4 class="text-light">{{$contacts->count()}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="tf-section mb-30">

                <div class="wg-box">
                    <div class="flex items-center justify-between">
                        <h5>Recent applications</h5>
                        <div class="dropdown default">
                            <a class="btn btn-secondary dropdown-toggle" href="{{route('admin.admissions')}}">
                                <span class="view-all">View all</span>
                            </a>
                        </div>
                    </div>
                    <div class="wg-table table-all-user">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 80px">SLNo. </th>
                                        <th class="text-center">Full Name</th>
                                        <th class="text-center">Phone</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Date of birth</th>
                                        <th class="text-center">Address</th>

                                        <th class="text-center">Course name</th>
                                        <th class="text-center">Additional info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($latest_admissions as $latest_admission)
                                        <tr>
                                            <td class="text-center">{{++$i}}</td>
                                            <td class="text-center">{{$latest_admission->full_name}}</td>
                                            <td class="text-center">{{$latest_admission->phone}}</td>
                                            <td class="text-center">{{$latest_admission->email}}</td>
                                            <td class="text-center">{{$latest_admission->dob}}</td>
                                            <td class="text-center">{{$latest_admission->address}}</td>
                                            <td class="text-center">{{$latest_admission->course_name}}</td>

                                            <td class="text-center">{{$latest_admission->additional_info}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
