<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
  </head>
  <body>

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid " style="background-color: #4d5779;">
          <a class="navbar-brand h1 text-white" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2  mb-lg-0">
             
              <li>
             
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('profile')}}">Profile</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('logout')}}"  aria-current="page">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Nav ends here -->
 <div class="container" >

 
  <div class="container mt-3 mb-3">
     <h5 class="card-text">Good Afternoon, <span>Lateef!</span></h5>
  </div>
 <div class="container alert alert-warning alert-dismissible fade show mt-2" role="alert">   <!-- alert -->
    <h4 class="alert-heading">Welcome!</h4>
     You can now access your dashboard.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>   <!-- alert -->

 
     <div class="row mt-2 text-center">    <!-- card -->
        <div class="col-md-3">
        <div class="card" style="width: 16rem; height:19.5rem">
          <img src="{{ ('image/me.png') }}" class="card-img-top" style="height:15rem" alt="...">
        <div class="card-body">
            <p class="card-text">Welcome, Lateef</p>
        </div>
     </div>
        </div>
       
        <div class="col-md-3 mt-5" >
            <div class="card bg-white shadow-lg">
                <div class="card-body">
                  <h5 class="card-title">Class: SSS3</h5>
                  <p class="card-text">Student ID: 0000</p>
                </div>
              </div>
              <div class="card bg-white shadow-lg mt-5">
                <div class="card-body">
                  <h5 class="card-title">Hostel</h5>
                  <p class="card-text">Block A</p>
                </div>
              </div>
        </div>
        <div class="col-md-3 mt-5">
            <div class="card bg-white shadow-lg">
                <div class="card-body">
                  <h5 class="card-title">Class Teacher</h5>
                  <p class="card-text">Mrs. Olaosebikan</p>
                </div>
              </div>
              <div class="card bg-white shadow-lg mt-5">
                <div class="card-body">
                  <h5 class="card-title">School Fee</h5>
                  <p class="card-text">$1000</p>
                </div>
              </div>
        </div>
        <div class="col-md-3 mt-5">
            <div class="card bg-white shadow-lg">
                <div class="card-body">
                  <h5 class="card-title">Department</h5>
                  <p class="card-text">Science</p>
                </div>
                </div>
                <div class="card bg-white shadow-lg mt-5">
                <div class="card-body">
                  <h5 class="card-title">Results</h5>
                  <button type="button" class="btn btn-secondary "  > <a class="nav-link active text-white" aria-current="page" href="{{ route('result')}}">Check Result</a></button>
                </div>
                </div>
              </div>
      </div>   
</div><!-- card -->
    
      
      
    
     



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>