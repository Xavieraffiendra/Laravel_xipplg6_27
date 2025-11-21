@extends('layouts.admin')
@section('title', 'Tambah Ekskul')

@section('content')
<div class="container">
  <h1>Tambah Data Ekskul</h1>
  <form action="{{ route('admin.ekskul.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Nama Ekskul</label>
      <input type="text" name="nama_ekskul" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Pembina</label>
      <input type="text" name="pembina" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Hari</label>
      <select name="hari" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>
      </select>
    </div>
    <div class="mb-3">
      <label>Jam</label>
      <input type="text" name="jam" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Keterangan</label>
      <input type="text" name="keterangan" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection
