<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="row">
<div class="col-3"></div>
<div class="col-6 my-5">
<h2 class="mt-5"><center>Poll Result</center> </h2>

<div class="content poll-result">
	<h2>{{$data["PollTitle"]}}</h2>
    <div class="wrapper">
        @if ($data["votes"] > 0)
            @foreach ($data["data"] as $answer)

            <div class="poll-question">
                <p>{{$answer->Title}}
                <span>{{$answer->Votes}}</span></p>
                <div class="result-bar" style= "background-color: #04AA6D; width:{{@round(($answer->Votes/$data["votes"])*100)}}%">
                    {{@round(($answer->Votes/$data["votes"])*100)}}%
                </div>
            </div>
        @endforeach
        @else
            <h4 class="btn-danger">Poll Not Active </h4>
        @endif


    </div>
    </div>
    <div class="col-3"></div>

    </div>
</div>
</body>
</html>
