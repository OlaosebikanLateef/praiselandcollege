<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
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
              <!-- empty Nav -->
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a href=""></a>
                <a class="nav-link active text-white" aria-current="page" href="{{ route('dashboard')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="#"  aria-current="page">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Nav ends here -->

    
    
        <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table table-bordered table-responsive table-striped table-bordered mt-3">
          <thead class="table-primary">
      
            <tr>
              <th scope="col">Result ID</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Exam Score</th>
              <th scope="col">Test Score</th>
              <th scope="col">Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Lateef</td>
              <td>Olaosebikan</td>
              <td>0</td>
              <td>0</td>
              <td>A</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Lateef</td>
              <td>Olaosebikan</td>
              <td>0</td>
              <td>0</td>
              <td>A</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Lateef</td>
              <td>Olaosebikan</td>
              <td>0</td>
              <td>0</td>
              <td>A</td>
            </tr>
            
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>
  </div>