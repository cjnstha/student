@extends('layouts.master')
@section('contents')
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Your awesome content goes here -->
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header">
                            <h2><strong>Student</strong> List</h2>
                            @if(Session::has('flash_message_error'))
                                <div class="alert alert-error alert-block"
                                     style="background-color:#f2dfd0;">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{!!session('flash_message_error')!!}</strong>
                                </div>
                            @endif
                            <div class="additional-btn">
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-md">Add Students</a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <br>
                            <div class="table-responsive">
                                <div class="buttons-csv">

                                    <table id="datatables-1" class="table table-striped table-bordered"
                                           cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Grade</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($students as $key=>$student)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$student->firstname}}</td>
                                                <td>{{$student->middlename}}</td>
                                                <td>{{$student->lastname}}</td>
                                                <td>{{$student->grade}}</td>
                                                <td>{{$student->email}}</td>
                                                <td>{{$student->created_at->format('d-M-Y')}}</td>
                                                <td>{{$student->updated_at->format('d-M-Y')}}</td>
                                                <td>
                                                    <a href="{{route('student.detail', $student->id)}}"
                                                       class="btn btn-primary">Detail</a>
                                                    <a href="{{route('student.edit', $student->id)}}"
                                                       class="btn btn-bitbucket">Edit</a>
                                                    <a href="{{route('student.delete', $student->id)}}"
                                                       class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="mySmallModalLabel">Add Students</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 portlets">

                                <div class="widget">
                                    <div class="widget-content padding">
                                        <div id="basic-form">
                                            <form id="#registerForm" role="form" method="post"
                                                  action="{{url('/api/add-students')}}">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">First Name</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                           placeholder="First Name" name="firstname" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Middle Name</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                                           placeholder="Middle Name" name="middlename" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Last Name</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                                           placeholder="Last Name" name="lastname" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Age</label>
                                                    <input type="number" class="form-control" id="exampleInputPassword1"
                                                           placeholder="Age" name="age" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Grade</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                                           placeholder="Grade" name="grade" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control " id="email"
                                                           placeholder="Email" name="email" required>
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- Small modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

@endsection
