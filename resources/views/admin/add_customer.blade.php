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
               Register Customer
           </div>
           <div class="panel-body">
               <div class="row">
                   <div class="col-lg-6">
                   <form role="form"   enctype="multipart/form-data" method="POST" action="{{url('save-customer')}}">
                    @csrf



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
                        <label for="id_card">National  ID:</label>
                        <input type="text" class="form-control" placeholder="Enter Nationa ID" name="id_card" id="id_card" required>
                      </div>
                      <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter Address" name="address"id="address" required>
                      </div>
                      <div class="form-group">
                        <label for="city ">City :</label>
                        <input type="text" class="form-control" placeholder="Enter City" name="city" id="city " required>
                      </div>
                      <div class="form-group">
                        <label for="county ">county /Province:</label>
                        <input type="text" class="form-control" placeholder="Enter County" name="county" id="county " required>
                      </div>
                      <div class="form-group">
                        <label for="driving_license "> Driving License :</label>
                        <input type="text" class="form-control" placeholder="Enter Drving License"name="driving_license"  id="certificate_of_good_conduct " >
                      </div>

                           <button type="submit" class="btn btn-primary">Save Customer</button>
                           <button type="reset" class="btn btn-success">Reset Customer </button>
                       </form>
                   </div>

               </div>
           </div>
       </div>
        <!-- End Form Elements -->

   </div>
</div>

@endsection

