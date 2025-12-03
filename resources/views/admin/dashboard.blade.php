@extends('admin.layouts.main')
@section('main-section')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">



            <!-- Welcome Wrap -->
            <div class="welcome-wrap mb-4">
                <div class=" d-flex align-items-center justify-content-between flex-wrap">
                    <div class="mb-3">
                        <h2 class="mb-1 text-white">Welcome Back, {{ Auth::user()->name }}</h2>
                        <p class="text-light">New Companies Subscribed Today !!!</p>
                    </div>

                </div>
            </div>
            <!-- /Welcome Wrap -->




            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h2>All Jobs (25)</h2>

                    <div class="d-flex align-items-center flex-wrap row-gap-3">
                        <a href="" type="button" class="btn btn-light btn-outline-dark  text-bold"><i
                                class="fa fa-filter" aria-hidden="true"></i> &nbsp; All Fillter</a>&nbsp;
                        <a href="" type="button" class="btn btn-light btn-outline-dark  "><i class="fa fa-plus"
                                aria-hidden="true"></i> &nbsp;Active(1)</a>&nbsp;
                        <a href="" type="button" class="btn btn-light btn-outline-dark  "><i class="fa fa-plus"
                                aria-hidden="true"></i> &nbsp;Under Review(8)</a>&nbsp;
                        <a href="" type="button" class="btn btn-light  btn-outline-dark"><i class="fa fa-plus"
                                aria-hidden="true"></i> &nbsp;Expired(4)</a>&nbsp;



                        <a href="{{ route('job-post') }}" class="btn btn-primary" type="button">Post a New Job &nbsp;<i
                                class="fa fa-plus-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="accordion-body">
                        <div class="todo-widget">
                            <div class="todo-wrapper-list">
                                <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                                    <span class="avatar avatar-lg bg-light-100 border flex-shrink-0 me-2">
                                        <img src="data:image/png;base64,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"
                                            class="w-auto h-auto" alt="">
                                    </span>
                                    <div class="todo-wrapper-list-content">
                                        <h4>Office Assistant Cum Councellor</h4>
                                        <p> Rohini, New Delhi |
                                            Posted on : 18 Nov 2025 |
                                            S. P verma </p>
                                    </div>
                                </div>
                                <div class="notes-card-body d-flex align-items-center">
                                    <div class="todo-wrapper-list-content">
                                        <span class="badge bg-success">Success</span>
                                        <p>Posted on : 18 Nov 2025</p>

                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="todo-wrapper-list-content">
                                        <span class="badge bg-soft-dark">88989</span>
                                        <p>Database matched</p>
                                    </div>
                                </div>
                                {{-- <div class="notes-card-body d-flex align-items-center">
                            <div class="todo-wrapper-list-content">
                                <span class="badge bg-soft-dark">88989</span>
                                <p>Database matched</p>
                            </div>
                        </div> --}}


                                <div class="dropdown table-action">
                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                        <a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvas_edit"> <i class="ti ti-edit text-blue"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_estimations"><i
                                                class="ti ti-trash text-danger"></i>Delete</a>

                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="ti ti-checks text-green"></i>Active </a>

                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="ti ti-printer text-info"></i>
                                            Download Resume</a>
                                    </div>
                                </div>






                            </div>
                        </div>
                    </div>

                </div>
            </div>




        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
