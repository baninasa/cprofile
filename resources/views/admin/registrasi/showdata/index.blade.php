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
        <h1 class="h2">Show Data</h1>
        <form action="/admin/registrasi">
        <button type="submit" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</button>
        </form>
</div>  
</main>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<div class="col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $User)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $User->name }}</td>
              <td>{{ $User->email }}</td>
              <td>{{ $User->password }}</td>
              
              <td>
              <a href="/admin/registrasi/showdata{{ $User->id }}" class="badge bg-danger" onclick="return confirm('are you sure?')">
              <span data-feather="x-circle"></span>
              </td>
              </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
      <script src="/js/dashboard.js"></script>
  </body>
</html>
