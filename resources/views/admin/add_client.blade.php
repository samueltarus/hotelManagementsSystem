@extends('admin.layouts')

@section('content')
<div class="row">
    <!-- page header -->
   <div class="col-lg-12  mx-auto">
       <h1 class="page-header">New Client</h1>
   </div>
   <!--end page header -->
</div>
<div class="row">
   <div class="col-lg-6 offset-lg-3 mx-auto">
       <!-- Form Elements -->
       <div class="panel panel-default">
           <div class="panel-heading">
               Register Client
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                   <form role="form"   enctype="multipart/form-data" method="POST" action="{{url('save-client')}}">
                         @csrf
                         <div class="form-group">
                        <label for="room_code">Client Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Client Name" name="client_name" id="client_name" required>
                      </div>
                      <div class="form-group">
                        <label for="no_of_rooms">Number of Rooms:</label>
                        <input type="number" class="form-control" placeholder="Enter Number of Rooms" name="no_of_rooms" id="client_name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required>
                      </div>
                      <div class="form-group">
                        <label for="kra_pin">KRA Pin:</label>
                        <input type="text" class="form-control" placeholder="Enter KRA Pin" name="kra_pin" id="kra_pin" required>
                      </div>
                      <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone_number" id="phone_number" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter Address" name="address" id="address" required>
                      </div>


                           <button type="submit" class="btn btn-primary">Save</button>
                           <button type="reset" class="btn btn-success">Reset </button>
                   </form>
                   </div>

               </div>
           </div>
       </div>
        <!-- End Form Elements -->
   </div>
</div>

@endsection

