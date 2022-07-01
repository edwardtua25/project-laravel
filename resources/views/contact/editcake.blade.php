@extends('contact.layout')
@section('content')
<body style="background-color: rgb(0, 0, 0)">
  

  <div class="container " style="padding-top: 20px;margin-top:20px">
<div class="card bg-dark">
  <div class="card-header text-white">Edit Cake</div>
  <div class="card-body">
      
      <form action="{{ url('/edit-cake/' .$cake->id) }}" method="post">
        {!! csrf_field() !!}
        {{-- @method("PATCH") --}}
        <input type="hidden" name="id" id="id" value="{{$cake->id}}" id="id" />
        <label class="text-white">Name</label></br>
        <input type="text" name="nama" id="name" value="{{$cake->nama}}" class="form-control"></br>
        <label class="text-white">Harga</label></br>
        <input type="text" name="harga" id="address" value="{{$cake->harga}}" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-warning"></br>
        </br>
    </form>
  
  </div>
</div></div>
@stop</body>
