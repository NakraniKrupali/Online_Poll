<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">
<style>
   .background{
        background-color: #3d85c6;
          background-image: linear-gradient(to top, #3d85c6 ,#bbd6ee ,#bbd6ee, #3d85c6);

    }
  </style>
    </head>
    <body class="background">
<div class="row">
<div class="col-3"></div>
<div class="col-6 my-5">
<h2 class="mt-5"><center>Create Poll</center> </h2>

<form action="{{route('poll')}}" method="post">
@csrf

  <div class="container">
    <label for="title"><b>Title</b></label>
    <input type="text" placeholder="Enter Poll Title" name="title" required>

    <label for="answer"><b>Poll Asnwer1</b></label>
    <input type="text" placeholder="Enter Answer1" name="answer[]" required>

    <label for="answer"><b>Poll Asnwer2</b></label>
    <input type="text" placeholder="Enter Answer2" name="answer[]" required>

    <label for="answer"><b>Poll Asnwer3</b></label>
    <input type="text" placeholder="Enter Answer3" name="answer[]" required>

    <label for="answer"><b>Poll Asnwer4</b></label>
    <input type="text" placeholder="Enter Answer4" name="answer[]" required>

    <!-- <div class=""><button type="submit" name="Login"class="btn col-4 btn-success">Login</button></div>
    <div class=""><button type="reset" name="reset" class="btn col-4 btn-secondary">Reset</button></div> -->
    <center>
    <button  type="submit" name="add" class="btn col-5 mr-5 btn-success">create</button>
    <button type="reset" name="reset" class="btn col-5 btn-secondary">Clear</button>
    </center>

  </div>

  <div class="container text-end" style="background-color:#f1f1f1">
    <span class=""> <a href="/displayallPoll">Back</a></span>
  </div>
</form>
</div>
<div class="col-3"></div>

</div>
</body>
</html>
