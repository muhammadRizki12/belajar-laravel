@extends('components.project')

@section('title', 'Edit posisi')

@extends('components.navbar')

@section('content')
<div class="container border rounded" style="margin-top: 2rem; padding: 2rem;">
  <h3>Edit posisi</h3>
  <form action="/posisi/{{$posisi->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="nama_posisi" class="form-label">Posisi</label>
          <input type="text" name="posisi_name" class="form-control" id="nama_posisi" value={{$posisi->posisi_name}}>
        </div>
      </div>
    </div>


    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    <a href="/posisi" class="btn btn-sm btn-secondary">Kembali</a>
  </form>
</div>
@endsection