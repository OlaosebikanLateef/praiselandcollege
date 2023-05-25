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
                        <form action="submitResult" method="post">

                        <h1 class="mt-2">Enter Student Result</h1>
                        <div class="form-group mt-3">
                            <label for="studentID" >Student ID:</label>
                            <input type="number" name=""  class="form-control">
                        </div>
                    
                        <div class="form-group mt-3">
                            <label for="subject">Subject Name</label>
                            <select name="subject" id="subject" class="form-control">
                                <option value="Mathematics">Mathematics</option>
                                <option value="english">English</option>
                                <option value="civic">civic</option>
                                <option value="biology">Biology</option>
                                <option value="chemistry">Chemistry</option>
                                <option value="economics">Economics</option>
                                <option value="commerce">Commerce</option>
                                <option value="literature">Literature</option>
                                <option value="crs">CRS</option>
                                <option value="irs">IRS</option>
                                <option value="computer">Computer Science</option>
                                <option value="agriculture">Agricultural Science</option>
                                <option value="government">Government</option>
                                <option value="accounting">Accounting</option>
                                <option value="yoruba">Yoruba</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exam">Exam Score:</label>
                            <input type="number" name="exam"  id="exam" class="form-control" onchange="addScore()">
                        </div>
                        <div class="form-group mt-3">
                            <label for="test">Test</label>
                            <input type="number" name="test" id="test" class="form-control" onchange="addScore()">
                        </div>
                        <div class="form-group mt-3">
                            <label for="test">Total</label>
                            <input type="number" name="total" id="total"   class="form-control" onchange="addScore()" readonly >
                        </div>
                        <div class="form-group mt-3">
                            <label for="grade">Grade</label>
                            <input type="text" name="grade" id="grade"  class="form-control" readonly>
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

