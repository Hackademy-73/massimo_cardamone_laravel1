<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AULAB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/teachers">I NOSTRI DOCENTI</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
    

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">I nostri docenti</h1>
         
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
    @foreach($teachers as $teacher)
    <div class="col-12 col-md-3 ">
    <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$teacher["name"]}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">La materia di cui mi occupo è {{$teacher["language"]}}</h6>
    </div>
    </div> 
    </div>
    @endforeach
    </div>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>