@extends('layout')
 @section('content')




         <h1 class="page-title">Data table</h1>
         <div class="card">
             <div class="card-body">
                 <h2 class="card-title">Data table</h2>
                 <div class="row">
                     <div class="col-12">
                         <table id="order-listing" class="table table-striped" style="width:100%;">
                             <thead>
                             <tr>
                                 <th>Student Name #</th>
                                 <th>Student Roll</th>
                                 <th>Action</th>
                             </tr>
                             </thead>
                             <tbody>
                             @foreach($all_student_info as $v_student)
                             <tr>
                                 <td>{{$v_student->student_name}}</td>
                                 <td>{{$v_student->student_roll}}</td>


                                 <td>
                                    <a href="{{URL:: to('studentview'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                                     <a href="{{URL:: to('student_edit'.$v_student->student_id)}}"> <button class="btn btn-outline-warning">Edit</button></a>
                                     <a href="{{URL::to('student_delet'.$v_student->student_id)}}" id="Delete"> <button class="btn btn-outline-danger">Delet </button></a>
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