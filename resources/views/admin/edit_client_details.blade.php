@extends('admin.layouts')

@section('content')
<div class="row">
    <!-- page header -->
   <div class="col-lg-12 ">
       <h1 class="page-header">Edit Client</h1>
   </div>
   <!--end page header -->
</div>
<div class="row">
   <div class="col-lg-6 offset-lg-3 mx-auto">
       <!-- Form Elements -->
       <div class="panel panel-default">
           <div class="panel-heading">
               Edit Client details
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                   <form role="form"   enctype="multipart/form-data" method="POST" action="{{url('update-client',$clients->client_id)}}">
                    {{ csrf_field() }}
                         @csrf
                         <div class="form-group">
                        <label for="client_name">Client Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Client Name" value="{{ $clients ->client_name }}" name="client_name" id="client_name" required>
                      </div>
                      <div class="form-group">
                        <label for="no_of_rooms">Number of Rooms:</label>
                        <input type="number" class="form-control" placeholder="Enter Number of Rooms" value="{{ $clients ->no_of_rooms }}"  name="no_of_rooms" id="no_of_rooms" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" value="{{ $clients ->email }}" name="email" id="email" required>
                      </div>
                      <div class="form-group">
                        <label for="kra_pin">KRA Pin:</label>
                        <input type="text" class="form-control" placeholder="Enter KRA Pin" value="{{ $clients ->kra_pin }}" name="kra_pin" id="kra_pin" required>
                      </div>
                      <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="number" class="form-control" placeholder="Enter Phone Number" value="{{ $clients->phone_number }}" name="phone_number" id="phone_number" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter Address" value="{{ $clients ->address }}" name="address" id="address" required>
                      </div>


                           <button type="submit" class="btn btn-primary">Update Client </button>

                   </form>
                   </div>

               </div>
           </div>
       </div>
        <!-- End Form Elements -->
   </div>
</div>

@endsection

