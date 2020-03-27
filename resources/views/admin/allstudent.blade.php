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

                              <tr>
                                <td>{student_name</td>
                                <td>student_roll</td>

                                    <button class="btn btn-outline-primary">View</button>
                                    <button class="btn btn-outline-warning">Edit</button>
                                     <button class="btn btn-outline-danger">Delete</button>
                                  </td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



@endsection