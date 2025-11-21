@extends('layouts.admin')
@section('title', 'Edit Data Ekskul')
@section('content')
<div class="container-fluid">
  <h2>Edit Data Ekskul</h2>
  <form action="{{ route('admin.ekskul.update', $ekskul->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
      <label>Nama Ekskul</label>
      <input type="text" name="nama_ekskul" value="{{ $ekskul->nama_ekskul }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
      <label>Pembina</label>
      <input type="text" name="pembina" value="{{ $ekskul->pembina }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
      <label>Hari</label>
      <select name="hari" class="form-control" required>
        <option value="Senin" {{ $ekskul->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
        <option value="Selasa" {{ $ekskul->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
        <option value="Rabu" {{ $ekskul->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
        <option value="Kamis" {{ $ekskul->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
        <option value="Jumat" {{ $ekskul->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
      </select>
    </div>
    <div class="form-group mb-3">
      <label>Jam</label>
      <input type="text" name="jam" value="{{ $ekskul->jam }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
      <label>JKeteranganam</label>
      <input type="text" name="keterangan" value="{{ $ekskul->keterangan }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.ekskul.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
