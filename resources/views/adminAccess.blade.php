@extends('layouts.app')
  @section('content')
	<div class="container"> 
     <div class="row ">
		<div class="col-sm-2 mt-5">
			<!-- <img src="{{ asset('image/students.svg') }}" width="100%" alt="">
		<h4 class="mt-5 text-center " style="color:#8E8CB1;">Setting Higher Standard</h4> -->
		</div>

<div class="col-sm-8">
  
  <div class="">
     {!! session('msg') !!}
	<!-- Form Body -->
	<form action="{{'submitSignUp'}}" method="post" class="form-horizontal">
		@csrf
	<div class="form-group has-dark">
			<div class="col-sm-6 has-dark text-center	">
			  <h3 class="center  has-dark">Students Registration Portal</h3>
			</div>
		</div>
		<div class="form-group has-dark">
			<label class="control-label col-sm-3" for="firstName">First Name</label>
			<div class="col-sm-6 ">
				<input class="form-control" type="text" name="firstName" id="firstName" placeholder="Enter Your First Name">
	</div>
		</div>
		<div class="form-group has-dark">
			<label class="control-label col-sm-3" for="lastName">Last Name</label>
			<div class="col-sm-6">
				<input class="form-control" type="text" name="lastName" id="lastName" placeholder="Enter Your Last Name">
	  </div>
		</div>
		<div class="form-group has-dark">
			<label class="control-label col-sm-3" for="email">Email</label>
			<div class="col-sm-6">
				<input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email">
	        </div>
		</div>


        <div class="form-group has-dark">
			<label class="control-label col-sm-3" for="email">Assign Teacher</label>
			<div class="col-sm-6">
	        <select name="teacher" id="">
				<option value="">Mr. Lateef</option>
				<option value="">Mr. Skima</option>
				<option value="">Mrs. Pedro</option>
				<option value="">Mr. Alabi</option>
				<option value="">Mr. Sohunde</option>
				<option value="">Mr. Nero</option>
			</select>
			</div>
		</div>

        <div class="form-group has-dark">
			<label class="control-label col-sm-3" for="hostel">Assign Hostel</label>
			<div class="col-sm-6">
			<select name="hostel" id="">
				<option value="">Hostel A</option>
				<option value="">Hostel B</option>
				<option value="">Hostel C</option>
				<option value="">Hostel D</option>
				<option value="">Hostel E</option>
				<option value="">Hostel F</option>
			</select>
			</div>
		</div>
        <div class="form-group has-dark">
			<label class="control-label col-sm-3" for="class">Assign Class</label>
			<div class="col-sm-6">
			<select name="hostel" id="">
				<option value="">JSS 1</option>
				<option value="">JSS 2</option>
				<option value="">JSS 3</option>
				<option value="">SSS 1</option>
				<option value="">SSS 2</option>
				<option value="">SSS 3</option>
			</select>
	        </div>
		</div>
        <div class="form-group has-dark">
			<label class="control-label col-sm-3" for="date">D.O.B</label>
			<div class="col-sm-6">
				<input class="form-control" type="date" name="dob" id="date" placeholder="Enter Your D.O.B">
	        </div>
		</div>
        <div class="form-group has-dark">
			<label class="control-label col-sm-3" for="image">Upload Passport</label>
			<div class="col-sm-6">
			<button type="submit" name="submit" class="btn btn-dark">
			<input class="form-control" type="file" name="image" id="image" placeholder="Upload Your Passport"></button>
				
	        </div>
		</div>

		<div class="form-group has-dark">
			<label class="control-label col-sm-3" for="password">Password</label>
			<div class="col-sm-6">
				<input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password">
	  </div>
	  </div>
	
		<div class="">
		<div class="form-check">
			<div class="col-sm-3"></div>
			<input type="radio" name="gender" class="form-check-input" id="gender" value="Male">
			<label for="male" class="form-check-label has-success">Male</label>
		</div>
		<div class="form-check">
			<div class="col-sm-3"></div>
			<input type="radio" name="gender" class="form-check-input" id="gender" value="Female">
			<label for="male" class="form-check-label has-success">Female</label>
		</div>
		</div>

		<div class="">
			<div class="col-sm-3"></div>
			<button type="submit" name="submit" class="btn btn-primary">
			<i class="fa fa-user" aria-hidden="true"></i>
			Register</button> 
		</div> <br> <br>
		<div class="">
			<div class="col-sm-3"></div>
			<p>Already have an account?  <a href="{{ route('login')}}">Login</a></p>
		</div>
		<div class="">
			<div class="col-sm-3"></div>
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
@endsection