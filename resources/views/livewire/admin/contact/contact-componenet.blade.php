<div>
    <div>
        <div class="main-content-inner">
            <div class="main-content-wrap">
                <div class="flex flex-wrap items-center justify-between gap20 mb-27">
                    <h3>Contacts</h3>
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
                            <div class="text-tiny">Contacts</div>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>
                                                <a href="" wire:submit.prevent=''>
                                                    <div class="item edit">
                                                        <i class="icon-trash"></i>
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
