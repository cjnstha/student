@extends('layouts.master')
@section('contents')
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget widget-tabbed profile">
                        <!-- Nav tab -->
                        <ul class="nav nav-tabs nav-justified">
                            <li><a href="#" data-toggle="tab"><i class="fa fa-user"></i> Details</a></li>
                        </ul>
                        <!-- End nav tab -->

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Tab timeline -->
                            <div class="tab-pane animated active fadeInRight" id="my-timeline">
                                <div class="user-profile-content">
                                    <!-- Tab about -->
                                    <div class="tab-pane animated fadeInRight" id="about">
                                        <div class="user-profile-content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <address>
                                                        <strong>First Name</strong><br>
                                                        <h4>{{$students->firstname}} {{$students->middlename}} {{$students->lastname}}</h4>
                                                    </address>
                                                    <address>
                                                        <strong>Email</strong><br>
                                                        <a href="mailto:#">{{$students->email}}</a>
                                                    </address>
                                                    <address>
                                                        <strong>Grade</strong><br>
                                                        <p>{{$students->grade}}</p>
                                                    </address>
                                                </div>
                                                <div class="col-sm-6">
                                                    <strong>Age</strong><br>
                                                    <p>{{$students->age}}</p>
                                                    <strong>Created At</strong><br>
                                                    <p>{{$students->created_at->format('d-M-Y')}}</p>
                                                    <strong>Updated At</strong><br>
                                                    <p>{{$students->updated_at->format('d-M-Y')}}</p>
                                                </div>
                                            </div><!-- End div .row -->
                                        </div><!-- End div .user-profile-content -->
                                    </div><!-- End div .tab-pane -->
                                    <!-- End Tab about -->

                                </div><!-- End div .tab-content -->
                            </div><!-- End div .box-info -->
                        </div>
                    </div>


                </div>
                <!-- ============================================================== -->
                <!-- End content here -->
                <!-- ============================================================== -->

            </div>
@endsection
