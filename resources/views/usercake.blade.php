@extends('layout.foother')
@extends('layout.layouts')

@section('container')


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
<div class="container">
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


@endsection