<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Tona CoffeeHouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <style>
        .navbar{
            background-color:  #010101;
;;
        }
        .navbar-nav{
            padding: 20px;
            padding-left: 20px;
        }
        .btn{
            background-color: #464747;
        }
        .dropdown-menu{
          background-color: #ffffff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         <img src="Logo_ElTona.jpeg" style="width:3.5cm;height:2cm;" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="home">Home</a>
              </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item text-white" href="menu-food">Food</a></li>
                  <li><a class="dropdown-item text-white" href="menu-drink">Drink</a></li>
                  <li><a class="dropdown-item text-white" href="menu-cake">Cake</a></li>
                </ul>
              </li>              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

              <li class="nav-item">
                <a class="nav-link text-white" href="artikel">Article</a>
              </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <li class="nav-item">
                <a class="nav-link text-white" href="tentang">About Us</a>
              </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <li class="nav-item">
                <a class="nav-link text-white" href="galery">Gallery</a>
              </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             
              
            </ul>
          </div>@auth
          <li class="nav-item dropdown" style="list-style: none;">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back,{{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item text-dark"><i class="bi bi-box-arrow-left"></i>&nbspLog Out</button> 
                </form>
                </li>            
            </ul>
          </li>

              @else
            <li class="nav-item " style="list-style: none;">
              <a href="/login" class="nav-link text-white"><i class="bi bi-person-circle "></i></li>Login</a>&nbsp&nbsp&nbsp
            </li>    @endauth
        </div>
      </nav>

<div class="contater">
    @yield('navbar')
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="edit1.jpg" class="d-block w-100" >
                <div class="carousel-caption d-none d-md-block">
                  <h3 style="color: white">Welcome To El Tona CoffeeHouse Website</h3>
                  <p style="color:white">Kami melayani anda dengan setulus hati. </p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="1000">
                <img src="edit2.JPG" class="d-block  w-100"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3 style="color:#1c1c1c;display:inline-flex;background-color:rgba(246, 174, 80, 0.537)">Kami menyediakan berbagai macam menu makanan dan minuman kesukaan anda</h3>
                  <p style="color: #1c1c1c;display:inline-flex;background-color:rgba(246, 174, 80, 0.537)">Anda dapat mengunjungi tempat kami secara langsung</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="1000">
                <img src="edit3.jpg" class="d-block  w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h3 style="color: white;background-color:rgba(246, 117, 200, 0.537)")>Selamat Menikmati</h3>
                  <p style="color: white;background-color:rgba(246, 117, 200, 0.537)")>Anda Puas Kami Senang.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

      <div class="container mt-4">
        @yield('container')
      </div>




      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
      
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   
   
  </body>
</html>
