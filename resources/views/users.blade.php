<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                <a class="nav-link active text-white" aria-current="page" href="{{ route('resultUpload')}}">Upload Result</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('logout')}}"  aria-current="page">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Nav ends here -->


  <!-- section 1 -->
  <div class="container mt-3 mb-3">
     <h5 class="card-text" id="greetings">, </h5>
  </div>
  <div class="container alert alert-warning alert-dismissible fade show mt-2" role="alert">   <!-- alert -->
      <h4 class="alert-heading">Welcome!</h4>
        You can now access admin dashboard.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    <!--end of section 1  -->
<div class="container">  
  
</div>
<!-- users section -->

  
 
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
        <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    @php 
    $number = 1;
    @endphp
  <tbody>
    @foreach($data as $user)
    <tr>
        <td> {{ $number++ }} </td>
        <td> {{ $user->firstName }} </td>
        <td> {{ $user->lastName }} </td>
        <td> {{ $user->email }} </td>
        <td> {{ $user->gender }} </td>
        <td><a href="{{ route('editUsers', $user->id)}}" class="btn btn-primary">    <i class="fa-regular fa-pen-to-square"></i>   </a> </td>
        <td><a href="{{ route('deleteUser', $user->id)}}" class="btn btn-danger">  <i class="fa-solid fa-trash"></i>  </a></td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
        <!-- col 2 -->
        <div class="col-md-6">
        <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    @php 
    $number = 1;
    @endphp
  <tbody>
    @foreach($data as $user)
    <tr>
        <td> {{ $number++ }} </td>
        <td> {{ $user->firstName }} </td>
        <td> {{ $user->lastName }} </td>
        <td> {{ $user->email }} </td>
        <td> {{ $user->gender }} </td>
        <td><a href="{{ route('editUsers', $user->id)}}" class="btn btn-primary">    <i class="fa-regular fa-pen-to-square"></i>   </a> </td>
        <td><a href="{{ route('deleteUser', $user->id)}}" class="btn btn-danger">  <i class="fa-solid fa-trash"></i>  </a></td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>



<!-- end of users section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>