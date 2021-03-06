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
            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;letter-spacing:2px">
            Halo sobat El Tona! Semangat Pagi! 
Kali ini El Tona Coffee House menyediakan menu spesial loh hari ini! Kita ada Menu <b>Of The Day</b> yang dimana sobat El Tona akan dihidangkan menu yang disediakan hanya hari ini. 
Seperti biasa El Tona CoffeeHouse selalu menghadirkan 8 menu yang akan tersedia pada hari ini.

Jangan ragu ya sobat, dengan adanya event ini kantong kamu bakalan aman banget loh. Harganya terjangkau dan kamu pasti dapat paket komplit. 
Dengan adanya Menu Of The Day ini, kantong kamu bakal lebih irit! Yuk, buruan gabung di El Tona CoffeeHouse dan buruan pesan Menu Of The Day kita hari ini! Terbatas lohh, jangan sampai kehabisan sobat!
           
            </p>
          </div>
          <br><br>

          <h2>Event</h2>
          <hr>
          @foreach ($even as $satu)
          <div class="card mb-5" style="max-width:2000px;">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="{{  url('asset/even/'.$satu->gambar) }}" class="img-fluid rounded-start" alt="..." width="500px">
              </div>
              <div class="col-md-4">
                <div class="card-body">
                   <h6 class="card-title" style="font-family: Verdana, Geneva, Tahoma, sans-serif">Judul:{{ $satu->nama }}</h6>
                  <p style="background-color: antiquewhite;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Waktu:{{ $satu->waktu }}</p>
                  <p class="card-text" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;letter-spacing:2px;">Artikel:<br>{{ $satu->deskripsi }}</p>
 
                </div>            
         
              </div><br> @endforeach
            </div>
          </div>
       </div>
             <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>

@endsection


<br>

@section('foother')
@endsection
