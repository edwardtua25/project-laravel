@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
  <div class="card-header text-white">Add New Galery</div>
  <div class="card-body">
      
      <form action="/edit-galeri/{{ $galeri->id}}" method="post">
        {!! csrf_field() !!}
        <label class="text-white">Caption</label></br>
        <input type="text" name="deskripsi" class="form-control" value="{{ $galeri->deskripsi }}" height="400px"></br>
        <label class="text-white">Artikel</label></br>
        <input type="textlong" name="artikel" value="{{ $galeri->artikel }}"><br><br>
        <input type="submit" value="Save" class="btn btn-warning"></br>

    </form>
  </div>
</div></div>
@stop</body>