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
      El Tona CafeHouse merupakan salah satu café yang terletak di Jl. Horas No. 81, Tomok Parsaoran, Samosir. <br> Cafe ini mulai beroperasi 5 tahun tepatnya pada tanggal 10 Juni 2018. <br> El Tona CoffeeHouse memiliki 12 kariawan local yang mengutamakan tenaga <br> kerja daearah setempat dan di dukung dengan barista, jangan lupa mampir ya 😊. <br>
      Ingin menikmati makanan dengan santai dan hangat berdama teman dan pasangan? <br> Tentu bisa, Kami menyediakan Live Music setiap hari malam nya dan didukung dengan tema nuansa tropical flower <br> membuat makan bersama pasangan semakin romantis. <br>
      Tidak kalah dong dengan menu, kami menyediakan makanan dan minuman yang kalah rasa juga. <br>
      Ditunggu Kedatangannya ya....
      </p>
      
    </div>
  </div>  
</div>
@endsection


<br>

@section('foother')
@endsection




