@extends('components.project')

@section('title', 'Project Karyawan')

@extends('components.navbar')

@section('content')
<div class="container border rounded" style="margin-top: 2rem; padding: 2rem;">
  <a href="/karyawan-add" class="btn btn-primary mb-3">Tambah Data</a>
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Id Posisi</th>
        <th scope="col">Posisi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
        $i = 1;
      @endphp
      @foreach($karyawanList as $karyawan)
      <tr>
        <td>{{$i++}}</td>
        <td>{{$karyawan->karyawan_name}}</td>
        <td>{{$karyawan->alamat}}</td>
        <td>{{$karyawan->id}}</td>
        <td>{{$karyawan->posisis->posisi_name}}</td>
        <td>
          <a href="/karyawan-delete/{{$karyawan->id}}" class="btn btn-sm btn-danger">Hapus</a>
          <a href="/karyawan-edit/{{$karyawan->id}}" class="btn btn-sm btn-warning">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection