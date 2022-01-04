<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
   .background{
        background-color: #3d85c6;
          background-image: linear-gradient(to top, #3d85c6 ,#bbd6ee ,#bbd6ee, #3d85c6);

    }
  </style>
    </head>
    <body class="background">
<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   <div class=" row ">
                    <h4 class="col-md-10"> <center>Poll Information</center> </h4>

                    <a class="btn btn-success" href="/insertpoll" class="m-l-15"> Create poll </a>
                    <a class="btn btn-danger" href="/logout" class="m-l-15"> Log Out </a>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">


                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Title</th>
                            <th>Answers</th>
                            <th>Status</th>
                            <th>Action</th>

                          </tr>
                        </thead>

						@php
                            $cnt=1
                        @endphp

                        @foreach ($data as $item)

                          <tr>
                            <td>{{$cnt++}}</td>
                            <td>{{$item->PollTitle}}</td>
                            <td> {{$item->options}}</td>
                             <td>

                                    @if ($item->IsActive == "Y")
                                        <a class="btn btn-success" href="status/{{$item->PollId}}">Active</a>
                                    @else
                                        <a class="btn btn-danger" href="status/{{$item->PollId}}">Inactive</a>

                                    @endif

                            </td>
                            <td>

                                <a class="btn btn-primary" href="result/{{$item->PollId}}">Show Result</a>

                            </td>

                          </tr>
                          @endforeach

                        </tbody>
                      </table>



                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </section>

        </body>
        </html>
