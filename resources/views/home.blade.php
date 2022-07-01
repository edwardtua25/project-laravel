@extends('layout.foother')
@extends('layout.layouts')

@section('container')
<style>
  .col-md-4.card{
    width: 200px;
  }
</style>
<h3 class="text-center" style="text-decoration: underline">Menu Of The Day</h3>

<div class="container">
  <div class="row mt-3">
    @foreach($menu as $day)
      <div class="col-md-4 mt-3">
        <div class="card border-dark bg-dark ">
          
          <img src="{{  url('asset/gambar/'.$day->gambar) }}" alt="" class="text-center" height="350px" style="padding: 7px 7px 7px 7px; border-radius:5px;">
            <span class="text-center text-white">{{ $day->nama }}</span>
            <span class="text-center text-warning">Rp.{{ $day->harga}}</span><br>
        
        </div>
      </div> @endforeach 
  </div> 
</div>
  
<hr>


<h3 class="text-center" style="text-decoration: underline">El Tona Coffeehouse</h3>
 

<hr>
<div class="container">
<div class="col-md-112">
    <div class="card border-dark">
     <p class="text-center" style="font-family: 'Courier New', Courier, monospace; font-height:bold; font-size:15px;"><b>WELCOME TO THE El Tona CoffeeHouse </b><br>
      OPENING HOURS <br>
      Monday to Friday 8am-22pm <br>
      Saturday and Sunday 8am-24pm <br>
      Don’t forget to always update today’s menu
      El Tona CafeHouse merupakan salah satu café yang terletak di Jl. Horas No. 81, Tomok Parsaoran, Samosir. <br> Cafe ini mulai beroperasi 5 tahun tepatnya pada tanggal 10 Juni 2018. <br> El Tona CoffeeHouse memiliki 12 karyawan local yang mengutamakan tenaga <br> kerja daerah setempat dan di dukung dengan barista, jangan lupa mampir ya 😊. <br>
      Ingin menikmati makanan dengan santai dan hangat bersama teman dan pasangan? <br> Tentu bisa, Kami menyediakan Live Music setiap hari malam nya dan didukung dengan tema nuansa tropical flower <br> membuat makan bersama pasangan semakin romantis. <br>
      El Tona CoffeeHouse juga menyediakan spot foto loh. Sobat El Tona yang suka banget selfie atau foto, bisa banget di El Tona coffeeHouse. hmm, bukan hanya itu, sobat El Tona juga dapat menikmati makanan khas batak juga.<br>
      Tidak kalah dong dengan menu, kami menyediakan makanan dan minuman yang tidak kalah rasa juga. <br>
      
      Ditunggu Kedatangannya ya....
      </p>
      
    </div>
  </div>  
</div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

@endsection


<br>

@section('foother')
@endsection




