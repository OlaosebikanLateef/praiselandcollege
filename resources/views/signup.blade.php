<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
	 <!-- CDN LINK for Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
  <body>
	<div class="container"> 
     <div class="row ">
		<div class="col-sm-6">
			<img src="{{ asset('image/students.svg') }}" width="100%" alt="">
		</div>

		<div class="col-sm-6">
  
  <div class="">
     {!! session('msg') !!}
	<!-- Form Body -->
	<form action="{{'submitSignUp'}}" method="post" class="form-horizontal">
		@csrf
	<div class="form-group has-dark">
			<div class="col-sm-6 has-dark">
			  <h1 class="text-center has-dark">Sign Up</h1>
			</div>
		</div>
		<div class="form-group has-dark">
			<label class="control-label col-sm-2" for="firstName">First Name</label>
			<div class="col-sm-6">
				<input class="form-control" type="text" name="firstName" id="firstName" placeholder="Enter your First Name">
	</div>
		</div>
		<div class="form-group has-dark">
			<label class="control-label col-sm-2" for="lastName">Last Name</label>
			<div class="col-sm-6">
				<input class="form-control" type="text" name="lastName" id="lastName" placeholder="Enter your Last Name">
	  </div>
		</div>
		<div class="form-group has-dark">
			<label class="control-label col-sm-2" for="email">Email</label>
			<div class="col-sm-6">
				<input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email">
	  </div>
		</div>
		<div class="form-group has-dark">
			<label class="control-label col-sm-2" for="password">Password</label>
			<div class="col-sm-6">
				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password">
	  </div>
	  </div>
	  <div class="form-group has-dark">
			<label class="control-label col-sm-2" for="confirmPassword">Confirm Password</label>
			<div class="col-sm-6">
				<input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Your Password">
	  </div>
		</div>
		<div class="">
		<div class="form-check">
			<div class="col-sm-2"></div>
			<input type="radio" name="gender" class="form-check-input" id="gender" value="Male">
			<label for="male" class="form-check-label has-success">Male</label>
		</div>
		<div class="form-check">
			<div class="col-sm-2"></div>
			<input type="radio" name="gender" class="form-check-input" id="gender" value="Female">
			<label for="male" class="form-check-label has-success">Female</label>
		</div>
		</div>

		<div class="">
			<div class="col-sm-2"></div>
			<button type="submit" name="submit" class="btn btn-primary">Register</button> 
		</div> <br> <br>
		<div class="">
			<div class="col-sm-2"></div>
			<p>Already have an account?  <a href="{{ route('login')}}">Login</a></p>
		</div>
		<div class="">
			<div class="col-sm-2"></div>
			<p><a href="{{ route('home')}}">Take me back home</a></p>
		</div>
	</form>
</div>
		</div>
   </div>
   </div>
    

	<!-- Link to JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


	<!-- Link to Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>