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
                <a class="nav-link active text-white" aria-current="page" href="{{ route('editUsers',  $data->id)}}">Edit Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" href="{{ route('logout')}}"  aria-current="page">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Nav ends here -->

    
    <div class="container">
        <div class="row"> 
        <div class="col-sm-4">

        </div >
        <div class="col-sm-4">
        <h1 class="mt-5">My Profile</h1>
          <form class="mt-5">
                @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" name="firstName" value="{{ $data->firstName }}" class="form-control" id="exampleInputEmail1"  readonly aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" name="lastName" value="{{ $data->lastName }}" class="form-control" id="exampleInputEmail1"  readonly aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" name="email" value="{{ $data->email }}" class="form-control" id="exampleInputEmail1"  readonly aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gender</label>
                <input type="text" name="gender" value="{{ $data->gender }}" class="form-control" id="exampleInputEmail1"  readonly aria-describedby="emailHelp">
            </div>
           
            </div>
        </form>

        </div>
        <div class="col-sm-4">
          
            
        </div>
    </div> 
    </div>



 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>