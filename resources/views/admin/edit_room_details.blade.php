@extends('admin.layouts')

@section('content')
<div class="row">
    <!-- page header -->
   <div class="col-lg-12">
       <h1 class="page-header">Edit Room</h1>
   </div>
   <!--end page header -->
</div>
<div class="row">
   <div class="col-lg-6 offset-lg-3 mx-auto" >
       <!-- Form Elements -->

       <div class="panel panel-default">

           <div class="panel-heading">
               Edit Room Details
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                   <form role="form"   enctype="multipart/form-data" method="POST" action="{{url('update-room',$rooms->rooms_id)}}">
                    @csrf
                    @method('PUT')
                      <input type="hidden" name="_method" value="PATCH" />
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
                            <option value="{{$room_services->service_id}}">{{$room_services->room_services_name}}</option>
                             @endforeach
                        </select>

                        {{-- <input type="text" class="form-control" placeholder="Enter Client Name" id="client_name"> --}}
                      </div>
                      <div class="form-group">
                        <label for="room_code">Room Code:</label>
                        <input type="text" class="form-control" placeholder="Enter Room Code"  value="{{ $rooms ->room_code }}" name="room_code" id="room_code" required>
                      </div>
                      <div class="form-group">
                        <label for="room_price">Room Price:</label>
                        <input type="double" class="form-control" placeholder="Enter Room Price" value="{{ $rooms ->room_price }}" name="room_price" id="room_price" required>
                      </div>
                      <div class="form-group">
                        <label for="size">Size:</label>
                        <input type="text" class="form-control" placeholder="Enter Room Size" value="{{ $rooms ->size }}" name="size" id="size" required>
                      </div>
                      <div class="form-group">
                        <label for="capacity">Capacity:</label>
                        <input type="text" class="form-control" placeholder="Enter Room Capacity" value="{{ $rooms ->capacity }}" name="capacity"id="capacity" required>
                      </div>
                      <div class="form-group">
                        <label for="bed">Bed:</label>
                        <input type="text" class="form-control" placeholder="Enter Beds" value="{{ $rooms ->bed }}" name="bed"id="bed" required>
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

