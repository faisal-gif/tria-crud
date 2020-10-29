 @extends('layouts.app')

@section('content')
  <!-- tampilan data artikel -->
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Action</th>
      </tr>
    </thead>
  <tbody>
    @foreach($article as $a)
      <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->title}}</td>
        <td>{{$a->created_at}}</td>
        <!-- edit data -->
        <td> <a href="article/edit/{{ $a->id }}" class="badge badgewarning">Edit</a>
        <!-- hapus data -->
        <a href="article/delete/{{ $a->id }}" class="badge badgedanger">Hapus</a> </td>
      </tr>
    @endforeach
    </tbody>
  </table>
<!-- tambah data -->
<a href="article/add" class="btn btn-primary">Tambah Data</a>

@endsection