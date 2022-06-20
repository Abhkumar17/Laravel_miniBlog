<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
          <ul class="nav justify-content-center">
            <li class="nav-item active">
              <a class="nav-link text-white" href="{{ url('/dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
              </li>
          </ul>
        </div>
      </nav>
      <section >
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header" style="color: blue">
                          Show Post
                      </div>
                      <div class="card-body">
                          <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Title</th>
                                  <th>Body</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->user->name}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>  
                            </tr>
                              @endforeach
                          </tbody>
                        </table>
                        {{$posts->links()}}  
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
</body>
</html>