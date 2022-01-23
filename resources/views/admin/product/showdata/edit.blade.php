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

    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    
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
            <a class="nav-link {{ Request::is('admin/product/showdata') ? 'active' : '' }}" href="/admin/product/showdata">
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
        <h1 class="h2">Form Edit Product</h1>
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
 <form action="/admin/product/showdata" method="post" enctype="multipart/form-data">
 @csrf
 <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="category" required value="{{ old('category', $Produk->category) }}">
    @error('category')
      <div class="invalid-feedback">
      {{ $message  }}
      </div>
    @enderror
</div>
  
  <div class="mb-3">
  
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" required value="{{ old('title', $Produk->title) }}">
    @error('title')
      <div class="invalid-feedback">
      {{ $message  }}
      </div>
    @enderror

  </div>

  <div class="mb-3">
  <label for="image" class="form-label">Input Image</label>
  <input class="form-control" type="file" id="image" name="image">
    </div>

    <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="hidden" id="description" name="description" value="{{ old('title', $Produk->description) }}">
    <trix-editor input="description"></trix-editor>
    </div>

  <button type="submit" class="btn btn-primary">Update Product</button>
</form>
</div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
      <script src="/js/dashboard.js"></script>
  </body>
</html>