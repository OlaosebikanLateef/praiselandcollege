<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    

  <table class="table">
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
        <td><a href="{{ route('editUsers', $user->id)}}">Edit User</a></td>
        <td><a href="{{ route('deleteUser', $user->id)}}">Delete Users</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>