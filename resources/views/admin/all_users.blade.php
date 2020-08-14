@extends('admin.layouts')

@section('content')
<div class="row">
    <!--  page header -->
   <div class="col-lg-12">

       <h1 class="page-header">Users</h1>


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

                               <th>Name</th>
                               <th>Email</th>
                               {{-- <th>Mobile </th> --}}
                               <th>Role</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($users as $users)
                             <tr class="odd gradeX">

                               <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>
                                    @if ($users->is_admin==0)
                                    <a class="btn btn-danger" href="#">Employee
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>
                                        @else
                                        <a class="btn btn-success" href="#">Admin
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        @endif
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

