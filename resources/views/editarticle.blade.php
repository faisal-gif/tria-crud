@extends('layouts.app')

@section('content')

    <!-- edit data -->
  <form action="/article/update/{{$article->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$article->id}}"></br>
  <div class="form-group">
    <label for="title">Judul</label>
    <input type="text" class="form-control"
    required="required" name="title" value="{{$article->title}}"></br>
  </div>
  <div class="form-group">
    <label for="author">Content</label>
    <input type="text" class="form-control"
    required="required" name="author" value="{{$article->author}}"></br>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control"
    required="required" name="image" value="{{$article->image}}"></br>
  </div>
    <button type="submit" name="edit" class="btn btnprimary float-right">Ubah Data</button>
  </form>

@endsection