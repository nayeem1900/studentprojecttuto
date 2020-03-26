@extends('layout')

@section('content')


        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Data table</h2>
                <div class="row">
                    <div class="col-12">
                        <table id="order-listing" class="table table-striped" style="width:100%;">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Student Roll</th>

                            </tr>
                            </thead>
                            <tbody>
                          @foreach($all_student_info as $v_student)
                              <tr>
                                <td>{{$v_student->student_name}}</td>
                                <td>{{$v_student->student_roll}}</td>

                                <td>
                                    <button class="btn btn-outline-primary">View</button>
                                    <button class="btn btn-outline-warning">Edit</button>
                                    <button class="btn btn-outline-danger">Delete</button>

                                </td>
                            </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



@endsection