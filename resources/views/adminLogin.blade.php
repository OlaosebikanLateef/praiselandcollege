<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        
        <form action="" method="get"> 
          @csrf
              <div>  <label for="email" class="form-label">Email address</label></div>
              <div class="mb-3 input-group">
              <span class="input-group-text">
                  <i class="fa-solid fa-envelope"></i>
                    </span>
                <input type="email"  name="email" class="form-control border-primary" id="email" aria-describedby="emailHelp">
              </div>

              <div>  <label for="password" class="form-label">Password</label> </div>
              <div class="mb-3 input-group">
                <span class="input-group-text">
                        <i class="fa-solid fa-key fa-beat-fade"></i>
                    </span>
                <input type="password" name="password" class="form-control border-primary" id="password">
              </div>

              

              <div class="mb-3 form-check ">
                <input type="checkbox" class="form-check-input border-primary" onclick="showPass()" id="checkbox"> 
                <label class="form-check-label" for="checkbox" >Show Password</label>
              </div>

              <button type="submit" class="btn btn-primary" >
              <i class="fa fa-sign-in" aria-hidden="true"></i>
              Login
              </button> <br><br>

              <a href="{{ route('home')}}">Take me back to homepage   </a>
          </form>
        </div>
        <div class="col-sm-3">

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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