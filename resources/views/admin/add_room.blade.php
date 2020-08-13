@extends('admin.layouts')

@section('content')
<div class="row">
    <!-- page header -->
   <div class="col-lg-12">
       <h1 class="page-header">New Room</h1>
   </div>
   <!--end page header -->
</div>
<div class="row">
   <div class="col-lg-6 offset-lg-3 mx-auto" >
       <!-- Form Elements -->

       <div class="panel panel-default">

           <div class="panel-heading">
               Register Room
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                   <form role="form"   enctype="multipart/form-data" method="POST" action="{{url('save-room')}}">
                    @csrf
                    <div class="form-group">
                        <label for="client_name">Client Name:</label>
                        <select class="form-control" name="client_id" id="client_id" required>
                            @foreach ($rooms as $rooms)
                            <option value="{{$rooms->client_id}}">{{$rooms->client_name}}</option>
                             @endforeach
                        </select>

                        {{-- <input type="text" class="form-control" placeholder="Enter Client Name" id="client_name"> --}}
                      </div>
                      <div class="form-group">
                        <label for="room_type_id">Room Type:</label>
                        <select class="form-control" name="room_type_id" id="room_type_id" required>
                            @foreach ($room_types as $room_types)
                            <option value="{{$room_types->room_type_id}}">{{$room_types->room_type_name}}</option>
                             @endforeach
                        </select>

                        {{-- <input type="text" class="form-control" placeholder="Enter Client Name" id="client_name"> --}}
                      </div>
                      <div class="form-group">
                        <label for="service_id">Room Service:</label>
                        <select class="form-control" name="service_id" id="service_id" required>
                            @foreach ($room_services as $room_services)
                            <option value="{{$room_services->service_id}}">{{$room_services->service_name}}</option>
                             @endforeach
                        </select>

                        {{-- <input type="text" class="form-control" placeholder="Enter Client Name" id="client_name"> --}}
                      </div>
                      <div class="form-group">
                        <label for="room_code">Room Code:</label>
                        <input type="text" class="form-control" placeholder="Enter Room Code" name="room_code" id="room_code" required>
                      </div>
                      <div class="form-group">
                        <label for="room_price">Room Price:</label>
                        <input type="double" class="form-control" placeholder="Enter Room Price"  name="room_price" id="room_price" required>
                      </div>
                      <div class="form-group">
                        <label for="size">Size:</label>
                        <input type="text" class="form-control" placeholder="Enter Room Size" name="size" id="size" required>
                      </div>
                      <div class="form-group">
                        <label for="capacity">Capacity:</label>
                        <input type="text" class="form-control" placeholder="Enter Room Capacity" name="capacity"id="capacity" required>
                      </div>
                      <div class="form-group">
                        <label for="bed">Bed:</label>
                        <input type="text" class="form-control" placeholder="Enter Beds"name="bed"id="bed" required>
                      </div>
                      <div class="form-group">
                        <label for="payment_number">Payment Number:</label>
                        <input type="text" class="form-control" placeholder="Enter Payment Number"name="payment_number"id="payment_number" required>
                      </div>
                      <div class="form-group">
                        <label for="payment_account_number">Payment Account Number:</label>
                        <input type="text" class="form-control" placeholder="Enter Account Number"name="payment_account_number"id="payment_account_number" >
                      </div>
                      <div class="form-group">
                        <label for="payment_contact_person">Payment Contact Person:</label>
                        <input type="text" class="form-control" placeholder="Enter Beds"name="payment_contact_person"id="payment_contact_person" required>
                      </div>

                      <div class="radio">
                        <label>
                            <input type="checkbox" name="status" id="status" value="0" checked>Status
                        </label>
                    </div>



                           <button type="submit" class="btn btn-primary">Save Room</button>
                           <button type="reset" class="btn btn-success">Reset Room </button>
                       </form>
                   </div>

               </div>
           </div>
       </div>
        <!-- End Form Elements -->

   </div>
</div>

@endsection

