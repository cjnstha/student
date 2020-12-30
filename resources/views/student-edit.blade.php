@extends('layouts.master')
@section('contents')
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="row">

                <div class="col-md-12 portlets">

                    <div class="widget">
                        <div class="widget-content padding">
                            <div id="basic-form">
                                <form role="form" method="post" action="{{route('student.update',$students->id)}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="First Name" name="firstname"
                                               value="{{$students->firstname}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Middle Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="Middle Name" name="middlename" value="{{$students->middlename}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="Last Name" name="lastname" value="{{$students->lastname}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Age</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1"
                                               placeholder="Age" name="age" value="{{$students->age}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Grade</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1"
                                               placeholder="Grade" name="grade" value="{{$students->grade}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Email" name="email" value="{{$students->email}}" required>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </div>

@endsection
