<div>
    <div>
        <div class="main-content-inner">
            <div class="main-content-wrap">
                <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                    <h3>Admissions</h3>
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
                            <div class="text-tiny">Admissions</div>
                        </li>
                    </ul>
                </div>

                <div class="wg-box">
                    <div class="wg-table table-all-user">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>BMDC Reg NO</th>
                                        <th>Phone No</th>
                                        <th>Address</th>
                                        <th>Date of birth</th>
                                        <th>Course Name</th>
                                        <th>Addtional info</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($admissions as $admission)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$admission->full_name}}</td>
                                            <td class="overflow-scroll">{{$admission->email}}</td>
                                            <td>{{$admission->bmdc_reg_no}}</td>
                                            <td>{{$admission->phone}}</td>
                                            <td>{{$admission->address}}</td>
                                            <td>{{$admission->dob}}</td>
                                            <td>{{$admission->course_name}}</td>
                                            <td>{{$admission->additional_info}}</td>
                                            <td>
                                                <a href="#" onclick="confirm('Are you sure to Delete this admission?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAdmission({{$admission->id}})">
                                                    <div class="item edit">
                                                        <i class="icon-trash text-danger fw-bolder"></i>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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

</div>
