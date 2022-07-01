@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
  <div class="card-header text-white">Add New Galery</div>
  <div class="card-body">
      
      <form action="" method="post"enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label class="text-white">Caption</label></br>
        <input type="text" name="deskripsi" class="form-control"></br>
        <label class="text-white">Select Gambar Menu</label></br>
        <input type="file" name="gambar" id="gambar" class="form-control"></br>
        <label class="text-white">Artikel</label></br>
        <textarea cols="30" rows="8" name="artikel" placeholder="feedback......" height="100px";></textarea>
        <input type="submit" value="Save" class="btn btn-warning"></br>
    </form>
  </div></div>
</div>
@stop</body>