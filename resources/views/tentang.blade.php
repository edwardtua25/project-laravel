
@extends('layout.layouts')

@section('container')

  <!-- Navbar -->
  <div class="container">
     
  <!-- Akhir Navbar -->
   <!-- Jumbotron -->
   <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <a class="navbar-brand text-dark" href="tentang"><strong>About Us</strong></a>
    </div>
  </div>
<!-- Akhir Jumbotron -->

  <!-- Menu -->
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile Card</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
.card{
  font-family: "Candara", sans-serif;
  width: 340px;
  overflow: hidden;
  background: rgb(239, 234, 234);
  border-radius: 10px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.989);
  display: flex;
  flex-direction: column;
}

.card-image img{
  width: 100%;
  height: 160px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  object-fit: cover;
}

.profile-image img{
  z-index: 1;
  width: 120px;
  height: 120px;
  position: relative;
  margin-top: -75px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 100px;
  border: 10px solid #fff;
  transition-duration: 0.4s;
  transition-property: transform;
}

.profile-image img:hover{
  transform: scale(1.1);
}

.card-content h3{
  font-size: 25px;
  text-align: center;
  margin: 0;
}

.card-content p{
  font-size: 16px;
  text-align: justify;
  padding: 0 20px 5px 20px;
}

.icons{
  text-align: center;
  padding-top: 5px;
  padding-bottom: 30px;
}

.icons a{
  text-decoration: none;
  font-size: 20px;
  color: #0ABDE3;
  padding: 0 14px;
  transition-duration: 0.4s;
  transition-property: transform;
}

.icons a:hover{
  color: #000;
  transform: scale(1.5);
}
      
    </style>
  </head>
  <body style="background-color: #fff">
    CEO
    <hr>
    <div class="row mt-3">
      <div class="col-md-4 mt-3">
      <div class="card">
        <div class="card-image">
          <img src="edit1.jpg" alt="">
        </div>
        <div class="profile-image">
          <img src="el.jpg" alt="">
        </div>
        <div class="card-content">
          <h3>Hartoba Sidabutar</h3>
          <span><h5 style="text-decoration:black;text-align:center;">(FOUNDER)</h5></span>
          <p>Bapak Hartoba adalah pendiri El Tona CoffeeHouse pada tahun 10 Juni 2018 yang belokasi di Jl. Pulau Samosir, Ambarita, Simanindo, Kabupaten Samosir, Sumatera Utara 22395</p>
        </div>
        <div class="icons">
          <a href="https://instagram.com/el_tona_coffeehouse?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
          <a href="https://api.whatsapp.com/send?phone=6282275290093" class="fab fa-whatsapp"></a>
        </div>
      </div>
      </div>
    </div>
      <BR></BR>
<span>DEVEOPMENT</span>
<HR></HR>
    <!--Profile card start-->
    <div class="container">
    <div class="row mt-3">
    <div class="col-md-4 mt-3">
    <div class="card">
      <div class="card-image">
        <img src="edit1.jpg" alt="">
      </div>
      <div class="profile-image">
        <img src="about/Edward.png" alt="">
      </div>
      <div class="card-content">
        <h3>Edward Tua Panjaitan</h3>
        <span><h5 style="text-decoration:black;text-align:center;">(Project Manager)</h5></span>
        <p>Mahasiswa Institut Teknologi Del, dengan jurusan D4 Tekonologi Rekayasa Perangkat Lunak</p>
      </div>
      <div class="icons">
       
        <a href="https://www.instagram.com/edward_tua.p" class="fab fa-instagram"></a> 
        <a href="https://api.whatsapp.com/send?phone=6282264821633" class="fab fa-whatsapp"></a>
      </div>
    </div>
    </div>
    <div class="col-md-4 mt-3">
    <div class="card">
      <div class="card-image">
        <img src="edit1.jpg" alt ="">
      </div>
      <div class="profile-image">
        <img src="about/Sopranita.png" alt="">
      </div>
      <div class="card-content">
        <h3>Sopranita Panjaitan</h3>
        <span><h5 style="text-decoration:black;text-align:center;">(DESIGN)</h5></span>
        <p>Mahasiswa Institut Teknologi Del, dengan jurusan D4 Tekonologi Rekayasa Perangkat Lunak</p>
      </div>
      <div class="icons">
        <a href="https://instagram.com/sopranitapandj_?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
        <a href="https://api.whatsapp.com/send?phone=6281264299264" class="fab fa-whatsapp"></a>
      </div>
    </div>
    </div>
    <div class="col-md-4 mt-3">
      <div class="card">
        <div class="card-image">
          <img src="edit1.jpg" alt="">
        </div>
        <div class="profile-image">
          <img src="about/Rusdeni.png" alt="">
        </div>
        <div class="card-content">
          <h3>Rusdeni Harianja</h3>
          <span><h5 style="text-decoration:black;text-align:center;">(ANALIS)</h5></span>
          <p>Mahasiswa Institut Teknologi Del, dengan jurusan D4 Tekonologi Rekayasa Perangkat Lunak</p>
        </div>
        <div class="icons">
          <a href="https://instagram.com/rusdeniharianja?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
          <a href="https://api.whatsapp.com/send?phone=6281265117697" class="fab fa-whatsapp"></a>
        </div>
      </div>
      </div>
    </div>
    
    <div class="row mt-3">
      <div class="col-md-4 mt-3">
      <div class="card">
        <div class="card-image">
          <img src="edit1.jpg" alt="">
        </div>
        <div class="profile-image">
          <img src="about/dwi.png" alt="">
        </div>
        <div class="card-content">
          <h3>Dwi Abelliva</h3>
          <span><h5 style="text-decoration:black;text-align:center;">(ANALIS)</h5></span>
          <p>Mahasiswa Institut Teknologi Del, dengan jurusan D4 Tekonologi Rekayasa Perangkat Lunak</p>
        </div>
        <div class="icons">
          <a href="https://instagram.com/abellivakamny?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
          <a href="#https://api.whatsapp.com/send?phone=6285371167144" class="fab fa-whatsapp"></a>
        </div>
      </div>
      </div>
      <div class="col-md-4 mt-3">
      <div class="card">
        <div class="card-image">
          <img src="edit1.jpg" alt="">
        </div>
        <div class="profile-image">
          <img src="about/Yudi.png" alt="">
        </div>
        <div class="card-content">
          <h3>Yudi Frandianto</h3>
          <span><h5 style="text-decoration:black;text-align:center;">(TESTER)</h5></span>
          <p>Mahasiswa Institut Teknologi Del, dengan jurusan D4 Tekonologi Rekayasa Perangkat Lunak</p>
        </div>
        <div class="icons">
          <a href="#" class="fab fa-instagram"></a>
          <a href="https://api.whatsapp.com/send?phone=6282160713677" class="fab fa-whatsapp"></a>
        </div>
      </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card">
          <div class="card-image">
            <img src="edit1.jpg" alt="">
          </div>
          <div class="profile-image">
            <img src="about/Atalya.png" alt="">
          </div>
          <div class="card-content">
            <h3>Atalya Saragih</h3>
            <span><h5 style="text-decoration:black;text-align:center;">(DESIGN)</h5></span>
            <p>Mahasiswa Institut Teknologi Del, dengan jurusan D4 Tekonologi Rekayasa Perangkat Lunak</p>
          </div>
          <div class="icons">
            <a href="https://www.instagram.com/atalya_rs10" class="fab fa-instagram"></a>
            <a href="https://api.whatsapp.com/send?phone=6282267395933" class="fab fa-whatsapp"></a>
          </div>
        </div>
        </div>
      </div>
      
    <div class="row mt-3">
      <div class="col-md-4 mt-3">
      <div class="card">
        <div class="card-image">
          <img src="edit1.jpg" alt="">
        </div>
        <div class="profile-image">
          <img src="about/7.png" alt="">
        </div>
        <div class="card-content">
          <h3>Bastian Aruan</h3>
          <span><h5 style="text-decoration:black;text-align:center;">(PROGRAMMER)</h5></span>
          <p>Mahasiswa Institut Teknologi Del, dengan jurusan D4 Tekonologi Rekayasa Perangkat Lunak</p>
        </div>
        <div class="icons">
          <a href="https://www.instagram.com/p/BpcPfgFlY6e/?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
          <a href="https://api.whatsapp.com/send?phone=6282267041517" class="fab fa-whatsapp"></a>
        </div>
      </div>
      </div>
    
      </div>
    </div>
    <!--Profile card end-->

  </body>
</html>
      
   </div>
  <!-- Akhir Menu -->


  <hr class="footer">
  <div class=" text-white" style="background-color: black;">
    <div class="row mt-3 mb-3">
        <div class="col-md-3">
            <div class="mb-3 text-center text-warning">
                Media Sosial
            </div>
          <div style="padding-left:5px;">
            <p><i class="bi bi-instagram woo zoomIn"></i>&nbsp @el_tiba_coffehouse</p>
            <p><i class="bi bi-facebook"></i>&nbsp El Tona Coffehouse Tomok Samosir</p>
            <p><i class="bi bi-telegram"></i>&nbsp +62 822-7529-0093</p>
          </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3 text-center text-warning">
                Open Hours
            </div>
          <div class="float-left">
              
              <table>
                <tr>
                  <td style="color: white">Monday</td>
                  <td style="color: white">&nbsp 09:00 - 24:00</td>
                </tr>
                <tr>
                  <td style="color:white">Tuesday</td>
                  <td style="color: white">&nbsp 09:00 - 24:00</td>
                </tr>
                <tr>
                  <td style="color: white">Wednesday</td>
                  <td style="color: white">&nbsp 09:00 - 24:00</td>
                </tr>
                <tr>
                  <td style="color: white">Thursday</td>
                  <td style="color: white">&nbsp 09:00 - 24:00</td>
                </tr>
                <tr>
                  <td style="color: white">Friday</td>
                  <td style="color: white">&nbsp 09:00 - 24:00</td>
                </tr>
                <tr>
                  <td style="color: white">Saturday</td>
                  <td style="color: white">&nbsp 09:00 - 24:00</td>
                </tr>
                <tr>
                  <td style="color: white">Sunday</td>
                  <td style="color: white">&nbsp 09:00 - 24:00</td>
                </tr>
               
                
              </table>
          </div>
        </div>
        <div class="col-md-3">
          <form action="{{ route('feedback.store') }}" method="post" style="border: none">
            @csrf
            <div class="mb-3 text-center text-warning">
                Feedback
            </div>
            
            <div class="card border-dark bg-dark " style="width:250px">
              <input type="text" name="username" placeholder="username.."><br>
                <textarea cols="30" rows="8" name="subjek" placeholder="feedback......" height="100px";></textarea>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-secondary">Send</button>
            </div></form>
        </div>

        <div class="col-md-3">
            <div class="mb-3 text-center text-warning">
                Maps
            </div>
            <div class="card border-white" style="width:250px">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.5279533667867!2d98.85320621373579!3d2.657340556722551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031e9ccf050b537%3A0x23a6f63611fcb8b4!2sEl%20Tona%20Coffeehouse!5e0!3m2!1sen!2sid!4v1650477193677!5m2!1sen!2sid" width="258" height="258" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             
            </div>
        </div>
  </div>
  <hr>
    <div class="footer-body">
          <center>
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2022 -  El Tona CoffeeHouse</p>
          </center><br>
    </div>
  </div>

<!-- Akhir Footer -->


 @endsection 


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>
