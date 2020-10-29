@extends('layouts.app')

@section('content')
  <!-- Page Content -->
  <div class="container">
    @yield('content')
    
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Selamat Datang
          <small>Pada Halaman Home</small>
        </h1>

        <!-- Blog Post -->
        @foreach ($article as $p)
        <div class="card mb-4">
          <img class="card-img-top" src="{{$p->image}}" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{$p->title}}</h2>
            <p class="card-text">{{$p->author}}</p>
            <p class="card-text">{{$p -> publication}}</p>
            <a href="article/{{$p->id}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
           <p> Posted {{$p->created_at}}</p> by
            <a href="#">Siti Amalia Fitriani</a>
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
          <h5 class="card-header">Keteangan</h5>
          <div class="card-body">
              Pemrograman web lanjut menggunakan laravel dan menggunakan template dari bootstrap
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
@section('content')

@endsection