@extends('admin.layouts')

@section('content')
<div class="row">
    <!--  page header -->
   <div class="col-lg-12">

       <h1 class="page-header">Rooms</h1>


   </div>

    <!-- end  page header -->
</div>
<div class="row">
   <div class="col-lg-12">
       <!-- Advanced Tables -->
       <div class="panel panel-default">
           <div class="panel-heading">
                Rooms List
           </div>
           <div class="panel-body">
               <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                           <tr>
                               <th>Client ID</th>
                               <th>Room Type</th>
                               <th>Room Code</th>
                               <th>Room Price</th>
                               <th>Status </th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($rooms as $rooms)

                           <tr class="odd gradeX">
                           <td>{{$rooms->client_id}}</td>
                           <th>{{$rooms->room_type_id}}</th>
                               <td>{{$rooms->room_code}}</td>
                               <td>{{$rooms->room_price}}</td>
                               <td class="center">{{$rooms->status}}</td>

                               <td class="text-right py-0 align-middle">
                                <div class="btn-group btn-group-sm">

                                <a href="{{URL::to('/edit-room/'.$rooms->room_id)}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                                <a href="{{URL::to('/delete-room/'.$rooms->room_id)}}" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
                                </div>
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

