@extends('layouts.app')

@section('content')

  <!-- Page Content -->
  <div class="container">
    @yield('content')
    
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Selamat Datang
          <small>Pada Halaman About</small>
        </h1>

        <!- - Blog Post -->
        @foreach ($about as $item)

        <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
        {{-- <div class="col-md-4">
          {{-- <img src="..." class="card-img" alt="..."> --}}
        {{-- </div>  --}}
        <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">{{$item -> nama}}</h5>
        <p class="card-text">{{$item -> isi}}</p>
        <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
        </div>
        </div>      
        </div>
        </div>

        @endforeach
        
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Previous</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Next &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">PHP</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Keterangan</h5>
          <div class="card-body">
            Pemrograman web lanjut menggunakan laravel dan menggunakan template dari bootstrap
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@section('content')

@endsection