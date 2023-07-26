@extends('components.project')

@section('title', 'Project Karyawan')

@extends('components.navbar')

@section('content')
  <div class="container border rounded" style="margin-top: 2rem; padding: 2rem;">
    @foreach($karyawanList as $karyawan)
      <p>Nama: {{$karyawan->karyawan_name}}</p>
      <p>Alamat: {{$karyawan->alamat}}</p>
      <p>Id Posisi: {{$karyawan->id}}</p>
      <p>Posisi: {{$karyawan->posisis->posisi_name}}</p>
      <br>
    @endforeach
  </div>
@endsection