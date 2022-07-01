@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
  <div class="card-header text-white">Data User</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label class="text-white">Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label class="text-white">Username</label></br>
        <input type="text" name="username" id="address" value="{{$contacts->username}}" class="form-control"></br>
        <label class="text-white">email</label></br>
        <input type="text" name="email" id="address" value="{{$contacts->email}}" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-warning"></br>
        </br>
    </form>
  
  </div>
</div></div>
@stop</body>
