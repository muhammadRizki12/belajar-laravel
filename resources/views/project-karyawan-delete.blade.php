@extends('components.project')

@section('title', 'Edit Karyawan')

@extends('components.navbar')

@section('content')
<div class="container border rounded text-center" style="margin-top: 2rem; padding: 2rem;">
  <h3>Hapus Karyawan</h3>
  <p>Apa anda yakin ingin menghapus karyawan {{$karyawan->karyawan_name}} ?</p>
  <form action="/karyawan/{{$karyawan->id}}" method="POST"> 
    @csrf
    @method('DELETE') 
    <button class="btn btn-danger" type="submit">Hapus</button>
    <a class="btn btn-primary" href="/karyawan">Kembali</a>
  </form>
</div>
@endsection