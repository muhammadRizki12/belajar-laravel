@extends('components.project')

@section('title', 'Tambah posisi')

@extends('components.navbar')

@section('content')
<div class="container border rounded" style="margin-top: 2rem; padding: 2rem;">
  <h3>Tambah posisi</h3>
  <form action="/posisi" method="post">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="nama_posisi" class="form-label">Posisi</label>
          <input type="text" name="posisi_name" class="form-control" id="nama_posisi">
        </div>
      </div>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection