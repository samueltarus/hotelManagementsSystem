@extends('admin.layouts')

@section('content')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header"> Managements Dashboard</h1>
    </div>
    <!--End Page Header -->
</div>

<div class="row">
    {{-- @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif --}}
    {{-- <!-- Welcome -->
    <div class="col-lg-12">
        <div class="alert alert-info">
            <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
<i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
        </div>
    </div>
    <!--end  Welcome --> --}}
</div>


<div class="row">
    <!--quick info section -->
    <div class="col-lg-4">
        <div class="alert alert-success text-center">
        <i class="fa  fa-beer fa-3x"></i>&nbsp;Online Booking Made Month<br><b> <span>{{$Booking->count()}} </span> </b>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="alert alert-danger text-center">
            <i class="fa fa-calendar fa-3x"></i>&nbsp; Customers Recorded Month<br> <b> <span>{{$Customers->count()}} </span></b>

        </div>
    </div>
    <div class="col-lg-4">
        <div class="alert alert-success text-center">
            <i class="fa  fa-beer fa-3x"></i>&nbsp; Hotel  Clients <br><b>{{$Clients->count()}}</b>
        </div>
    </div>

    <!--end quick info section -->
</div>

<div class="row">


    <div class="col-lg-6">
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body yellow">
                <i class="fa fa-bar-chart-o fa-3x"></i>
                <h3>20,741 </h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">Daily Customers Visits
                </span>
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body blue">
                <i class="fa fa-pencil-square-o fa-3x"></i>
                <h3>2,060 </h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">Pending Booking Found
                </span>
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body green">
                <i class="fa fa fa-floppy-o fa-3x"></i>
                <h3>20 GB</h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">New Data Uploaded
                </span>
            </div>
        </div>
        <div class="panel panel-primary text-center no-boder">
            <div class="panel-body red">
                <i class="fa fa-thumbs-up fa-3x"></i>
                <h3>2,700 </h3>
            </div>
            <div class="panel-footer">
                <span class="panel-eyecandy-title">New Customers Registered
                </span>
            </div>
        </div>
    </div>

</div>




@endsection
