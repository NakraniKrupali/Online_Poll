<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
<style>
   .background{
        background-color: #3d85c6;
          background-image: linear-gradient(to top, #3d85c6 ,#bbd6ee ,#bbd6ee, #3d85c6);

    }
  </style>
    </head>
    <body class="background">
<div class="row">
<div class="col-4"></div>
<div class="col-4 my-5">
<h2 class="mt-5"><center>Poll</center> </h2>

<form action="{{route('play')}}" method="post">

@csrf
  <div class="container">
  <input type="text" name="pollid" value='{{$data["poll"]->PollId}}' hidden>
    <label for="pollid"><b>{{$data["poll"]->PollTitle}}</b></label>
        <hr>
        @foreach ($data["options"] as $option)
        <input type="radio" id='{{$option->PollAnsId}}' name='Answer' value='{{$option->PollAnsId}}' checked>{{$option->Title}}<br><br>

        @endforeach
       <center>
    <button type="submit" name="poll" class="btn btn-success col-5">Submit</button>
    <button type="button" name="result" class="btn btn-secondary col-5" disable>Result</button>
    </center>
  </div>


</form>
</div>
<div class="col-4"></div>

</div>
</body>
</html>
