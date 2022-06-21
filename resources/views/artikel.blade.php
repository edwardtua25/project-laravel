@extends('layout.foother')
@extends('layout.layouts')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Menu Of The Day</h2>
        <div class="clearfix">
            @foreach ($menu as $item)
            <img src="{{  url('asset/gambar/'.$item->gambar) }}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
            @endforeach
            <p>
              A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
            </p>
          </div>
          <br><br>

          <h2>Event</h2>
          <hr>
          @foreach ($even as $satu)
          <div class="card mb-5" style="max-width:2000px;">
            <div class="row g-0">
              <div class="col-md-8">
                <img src="{{  url('asset/even/'.$satu->gambar) }}" class="img-fluid rounded-start" alt="..." width="500px">
              </div>
              <div class="col-md-4">
                <div class="card-body">
                  <h5 class="card-title">Judul:{{ $satu->nama }}</h5>
                  <p class="card-text">Artikel:<br>{{ $satu->deskripsi }}</p>
                </div>            
         
              </div> @endforeach
            </div>
          </div>
       </div>
</body>
</html>

@endsection


<br>

@section('foother')
@endsection
