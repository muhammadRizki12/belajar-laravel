@extends('components.project')

@section('title', 'Project Posisi')

@extends('components.navbar')

@section('content')
<div class="container border rounded" style="margin-top: 2rem; padding: 2rem;">
  <a href="/posisi-add" class="btn btn-sm btn-primary mb-3">Tambah Data</a>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Posisi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($posisis as $posisi)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$posisi->posisi_name}}</td>
        <td>
          <form action="/posisi/{{$posisi->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')" >Hapus</button>
          </form>
          <a href="/posisi-edit/{{$posisi->id}}" class="btn btn-sm btn-warning">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection