@extends('components.project')

@section('title', 'Tambah Karyawan')

@extends('components.navbar')

@section('content')
<div class="container border rounded" style="margin-top: 2rem; padding: 2rem;">
  <h3>Tambah Karyawan</h3>
  <form action="/karyawan" method="post">
    @csrf
    <div class="mb-3">
      <label for="nama_karyawan" class="form-label">Nama</label>
      <input type="text" name="karyawan_name" class="form-control" id="nama_karyawan">
    </div>

    <div class="mb-3">
      <label for="no_telepon" class="form-label">No Telepon</label>
      <input type="tel" name="no_telepon" class="form-control" id="no_telepon">
    </div>

    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="alamat">
    </div>

    <div class="mb-3">
      <label for="status_pernikahan" class="form-label">Status pernikahan</label>
      <select name="status_pernikahan" id="status_pernikahan" class="form-select">
        <option selected>Pilih Status Pernikahan</option>
        <option value="0">Belum Menikah</option>
        <option value="1">Menikah</option>
        <option value="2">Janda</option>
        <option value="3">Duda</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="posisi" class="form-label">posisi</label>
      <select name="posisi_id" id="posisi" class="form-select">
        <option selected>Pilih Posisi</option>
        @foreach($posisiList as $posisi)
        <option value={{$posisi->id}}>{{$posisi->posisi_name}}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection