<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class = "bg-dark text-white">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 bg-dark border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Example 1</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/home" class="btn btn-warning text-white" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">Features</a></li>
        <li class="nav-item"><a href="/review" class="nav-link text-white">Review</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">FAQs</a></li>
        <li class="nav-item"><a href="/about" class="nav-link text-white">About</a></li>
      </ul>
    </header>
<div class="container">
   
    @yield('main_content')

    
 

    <div class="row row-cols-1 row-cols-md-3 mt-3 text-center">
   @yield('tables')
   </div>
   @yield('review')
</div>

</body>
</html>