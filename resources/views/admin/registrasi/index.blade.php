<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    
  </head>
  <body>
    
@include('admin.layout.header')
    
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/poster') ? 'active' : '' }}" href="/admin/poster">
              <span data-feather="file-text"></span>
              Home
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link {{ Request::is('admin/product') ? 'active' : '' }}" href="/admin/product">
              <span data-feather="file"></span>
              Product
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/registrasi') ? 'active' : '' }}" href="/admin/registrasi">
              <span data-feather="file-text"></span>
              Registrasi
            </a>
          </li>
        </ul>
      </div>
    </nav>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Registrasi</h1>
</div>  
</main>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('success')  }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="col-lg-8">

 <form action="/admin/registrasi" method="post">
 @csrf
 <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
    @error('name')
      <div class="invalid-feedback">
      {{ $message  }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
    @error('email')
      <div class="invalid-feedback">
      {{ $message  }}
      </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password">
     @error('password')
      <div class="invalid-feedback">
      {{ $message  }}
      </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<form action="/admin/registrasi/showdata">
  <button type="submit" class="btn btn-primary">Show Data</button>
</form>
</div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
      <script src="/js/dashboard.js"></script>
  </body>
</html>