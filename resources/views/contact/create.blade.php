@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
  <div class="card-header text-white"><h3 style="font-family: 'Gill Sans'">Add new User</h3></div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post" >
        {!! csrf_field() !!}
        <label class="text-white">Name</label></br>
        <input type="text" name="name"  class="form-control"></br>
        <label class="text-white">Username</label></br>
        <input type="text" name="username"  class="form-control"></br>
        <label class="text-white">email</label></br>
        <input type="text" name="email"  class="form-control"></br>
        <label class="text-white">Password</label></br>
        <input type="password" name="password"  class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-warning"></br>
    </form>
  
  </div>
</div></div>
@stop</body>
