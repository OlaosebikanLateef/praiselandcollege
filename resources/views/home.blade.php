<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1, initial-scale=1.0" />
    <title>University Website Design</title>
    <link rel="stylesheet" href="sch.css" />
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
        * {
    padding: 0;
    margin: 0;
    font-family: "Poppins", sans-serif;
  }
  
  .header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
      url(image/me.png);
    background-position: center;
    background-size: cover;
    position: relative;
  }
  
  nav {
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
  }
  
  nav img {
    width: 150px;
  }
  
  .nav-links {
    flex: 1;
    text-align: right;
  }
  
  .nav-links ul li {
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
  }
  
  .nav-links ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 13px;
  }
  
  .nav-links ul li::after {
    content: "";
    width: 0%;
    height: 2px;
    background: #00d9e0;
    display: block;
    margin: auto;
    transition: 0.5s;
  }
  
  .nav-links ul li:hover::after {
    width: 100%;
  }
  
  .logo-link {
    text-decoration: none;
  }
  
  .logo {
    font-size: 1.6rem;
    font-weight: 600;
    color: #fff;
  }
  
  .text-box {
    width: 70%;
    color: #fff;
    position: absolute;
    top: 52%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  
  .text-box h1 {
    font-size: 58px;
    font-weight: 650;
  }
  
  .text-box p {
    margin: 10px 0 40px;
    font-size: 12px;
    color: #fff;
  }
  
  .hero-btn {
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border-radius: 1px;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 14px;
    border-radius: 8px;
    box-shadow: rgba(12, 12, 12, 0.2) 0px 7px 29px 0px;
    background: transparent;
    position: relative;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
  }
  
  .hero-btn:hover {
    border: 1px solid #0886bc;
    /* background: #f44336; */
    background: #0886bc;
    transition: 0.6s;
  }
  
  nav .fa {
    display: none;
  }
  
  @media (max-width: 700px) {
    .text-box h1 {
      font-size: 20px;
    }
  
    .nav-links ul li {
      display: block;
    }
  
    .nav-links {
      position: absolute;
      background: #f44336;
      height: 100vh;
      width: 200px;
      top: 0;
      right: -300px;
      text-align: left;
      z-index: 2;
      transition: 1s;
    }
  
    nav .fa {
      display: block;
      color: #fff;
      margin: 10px;
      font-size: 22px;
      cursor: pointer;
    }
  
    .nav-links ul {
      padding: 30px;
    }
  }
  
  /*******************course***************************/
  
  .course {
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
    margin-bottom: 3rem;
    margin-top: 1rem;
  }
  
  .course h1 {
    font-size: 36px;
    font-weight: 700;
    color: #222;
  }
  
  p {
    color: rgb(104, 104, 104);
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
  }
  
  .row {
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
  }
  
  .course-col {
    flex-basis: 31%;
    background: #ffe7e7;
    border: 1px solid rgb(137, 137, 137);
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: all 0.3s ease-in-out;
  }
  
  h3 {
    text-align: center;
    font-weight: 600;
    margin: 10px 0;
  }
  
  .course-col:hover {
    box-shadow: 0 0 19px 0px rgba(0, 0, 0, 0.2);
  }
  
  @media (max-width: 700px) {
    .row {
      flex-direction: column;
    }
  }
  
  /************************campus*******************************************/
  
  .campus {
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
    margin-bottom: 2rem;
  }
  
  .campus h1 {
    font-size: 36px;
    font-weight: 700;
    color: #222;
  }
  
  .campus-col {
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
  }
  
  .campus-col img {
    width: 100%;
    display: block;
  }
  
  .layer {
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
  }
  
  .layer:hover {
    /* background: rgba(226, 0, 0, 0.7); */
    background: rgba(0, 102, 136, 0.7);
  }
  
  .layer h3 {
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
  }
  
  .layer:hover h3 {
    bottom: 49%;
    opacity: 1;
  }
  
  /**********************facilities**********************/
  
  .facilities {
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
    margin-bottom: 2rem;
  }
  
  .facilities h1 {
    font-size: 36px;
    font-weight: 700;
    color: #222;
  }
  
  .facilities-col {
    flex-basis: 31%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
  }
  
  .facilities-col img {
    width: 100%;
    border-radius: 10px;
  }
  
  .facilities-col p {
    padding: 0;
  }
  
  .facilities-col h3 {
    margin-top: 16px;
    margin-bottom: 15px;
    text-align: left;
  }
  
  /*********************testimonial*********************/
  
  .testimonial {
    width: 80%;
    margin: auto;
    padding-top: 100px;
    text-align: center;
  }
  
  .testimonial h1 {
    font-size: 36px;
    font-weight: 700;
    color: #222;
  }
  
  .testimonial-col {
    flex-basis: 44%;
    border-radius: 10px;
    margin-bottom: 7%;
    text-align: left;
    background: #ffe7e7;
    padding: 30px;
    cursor: pointer;
    display: flex;
    border: 1px solid rgb(142, 142, 142);
    box-shadow: 0 0 19px 0px rgba(95, 94, 94, 0.2);
  }
  
  .testimonial-col img {
    height: 40px;
    margin-left: 5px;
    margin-right: 20px;
    border-radius: 50%;
  }
  
  .test-p {
    margin-bottom: 4rem;
  }
  
  .testimonial-col p {
    padding: 2px;
    margin-bottom: 1rem;
  }
  
  .testimonial-col h3 {
    /* margin-top: 14px; */
    /* padding-top: 1rem; */
    text-align: center;
    margin-right: 3rem;
  }
  
  @media (max-width: 700px) {
    .testimonial-col img {
      margin-left: 0px;
      margin-right: 15px;
    }
  }
  
  /*****************call to action**********/
  
  .cta {
    margin-top: 5rem;
    margin: 160px auto;
    width: 80%;
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
      url(https://images.unsplash.com/photo-1613662449996-35130a75be10?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80);
    background-position: center;
    background-size: cover;
    border-radius: 10px;
    text-align: center;
    padding: 100px 0;
  }
  
  .cta h1 {
    color: #fff;
    margin-bottom: 40px;
    padding: 0;
  }
  
  @media (max-width: 700px) {
    .cta h1 {
      font-size: 24px;
    }
  }
  
  /***************************footer********************************/
  
  .footer {
    width: 100%;
    text-align: center;
    padding: 30px 0;
  }
  
  .footer p {
    color: #000;
  }
  /* 
  .footer h4 {
    margin-bottom: 25px;
    margin-top: 25px;
    font-weight: 600;
  } */
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
            <li><a href="">ABOUT</a></li>
            <li><a href="{{ route('login')}}">Login</a></li>
            <li> <a href="{{ route('signup')}}">Sign Up</a></li>
            <li><a href="">BLOG</a></li>
            <li><a href="">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="text-box">
        <h1>Computer Science University</h1>
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
          <img
          src="image/me.png"
          />
          <div class="layer">
            <h3>BERLIN</h3>
          </div>
        </div>

        <div class="campus-col">
          <img
            src="image/me.png"
          />
          <div class="layer">
            <h3>PARIS</h3>
          </div>
        </div>

        <div class="campus-col">
          <img
            src="image/me.png"
          />
          <div class="layer">
            <h3>LONDON</h3>
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
          <img
            src="images/https://i.pinimg.com/originals/79/b1/5e/79b15e3c40ee8c36fafa4b8f02ec38f5.png"
          />
          <h3>World Class Library</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum
            dolor sit amet.
          </p>
        </div>

        <div class="facilities-col">
          <img
            src="images/https://i.pinimg.com/originals/79/b1/5e/79b15e3c40ee8c36fafa4b8f02ec38f5.png"
          />
          <h3>Tasty and Healthy Food</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum
            dolor sit amet.
          </p>
        </div>

        <div class="facilities-col">
          <img
            src="images/https://i.pinimg.com/originals/79/b1/5e/79b15e3c40ee8c36fafa4b8f02ec38f5.png"
          />
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
      <h1>What Our Alumni Says</h1>
      <p class="test-p">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </p>

      <div class="testimonial-col flex-col">
        <img src="images/user1.jpg" />
        <div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga harum
            recusandae maiores vitae aperiam, soluta sed voluptatibus quibusdam
            minus nihil blanditiis dolor accusantium voluptas vel. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Itaque sint sed
            consequuntur reprehenderit tempore laborum beatae nostrum fugit.
          </p>
          <h3>Christiana Brown</h3>
        </div>
      </div>

      <div class="testimonial-col">
        <img src="images/user2.jpg" />
        <div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga harum
            recusandae maiores vitae aperiam, soluta sed voluptatibus quibusdam
            minus nihil blanditiis dolor accusantium voluptas vel. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit. Doloribus sequi ad
            repellendus debitis voluptates error aliquam ex officiis.
          </p>
          <h3>John Smith</h3>
        </div>
      </div>
    </section>

    <!-------------------Call to action-------------------------------------->

    <section class="cta">
      <h1>
        Enroll for Our Various Online Courses <br />
        Anywhere From The World
      </h1>
      <a href="" class="hero-btn">CONTACT US</a>
    </section>

    <!------------------------footer---------------------------------->
    <hr />

    <section class="footer">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nemo
        ducimus voluptatem,<br />
        suscipit reiciendis illum ipsa enim.!
      </p>

      <div class="icon">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-linkedin"></i>
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
  </body>
</html>
