@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{url('images/bleacherreportlogo.jpg')}}" class="rounded-circle" height="150px" width="150px">
        </div>
        <div class="col-9 pt-4">
            <div><h1>brfootball</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class=pr-5><strong>23k</strong> followers</div>
                <div class=pr-5><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Bleacher Report Football</div>
            <div>Roundtable | Racism In Football</div>
            <div><a href="www.bleacherreport.com/football">www.bleacherreport.com/football</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="{{url('images/messi.jpg')}}" class="w-100 h-75">
        </div>
        <div class="col-4">
            <img src="{{url('images/ronaldo.jpg')}}" class="w-100 h-75">
        </div>
        <div class="col-4">
            <img src="{{url('images/neymar.jpg')}}" class="w-100 h-75">
        </div>
    </div>
</div>
@endsection
