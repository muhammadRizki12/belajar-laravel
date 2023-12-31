@extends('components.project')

@section('title', 'Edit Karyawan')

@extends('components.navbar')

@section('content')
<div class="container border rounded" style="margin-top: 2rem; padding: 2rem;">
  <h3>Edit Karyawan</h3>
  <form action="/karyawan/{{$karyawan->id}}" method="post">
    @csrf
    @method('PUT') 
    <div class="mb-3">
      <label for="nama_karyawan" class="form-label">Nama</label>
      <input type="text" name="karyawan_name" class="form-control" id="nama_karyawan" value={{$karyawan->karyawan_name}}>
    </div>

    <div class="mb-3">
      <label for="no_telepon" class="form-label">No Telepon</label>
      <input type="tel" name="no_telepon" class="form-control" id="no_telepon" value={{$karyawan->no_telepon}}>
    </div>

    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="alamat" value={{$karyawan->alamat}}>
    </div>

    <div class="mb-3">
      <label for="status_pernikahan" class="form-label">Status pernikahan</label>
      <select name="status_pernikahan" id="status_pernikahan" class="form-select">
        <option selected>Pilih Status Pernikahan</option>
        <option value="0" {{ ( $karyawan->status_pernikahan == 0) ? 'selected' : '' }} >Belum Menikah</option>
        <option value="1" {{ ( $karyawan->status_pernikahan == 1) ? 'selected' : '' }}>Menikah</option>
        <option value="2" {{ ( $karyawan->status_pernikahan == 2) ? 'selected' : '' }}>Janda</option>
        <option value="3" {{ ( $karyawan->status_pernikahan == 3) ? 'selected' : '' }}>Duda</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="posisi" class="form-label">posisi</label>
      <select name="posisi_id" id="posisi" class="form-select">
        <option selected>Pilih Posisi</option>
        @foreach($posisiList as $posisi )
        <option value={{$posisi->id}} {{ ( $posisi->id == $karyawan->posisi_id) ? 'selected' : '' }} >{{$posisi->posisi_name}}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    <a href="/karyawan" class="btn btn-sm btn-secondary">Kembali</a>
  </form>
</div>
@endsection