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
                               <th>Name</th>
                               <th>Employee ID</th>
                               <th>Email</th>
                               <th>Mobile </th>
                               <th>Join Date</th>
                               <th>Role</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr class="odd gradeX">
                               <td>Trident</td>
                               <td>Internet Explorer 4.0</td>
                               <td>Win 95+</td>
                               <td class="center">4</td>
                               <td class="center">X</td>
                               <td class="center">X</td>
                               <td class="center">X</td>
                           </tr>
                           <tr class="even gradeC">
                               <td>Trident</td>
                               <td>Internet Explorer 5.0</td>
                               <td>Win 95+</td>
                               <td class="center">5</td>
                               <td class="center">C</td>
                               <td class="center">X</td>
                               <td class="center">X</td>
                           </tr>
                           <tr class="odd gradeA">
                               <td>Trident</td>
                               <td>Internet Explorer 5.5</td>
                               <td>Win 95+</td>
                               <td class="center">5.5</td>
                               <td class="center">A</td>
                               <td class="center">X</td>
                               <td class="center">X</td>
                           </tr>

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

