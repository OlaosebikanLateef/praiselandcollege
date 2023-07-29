<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  
}

body{
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,14,154,1) 35%, rgba(0,212,255,1) 100%);
    font-family: 'Poppins', sans-serif;

}
form{
    border-radius: 20px;
    margin-top: 90px !important;
    width: 30% !important;
    background-color: white !important;
    padding: 50px;
}

.btn-primary{
    width: 100%;
    border: none;
    border-radius: 50px;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,14,154,1) 35%, rgba(0,212,255,1) 100%);
    
}

.form-control{
    color: rgba(0,0,0,.87);
    border-bottom-color: rgba(0,0,0,.42);
    box-shadow: none !important;
    border: none;
    border-bottom: 1px solid;
    border-radius: 4px 4px 0 0;
    }
 h4{
    font-size: 2rem !important;
    font-weight: 800;
 }  
 .form-label{
    font-weight: 900 !important;
 }

 a{
  text-decoration: none;
  font-weight: bold;
 }

@media only screen and (max-width: 600px) {
    form {
        width: 100% !important;
    }
  }

</style> 
</head>
  <body>
        <div class="container-fluid">
            <form  class="mx-auto" action=" {{ route('submitLogin') }}" method="post">
          @csrf
              <h4 class="text-center">Login Here</h4>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                  <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" >
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input border-primary" onclick="showPass()" id="checkbox"> 
                <label class="form-check-label" for="checkbox" >Show Password</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                  Login
                </button>
                <p class="mt-3">Don't have an account? <a href="{{ route('signup')}}">Sign Up Here</a></p>
              <p> <a href="{{ route('adminLogin')}}">Login as an admin</a></p>
              <p><a href="{{ route('home')}}">Go Home </a></p>
        </form>
        </div>   









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
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