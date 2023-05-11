<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
  
   
    
    </div>
    <div class="container">
      <div class="class row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
        <h1>Login Here</h1> <br> 
        
        <form action=" {{  route('submitLogin') }}" method="post"> 
          @csrf
              <div class="mb-3">
              
                <label for="email" class="form-label">Email address</label>
                <input type="email"  name="email" class="form-control border-primary" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label> <br>
                <input type="password" name="password" class="form-control border-primary" id="password">
              </div>

              

              <div class="mb-3 form-check ">
                <input type="checkbox" class="form-check-input border-primary" onclick="showPass()" id="checkbox"> 
                <label class="form-check-label" for="checkbox" >Show Password</label>
              </div>

              <button type="submit" class="btn btn-primary" >Submit</button> <br><br>
              <p>Don't have an account? <a href="{{ route('signup')}}">Sign Up Here</a></p>

              <a href="{{ route('home')}}">Take me back to homepage   </a>
          </form>
        </div>
        <div class="col-sm-3">

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
 
  
  function showPass(){
                var showPass = document.getElementById('password');
                if (showPass.type === "password"){
                    showPass.type = "text";
                } else {
                    showPass.type = "password";
                }
            }
  </script>
  </body>
</html>