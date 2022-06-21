@extends('layout.foother')
@extends('layout.layouts')

@section('container')

{{-- 
<div class="container">
    <div class="row mt-3">
      
        <div class="col-md-4 mt-3">
          <div class="card border-dark">
            <img src="{{  url('asset/gambar/'.$day->gambar) }}" alt="" width="80px" height="80px">
            <span class="text-center">{{ $day['harga'] }}</span>
            <span class="text-center">{{ $day['nama'] }}</span>
          </div>
        </div> 
    </div> 
  </div> --}}
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Responsive Image Cards With Hover Effect</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body{
	height: 100vh;
	font-family: "Raleway", sans-serif;
	background: #fff7e9;
}

.container{
	margin: 30px;
}

.row{
	width: 100%;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
}

.image{
	background: #50A7FF;
	position: relative;
	flex: 1;
	max-width: 600px;
	height: 400px;
	margin: 20px;
	overflow: hidden;
}
img{
  width: 360px;
  height: 90%;
}
.image img{
	opacity: 0.8;
	position: relative;
	vertical-align: top;
	transition: 0.6s;
	transition-property: opacity;
}

.image:hover img{
	opacity: 1;
}

.image .details{
	z-index: 1;
	position: absolute;
	top: 0;
	right: 0;
	color: rgb(20, 20, 20);
	width: 100%;
	height: 100%;
}

.image .details h2{
	text-align: center;
	font-size: 35px;
	text-transform: uppercase;
	font-weight: 300;
	margin-top: 70px;
	transition: 0.4s;
	transition-property: transform;
}

.image .details h2 span{
	font-weight: 900;
}

.image:hover .details h2{
	transform: translateY(-30px);
}

.image .details p{
	margin: 30px 30px 0 30px;
	font-size: 18px;
	font-weight: 600;
	text-align: center;
	opacity: 0;
	transition: 0.6s;
	transition-property: opacity, transform;
}

.image:hover .details p{
	opacity: 1;
	transform: translateY(-40px);
}

.more{
	position: absolute;
	background: rgba(255, 255, 255, 0.8);
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px;
	bottom: -60px;
	transition: 0.6s;
	transition-property: bottom;
}

.image:hover .more{
	bottom: 0;
}

.more .read-more{
	color: #000;
	text-decoration: none;
	font-size: 20px;
	font-weight: 500;
	text-transform: uppercase;
}

.more .read-more span{
	font-weight: 900;
}

.more .icon-links i{
	color: #000;
	font-size: 20px;
}

.more .icon-links a:not(:last-child) i{
	margin-right: 20px;
}

/* Responsive CSS */

@media (max-width: 1080px){
	.image{
		flex: 100%;
		max-width: 480px;
	}
}

@media (max-width: 400px){
	.image .details p{
		font-size: 16px;
	}

	.more .read-more, .more .icon-links a i{
		font-size: 18px;
	}
}
      
      </style>
    </head>
    <body>
		<center style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;text-decoration:underline;"><b><h3>Galery El Tona CoffeHouse</h3></b></center>
      <!--image card layout start-->
      <div class="container">
        <!--image row start-->
        <div class="row">
          <!--image card start-->
          @foreach($galeri as $day)
          <div class="col-md-5 mt-2 shadow-lg">
          <div class="image">
            <img src="{{  url('asset/galeri/'.$day->gambar) }}" alt="">
            <div class="details">
              <h2>El <span>Tona</span></h2>
              <p style="color:aliceblue;background:#000;">{{ $day->deskripsi }}</p>
              <div class="more">
                <a href="#" class="read-more">{{ $day->created_at }}</span></a>
                <div class="icon-links">
				  <a href="{{ url('/galery/' . $day->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                </div>
              </div>
            </div>
          </div> </div> @endforeach {{ $galeri->links() }}
          <!--image card end-->
       
        <!--image row end-->
      </div>
      <!--image card layout end-->
      </div>
    </body>
  </html>
        

@endsection

@section('foother')

@endsection