@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
  <div class="card-header text-white">Add Menu Of The Day</div>
  <div class="card-body">
      
      <form action="/edit-gambar/{{ $menu->id}}" method="post">
        {!! csrf_field() !!}
        <label class="text-white">Nama Menu</label></br>
        <input type="text" name="nama" class="form-control" value="{{ $menu->nama }}"></br>
        <label class="text-white">Harga</label></br>
        <input type="text" name="harga" class="form-control" placeholder="Rp....." value="{{ $menu->harga }}"></br>
        <input type="submit" value="Save" class="btn btn-warning"></br>
    </form>
  </div>
</div></div>
@stop </body>