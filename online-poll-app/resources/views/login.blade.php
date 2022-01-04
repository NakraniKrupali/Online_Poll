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
<div class="col-4"></div>
<div class="col-4 my-5">
<h2 class="mt-5"><center>Login</center> </h2>

<form action="{{route('login')}}" method="post">
    @csrf
  <div class="text-center my-2   ">
    <img src="/login.png" alt="Avatar"  width= 40%; class="rounded-circle">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="Login" class="btn btn-success col-12">Login</button>

  </div>

  <div class="container text-end" style="background-color:#f1f1f1">
    <span class="">Are You End User? <a href="/playPoll">Enjoy Poll</a></span>
  </div>
</form>
</div>
<div class="col-4"></div>

</div>
</body>
</html>
