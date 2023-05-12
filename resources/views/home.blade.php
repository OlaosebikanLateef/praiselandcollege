<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1, initial-scale=1.0" />
    <title>Praiseland College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css"
    />
    <style>
       .header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
      url(image/schoolbig.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
  }
    </style>
  </head>
  <body>
    <section class="header">
      <nav>
        <a class="logo-link" href="index.html"><p class="logo">LOGO</p></a>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="#aboutUs">ABOUT</a></li>
            <li><a href="{{ route('login')}}">Login</a></li>
            <li> <a href="{{ route('signup')}}">Sign Up</a></li>
            <li><a href="">BLOG</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="text-box">
        <h1>Praiseland College</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
          repellendus at vero ducimus voluptate explicabo. <br />
          Lorem ipsum dolor sit amet.
        </p>
        <a href="" class="hero-btn">Learn More</a>
      </div>
    </section>

    <!------------------------Course-------------------------------------------->

    <section class="course">
      <h1>OUR COURSES</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="course-col">
          <h3>Intermediate</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum
            maxime tempora vitae, suscipit molestias, iusto ad recusandae
            consequatur eos cumque sint nisi libero expedita deserunt.
          </p>
        </div>

        <div class="course-col">
          <h3>Bachelors</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum
            maxime tempora vitae, suscipit molestias, iusto ad recusandae
            consequatur eos cumque sint nisi libero expedita deserunt.
          </p>
        </div>

        <div class="course-col">
          <h3>Post Graduation</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum
            maxime tempora vitae, suscipit molestias, iusto ad recusandae
            consequatur eos cumque sint nisi libero expedita deserunt.
          </p>
        </div>
      </div>
    </section>

    <!----------------------Campus----------------------------->

    <section class="campus">
      <h1>OUR INTERNATIONAL CAMPUSES</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="campus-col">
            <img src="{{ asset('image/facility1.jpg') }}" style="width: 100%; height:20rem" alt="">
          <div class="layer">
            <h3>OTTA</h3>
          </div>
        </div>

        <div class="campus-col">
        <img src="{{ asset('image/facility1.jpg') }}" style="width: 100%; height:20rem" alt="">
          <div class="layer">
            <h3>IJOKO</h3>
          </div>
        </div>

        <div class="campus-col">
        <img src="{{ asset('image/facility1.jpg') }}" style="width: 100%; height:20rem" alt="">
          <div class="layer">
            <h3>SANGO</h3>
          </div>
        </div>
      </div>
    </section>

    <!---------------facilites---------------------------------------->

    <section class="facilities">
      <h1>Our Facilities</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="facilities-col">
        <img src="{{ asset('image/library.jpg') }}" style="width: 100%; height:20rem" alt="" class="rounded">
          <h3>World Class Library</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum
            dolor sit amet.
          </p>
        </div>

        <div class="facilities-col">
        <img src="{{ asset('image/laboratory.jpg') }}" style="width: 100%; height:20rem" alt="" class="rounded">
          <h3>State of the art laboratory</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum
            dolor sit amet.
          </p>
        </div>

        <div class="facilities-col">
        <img src="{{ asset('image/stad.jpg') }}" style="width: 100%; height:20rem" alt="" class="rounded">
          <h3>Largest Play Ground</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum
            dolor sit amet.
          </p>
        </div>
      </div>
    </section>

    <!-----------------------------testimonial-------------------------------------->

    <section class="testimonial">
      <!-- <h1>What Our Alumni Says</h1>
      <p class="test-p">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </p>

      <div class="testimonial-col flex-col">
      <img src="{{ asset('image/me3.jpg') }}" style="width: 50%; height:30rem" alt="">
        <div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga harum
            recusandae maiores vitae aperiam, soluta sed voluptatibus quibusdam
            minus nihil blanditiis dolor accusantium voluptas vel. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Itaque sint sed
            consequuntur reprehenderit tempore laborum beatae nostrum fugit.
          </p>
          <h3>Lateef Olaosebikan</h3>
        </div>
      </div>

      <div class="testimonial-col">
      <img src="{{ asset('image/me.png') }}" style="width: 50%; height:30rem" alt="">
        <div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga harum
            recusandae maiores vitae aperiam, soluta sed voluptatibus quibusdam
            minus nihil blanditiis dolor accusantium voluptas vel. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Doloribus sequi ad
            repellendus debitis voluptates error aliquam ex officiis.
          </p>
          <h3>Lateef Olaosebikan</h3>
        </div>
      </div> -->

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active ">
    <img src="{{ asset('image/facility1.jpg') }}" style="width: 100%; height:30rem" alt="" class="rounded shadow">
      <div class="carousel-caption d-none d-md-block">
        <p style="color:#000">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga harum
            recusandae maiores vitae aperiam, soluta sed voluptatibus quibusdam
            minus nihil blanditiis dolor accusantium voluptas vel. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Doloribus sequi ad
            repellendus debitis voluptates error aliquam ex officiis.
          </p>
          <h3 style="color:#000">Lateef Olaosebikan</h3>
      </div>
    </div>
    <div class="carousel-item">
    <img src="{{ asset('image/facility1.jpg') }}" style="width: 100%; height:30rem" alt="" class="rounded shadow">
      <div class="carousel-caption d-none d-md-block">
      <p style="color:#000">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga harum
            recusandae maiores vitae aperiam, soluta sed voluptatibus quibusdam
            minus nihil blanditiis dolor accusantium voluptas vel. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Doloribus sequi ad
            repellendus debitis voluptates error aliquam ex officiis.
          </p>
          <h3 style="color:#000">Lateef Olaosebikan</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('image/facility1.jpg') }}" style="width:100%; height:30rem" alt="" class="rounded shadow">
      <div class="carousel-caption d-none d-md-block">
          <p style="color:#000">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga harum
            recusandae maiores vitae aperiam, soluta sed voluptatibus quibusdam
            minus nihil blanditiis dolor accusantium voluptas vel. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Doloribus sequi ad
            repellendus debitis voluptates error aliquam ex officiis.
          </p>
          <h3 style="color:#000">Lateef Olaosebikan</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>


   <!-------------------About Us------------------------------------->
   <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-7" id="aboutUs">
          <h1 class="text-center">About Us</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum natus, recusandae, itaque vero minus 
          quaerat aliquam nulla earum quod laudantium voluptatum amet vel dolore, similique tempore iure! Quis, velit?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum natus, recusandae, itaque vero minus 
          quaerat aliquam nulla earum quod laudantium voluptatum amet vel dolore, similique tempore iure! Quis, velit?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum natus, recusandae, itaque vero minus 
          quaerat aliquam nulla earum quod laudantium voluptatum amet vel dolore, similique tempore iure! Quis, velit?
        </p>
      </div>
      <div class="col-sm-2">

      </div>
      </div>
    </div>
   </section>

    <!-------------------Call to action-------------------------------------->

    <section class="cta">
      <h1>
        Enroll your wards/children today <br />
        For a path to set higher standard
      </h1>
      <a href="#contact" class="hero-btn">CONTACT US</a>
    </section>

    <!------------------------footer---------------------------------->

    <!-- contact section -->
<section>
  <section  class="bg-white py-5" id="mywork">
    <div class="container-lg py-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 btn-dark">
          <div class="section-title text-center ">
            <h2 id="contact">Contact Us</h2>
          </div>
        </div>
      </div>
    <div class="row mt-4">
      <div class="col-md-6">
        <div>
          <i class="fa-solid fa-1x text-dark fa-envelope mb-3"></i> Email
          <p class="ms-4">laolaosebikan@gmail.com</p>
       </div>
       <div>
        <i class="fa-solid fa-1x text-dark fa-phone mb-3"></i> Phone
        <p class="ms-4">08130195938</p>
     </div>
     <div>
      <i class="fa-solid fa-1x text-dark fa-location-dot mb-3"></i> Visit Office
      <p class="ms-4">Mushin, Lagos</p>
   </div>
      </div>
      <div class="col-md-6">
        <form action="form-action shadow-lg" method="post">
          <div class="row ">
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
              </div>
              <div class="col-md-6 mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Subject" id="Subject">
            </div>
            <div class="mb-3">
              <textarea class="form-control" placeholder="Message" id="textarea" style="height: 100px"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
          </div>
      </div>
    </div>
    </div>
</section>
<!-- contact section -->
    <hr />

    <section class="footer">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nemo
        ducimus voluptatem,<br />
        suscipit reiciendis illum ipsa enim.!
      </p>

      <div class="icon">
       <i class="fa-brands fa-facebook"></i>
       <i class="fa-brands fa-square-instagram"></i>
       <i class="fa-brands fa-square-twitter"></i>
       <i class="fa-brands fa-linkedin"></i>
      </div>

      <p>Made by @dev_lateef</p>
    </section>

    <!-----------------------JavaScript Toggle Menu---------------------------------->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }

      function hideMenu() {
        navLinks.style.right = "-300px";
      }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
