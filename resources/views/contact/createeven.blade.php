@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
  <div class="card-header text-white">Add New Events</div>
  <div class="card-body">
      
      <form action="" method="post"enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label class="text-white">Nama Even</label></br>
        <input type="text" name="nama" class="form-control"></br>    
        <label class="text-white">Select Gambar Event</label></br>
        <input type="file" name="gambar" id="gambar" class="form-control"></br>
        <label class="text-white">Deskripsi</label></br>
        <textarea name="deskirpsi" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Save" class="btn btn-warning"></br>
    </form>
  </div>
</div></div>
@stop</body>