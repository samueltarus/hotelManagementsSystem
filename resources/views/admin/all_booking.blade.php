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
                               <th>Customer Phone Number</th>
                               <th>Customer Username</th>
                               <th>Customer National ID |Passport </th>
                               <th>Checked In </th>
                               <th>Checked Out</th>
                               <th> Booking Status </th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($book as $book)


                           <tr class="odd gradeX">
                               <td>{{$book->booking_id}}</td>
                               <td>{{$book->customer_phone_number}}</td>
                               <td>{{$book->customer_username}}</td>
                               <td>{{$book->booking_id}}</td>
                               <td>{{$book->customer_check_in}}</td>
                               <td>{{$book->customer_check_out}}</td>
                               <td>
                                @if ($book->booking_status==0)
                                <a class="btn btn-danger" href="{{URL::to('/unactive-book/'.$book->booking_id)}}">Pending Booking
                                        <i class="fas fa-thumbs-down"></i>
                                    </a>
                                    @else
                                    <a class="btn btn-success" href="{{URL::to('/active-book/'.$book->booking_id)}}">Approved Booking
                                        <i class="fas fa-thumbs-up"></i>
                                    </a>
                                    @endif
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

