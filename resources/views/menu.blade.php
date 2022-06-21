<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

@extends('layout.foother')
@extends('layout.layouts')

@section('container')
<html><head>

</head>
<body>
  



<style>
 img{
   padding: 7px 7px 7px 7px;
 }
 span{
   text-align: center;
   color: white;
 }

 .item{
    transition: .5s ease-in-out;
}
.item:hover{
    filter: brightness(50%);
}
body{
  background: #eee;
}

*{
  margin:0;
  padding:0;
  border:0;
  font-size: 16px;
  line-height: 1.4;
  font-family: sans-serif;
}
.body{
  padding:20px;
  margin:0 auto;
  max-width:80%;
  background:#fff;
  display:block;
  height:100vh;
}
/*.body{
  display: grid;
  grid-template-columns: auto auto;
  justify-content: start;
  grid-column-gap: 10px;
}
.body.-open{
  display: block;
}
*/

h2, details{
  display:inline;
}

details {
  position:relative;
}
details summary {
  display:block;
  cursor: pointer;
  color: red;
}
details summary:focus {
  outline:none;
}
details[open] {
  display:block;
  padding-bottom:25px;
  padding-top:10px;
  animation: open .2s linear;
}
details[open] summary {
  position:absolute;
  bottom: 0;
  left:0;
}

details #open{padding-left:5px;text-align:middle;}
details #open:after{
    display: inline-block;
    position:relative;
    top: -3px;
    padding-left: 8px;
    content: "\00bb";
    transform: rotate(90deg);
}
details[open] #open{display:none;}
details #close{display:none;}
details[open] #close{display:block;}

::-webkit-details-marker {display: none;}





@keyframes open {
  0% {
    opacity: 0;
    transform: translateY(-10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
#makanan{
  background-color: black;
  color:#fff;
}
#makanan:hover{
  background-color: aliceblue;
  color:black;
}
#minuman{
  background-color: black;
  color:#fff;
}
#minuman:hover{
  background-color: aliceblue;
  color:black;
}
#cake{
  background-color: black;
  color:#fff;
}
#cake:hover{
  background-color: aliceblue;
  color:black;
}
</style>
<div class="saia" style="background-color: black">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active "  href="#food" id="makanan">Foods</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#drink" id="minuman">Drinks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#cak" id="cake">Cake</a>
  </li>

</ul></div><br><br>
    {{-- <div class="container "> --}}
    <h3 class="text-center" id="food" style="background-color:black;color:#fff;width:130px;padding:1px 1px 1px 1px">F o o d s</h3>

    <div class="row mt-3">
      
      @foreach  ($makanan as $item)
        <div class=" item col-md-3 mt-4">
          <div class="card border-dark bg-dark">
            <img src="{{  url('asset/food/'.$item->gambar) }}" class="card-img-top" alt="..." height="200px;">
            </a>
           <span class="text-center text-white">{{ $item->nama }}</span>
           <span class="text-center text-warning">Rp.{{ $item->harga }}</span>
          </div>
        </div>
     
      @endforeach   {{ $makanan->links() }}</div>
        
<br>
<br>
     <h3 id="drink" style="font-family:lobster;background-color:black;color:#fff;width:120px;padding:1px 2px 2px 2px;">D r i n k</h3>
     <div class="row mt-3">
      @foreach ($drink as $i)
     

        <div class=" item col-md-3 mt-4">
          <div class="card border-dark bg-dark">
            <img src="{{  url('asset/drink/'.$i->gambar) }}" class="card-img-top" alt="..." height="200px;">
            </a>
           <span class="text-center text-white">{{ $i->nama }}</span>
           <span class="text-center text-warning">Rp.{{ $i->harga }}</span>
          </div>
        </div>
      @endforeach {{ $drink->links() }}</div><br>
<center style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;background-color:black;color:#fff;width:120px;"><b><h3 id="cak">CAKE</h3></b></center>
<div class="row mt-3">
  @foreach ($cake as $m)
  

    <div class=" item col-md-3 mt-4">
      <div class="card border-dark bg-dark">
        <img src="{{  url('asset/cake/'.$m->gambar) }}" class="card-img-top" alt="..." height="200px;">
        </a>
       <span class="text-center text-white">{{ $m->nama }}</span>
       <span class="text-center text-warning">Rp.{{ $m->harga }}</span>
      </div>
    </div>
  @endforeach {{ $cake->links() }}</div><br>
</div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection

@section('foother')

@endsection
</body>
</html>