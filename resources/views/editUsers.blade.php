   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    

    <h1>Login Page</h1>
    <a href="{{route('about')}}">click Here To Go To About US</a>
    <div class="container">
        {!! session('msg') !!}
            <form action="{{ route('updateUser', $data->id)}}" method="post">
                @csrf
                @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" name="firstName" value="{{ $data->firstName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" name="lastName" value="{{ $data->lastName }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"  value="{{ $data->email }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="container">
                <div class="form-check">
                  <div class="col-sm-2"></div>
                  <input type="radio" name="gender" value="{{ $data->gender }}" class="form-check-input" id="gender" >
                  <label for="male" class="form-check-label has-success">Male</label>
                      </div>
               <div class="form-check">
                  <div class="col-sm-2"></div>
                  <input type="radio" name="gender" value="{{ $data->gender }}" class="form-check-input" id="gender" >
                  <label for="male" class="form-check-label has-success">Female</label>
                </div>
            </div>
            
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 