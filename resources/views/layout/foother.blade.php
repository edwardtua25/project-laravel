
  <!-- Awal Footer -->
  <div class="black" >
  <hr class="footer">
  <div class="  text-white"style="background-color: black">
    <div class="row mt-3 mb-3">
        <div class="col-md-3">
            <div class="mb-3 text-center text-warning">
                Media Sosial
            </div>
          <div >
            <p><i class="fa-brands fa-instagram-square"></i>&nbsp @el_tiba_coffehouse</p>
            <p><i class="fa-brands fa-facebook-square"></i>&nbsp El Tona Coffehouse Tomok Samosir</p>
            <p><i class="fa-brands fa-whatsapp-square"></i>&nbsp +62 822-7529-0093</p>
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
            
            <div class="card border-dark bg-dark ">
              @auth<input type="text" name="username" placeholder="username.. " value="{{ auth()->user()->name }}">@else <input type="text" name="username" placeholder="name.. ">@endauth<br>
                <textarea cols="30" rows="8" name="subjek" placeholder="feedback......" height="100px";></textarea>
            </div>
            <div class="mt-3">
              @auth
                <button type="submit" class="btn btn-secondary">Send</button>@else  <button  class="btn btn-secondary"><a href="/login" style="text-decoration: none;color:white;">Send</a></button>@endauth
            </div></form>  </div>
  
        <div class="col-md-3">
            <div class="mb-3 text-center text-warning">
                Maps
            </div>
            <div class="card border-white">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.5279533667867!2d98.85320621373579!3d2.657340556722551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031e9ccf050b537%3A0x23a6f63611fcb8b4!2sEl%20Tona%20Coffeehouse!5e0!3m2!1sen!2sid!4v1650477193677!5m2!1sen!2sid"  height="258" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             
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

<div class="foother">
  @yield('foother')
</div>



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