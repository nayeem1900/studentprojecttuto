@extends('layout')

@section('content')



            <div class="col-12 col-lg-6 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Add New Student Form</h2>
                        <form class="forms-sample" method="post"action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Name</label>
                                <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                                <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Student Roll</label>
                                <input type="text" class="form-control p-input" name="student_roll" placeholder="Student Roll">
                            </div>




                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>




@endsection