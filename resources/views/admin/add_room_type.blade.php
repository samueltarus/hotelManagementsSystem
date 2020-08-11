@extends('admin.layouts')

@section('content')
<div class="row">
    <!-- page header -->
   <div class="col-lg-12">
       <h1 class="page-header">New Room Type</h1>
   </div>
   <!--end page header -->
</div>
<div class="row">
   <div class="col-lg-6 offset-lg-3 mx-auto" >
       <!-- Form Elements -->

       <div class="panel panel-default">

           <div class="panel-heading">
               Register Room Type
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                   <form role="form"   enctype="multipart/form-data" method="POST" action="{{url('save-room-type')}}">
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
                        <label for="room_type_name">Room Type Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Room Type" name="room_type_name" id="room_type_name" required>
                      </div>

                      <div class="radio">
                        <label>
                            <input type="checkbox" name="status" id="status" value="1" checked>Status
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

