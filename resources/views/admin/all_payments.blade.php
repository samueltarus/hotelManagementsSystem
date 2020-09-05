@extends('admin.layouts')

@section('content')
<div class="row">
    <!--  page header -->
   <div class="col-lg-12">
       <h1 class="page-header">Customer Payments</h1>
   </div>
    <!-- end  page header -->
</div>
<div class="row">
   <div class="col-lg-12">
       <!-- Advanced Tables -->
       <div class="panel panel-default">
           <div class="panel-heading">
                Payments
           </div>
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                           <tr>
                               <th>Customer Name</th>
                               <th>Customer Phone number</th>
                               <th>Transaction Code</th>
                               <th>Total Amount Payed</th>

                           </tr>
                       </thead>
                       <tbody>
                           <tr class="odd gradeX">
                               <td>Trident</td>
                               <td>Internet Explorer 4.0</td>
                               <td>Win 95+</td>
                               <td class="center">4</td>
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

