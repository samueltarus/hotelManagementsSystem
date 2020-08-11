@extends('admin.layouts')

@section('content')
<div class="row">
    <!--  page header -->
   <div class="col-lg-12">

       <h1 class="page-header">Employees</h1>


   </div>

    <!-- end  page header -->
</div>
<div class="row">
   <div class="col-lg-12">
       <!-- Advanced Tables -->
       <div class="panel panel-default">
           <div class="panel-heading">
                Employees List
           </div>
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                           <tr>
                                <th>Client </th>
                               <th>Name</th>
                               <th>Employee ID</th>
                               <th>Email</th>
                               <th>Mobile </th>

                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($employee as $employee)
                             <tr class="odd gradeX">

                               <td>{{$employee->client_id}}</td>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->employee_id}}</td>
                                <td>{{$employee->email}}</td>
                                <td class="center">{{$employee->phone_number}}</td>
                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">

                                    <a href="" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
                                    </div>
                                  </td>
                                {{-- <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-employee.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                 </td> --}}

                           </tr>
                           @endforeach
                           <tr class="even gradeC">


                       </tbody>
                   </table>
               </div>

           </div>
       </div>
       <!--End Advanced Tables -->
   </div>
</div>
</div>



@endsection

