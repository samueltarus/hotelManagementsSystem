@extends('admin.layouts')

@section('content')
<div class="row">
    <!-- page header -->
   <div class="col-lg-12  mx-auto">
       <h1 class="page-header">New Employee</h1>
   </div>
   <!--end page header -->
</div>
<div class="row">
   <div class="col-lg-6 offset-lg-3 mx-auto" >
       <!-- Form Elements -->

       <div class="panel panel-default">

           <div class="panel-heading">
               Register Employee
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                   <form role="form"   enctype="multipart/form-data" method="POST" action="{{url('save-employee')}}">
                    @csrf

                    <div class="form-group">
                        <label for="client_id">Client Name:</label>
                        <select class="form-control" name="client_id" id="client_id" required>
                            @foreach ($rooms as $rooms)
                            <option value="{{$rooms->client_id}}">{{$rooms->client_name}}</option>
                             @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" id="first_name" required>
                      </div>

                      <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" id="last_name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required>
                      </div>
                      <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="number" class="form-control" placeholder="Enter Phone Number"  name="phone_number" id="phone_number" required>
                      </div>
                      <div class="form-group">
                        <label for="id_card">Employee ID:</label>
                        <input type="text" class="form-control" placeholder="Enter Nationa ID" name="id_card" id="id_card" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter Address" name="address"id="address" required>
                      </div>
                      <div class="form-group">
                        <label for="kra_pin ">KRA PIN :</label>
                        <input type="text" class="form-control" placeholder="Enter Kra Pin" name="kra_pin" id="kra_pin " required>
                      </div>
                      <div class="form-group">
                        <label for="nssf_pin ">NSSF PIN :</label>
                        <input type="text" class="form-control" placeholder="Enter Kra Pin" name="nssf_pin" id="nssf_pin " required>
                      </div>
                      <div class="form-group">
                        <label for="certificate_of_good_conduct "> Certificate of Good Conduct :</label>
                        <input type="text" class="form-control" placeholder="Enter Certificate of Good Cconduct"name="certificate_of_good_conduct"  id="certificate_of_good_conduct " required>
                      </div>
                      <div class="radio">
                        <label>
                            <input type="checkbox" name="status" id="status" value="1" checked>Status
                        </label>
                    </div>
                           <button type="submit" class="btn btn-primary">Save Employee</button>
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

