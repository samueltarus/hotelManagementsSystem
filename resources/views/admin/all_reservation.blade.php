@extends('admin.layouts')

@section('content')
<div class="row">
    <!--  page header -->
   <div class="col-lg-12">
       <h1 class="page-header"> Booking List</h1>
   </div>
    <!-- end  page header -->
</div>
<div class="row">
   <div class="col-lg-12">
       <!-- Advanced Tables -->
       <div class="panel panel-default">
           <div class="panel-heading">
                Booking
           </div>
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                           <tr>
                               <th>Client Name</th>
                               <th>Customer Firstname</th>
                               <th>Customer lastname</th>
                               <th>Customer Email</th>
                               <th>Customer Vehicle License</th>
                               <th>Customer Phone Number</th>
                               <th>Customer ID </th>
                               <th>Checked In </th>
                               <th>Checked Out</th>
                               <th>Status </th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($booked as $booked)


                           <tr class="odd gradeX">
                               <td>{{$booked->booking_id}}</td>
                               <td>Customer Firstname</td>
                               <td>Customer lastname</td>
                               <td>Customer email</td>
                               <td>Customer vehicle License</td>
                               <td>{{$booked->customer_phone_number}}</td>
                               <td>{{$booked->customer_id}}</td>
                               <td>{{$booked->customer_check_in}}</td>
                               <td>{{$booked->customer_check_out}}</td>
                               <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                {{-- @if ($house->house_status==0) --}}
                                <a class="btn btn-danger" href="#">Pending
                                        <i class="fas fa-thumbs-down"></i>
                                    </a>
                                    {{-- @else --}}
                                    <a class="btn btn-success" href="#">Approved
                                        <i class="fas fa-thumbs-up"></i>
                                    </a>
                                </div>
                               </td>
                               <td>
                                    {{-- @endif --}}
                                <a href="#" class="btn btn-info"> <i class="fas fa-eye">Edit</i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>

                            </td>
                           </tr>

                           @endforeach

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

