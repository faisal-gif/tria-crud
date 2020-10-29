@extends('layouts.app')

@section('content')

<!-- tambah data -->
  <form action="/article/create" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Judul</label>
    <input type="text" class="form-control"
    required="required" name="title"></br>
  </div>
  <div class="form-group">
    <label for="author">Content</label>
    <input type="text" class="form-control"
    required="required" name="author"></br>
  </div>
  <div class="form-group">
    <label for="publication">Publication</label>
    <input type="text" class="form-control"
    required="required" name="publication"></br>
  </div>
  <!--<div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control"
    required="required" name="image"></br>
  </div>-->
    <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
  </form>

  @endsection