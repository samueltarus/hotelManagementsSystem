@extends('admin.layouts')

@section('content')
<div class="row">
    <!--  page header -->
   <div class="col-lg-12">
       <h1 class="page-header"> Reservation List</h1>
   </div>
    <!-- end  page header -->
</div>
<div class="row">
   <div class="col-lg-12">
       <!-- Advanced Tables -->
       <div class="panel panel-default">
           <div class="panel-heading">
                Reservation
           </div>
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                           <tr>
                               <th>Booking ID</th>
                               <th>Customer Username</th>

                               <th>Customer Room </th>
                               <th>Customer Phone Number</th>
                               <th>Checked In </th>
                               <th>Checked Out</th>
                               <th> Customer Checkout Officialy Status </th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($book as $book)


                           <tr class="odd gradeX">
                               <td>{{$book->booking_id}}</td>
                               <td>{{$book->customer_username}}</td>
                               <td>{{$book->guest}}</td>
                               <td>{{$book->customer_phone_number}}</td>
                                <td>{{$book->customer_check_in}}</td>
                               <td>{{$book->customer_check_out}}</td>
                               <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">
                                {{-- @if ($house->house_status==0) --}}
                                <a class="btn btn-success" href="#">Extend Duration
                                    <i class="fas fa-thumbs-up"></i>
                                </a>
                                    {{-- @else --}}

                                    <a class="btn btn-danger" href="#">Clear Reservation
                                        <i class="fas fa-thumbs-down"></i>
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

