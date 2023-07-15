 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body  onload="addScore()">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
<!-- blank col -->
        </div>
        <div class="col-md-6 bg-secondary-subtle border rounded mt-2">
        {!! session('msg') !!}
                        <form action="{{'submitResult'}}" method="post">
                        <h3 class="mt-2">Enter Student Result</h3>
                        @csrf
                        <!-- <div class="form-group mt-3">
                            <label for="studentID" >Student ID:</label>
                            <input type="number" name=""  class="form-control">
                        </div> -->
                    
                        <div class="form-group mt-3">
                            <label for="subject">Subject Name</label>
                            <select name="subject_id" id="subject" class="form-control">
                                @foreach($subject as $subjects)
                                <option value="{{$subjects->id}}">{{ $subjects->subject_name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">@error('subject_id') {{$message}} @enderror</span>
                               
                        </div>
                        <div class="form-group mt-3">
                            <label for="exam">Exam Score:</label>
                            <input type="number" name="exam"  id="exam" class="form-control" onchange="addScore()">
                            <span class="text-danger">@error('exam') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="test">Test</label>
                            <input type="number" name="test" id="test" class="form-control" onchange="addScore()">
                            <span class="text-danger">@error('test') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="test">Total</label>
                            <input type="number" name="total" id="total"   class="form-control" onchange="addScore()" readonly >
                        </div>
                        <div class="form-group mt-3">
                            <label for="grade">Grade</label>
                            <input type="text" name="grade" id="grade"  class="form-control" >
                        </div>
                        <div class="form-group mt-3">
                            <label for="grade">User ID</label>
                            <input type="number" name="user_id" id="user_id"  class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Upload Result</button>
                    </form>
                    </div>
                    <div class="col-md-3">
<!-- blank field -->
        </div>
          </div>
    </div>

    <script>

     function addScore(){
            var test =  document.getElementById("test").value;
            var exam = document.getElementById("exam").value;
            var total = parseFloat(test) + parseFloat(exam);
            document.getElementById("total").value = total;

            if(total >= 100){
                alert('Score can not be greater than 100')
            } if(total >= 70 && total <= 100){
                document.getElementById("grade").value = 'A';
            }
            else if(total >= 60 && total < 69){
                document.getElementById("grade").value = 'B'
            }
            else if(total >= 50 && total < 59){
                document.getElementById("grade").value = 'C'
            }
            else if(total >= 40 && total < 49){
                document.getElementById("grade").value = 'D'
            }
            else if(total >= 0 && total < 39){
                document.getElementById("grade").value = 'F'
            }else if(total <= 0){
                alert('Please enter a value between 1 and 100')
  }
 }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

