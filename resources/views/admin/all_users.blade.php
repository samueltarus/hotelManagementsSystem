@extends('admin.layouts')

@section('content')
<div class="row">
    <!--  page header -->
   <div class="col-lg-12">

       <h1 class="page-header">System Users And Roles</h1>


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
                               {{-- <th> User Roles</th> --}}
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($users as $users)
                             <tr class="odd gradeX">

                               <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                             {{-- <td>{{$users->role_id}}</td> --}}
                             {{-- <td>{{$role->name}}</td> --}}
                                <td>
                                    @if ($users->role_id==0)
                                    <a class="btn btn-danger" href="{{URL::to('/unactive-employee/'.$users->id)}}"> Deactive
                                            <i class="fas fa-thumbs-down"></i>
                                        </a>

                                        @else
                                        <a class="btn btn-success" href="{{URL::to('/active-admin/'.$users->id)}}"> Active
                                            <i class="fas fa-thumbs-up"></i>
                                        </a>
                                        @endif
                                </td>


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

