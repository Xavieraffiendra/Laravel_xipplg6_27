@extends('layouts.admin')

@section('title', 'Detail Ekskul')

@section('content')
<div class="container-fluid">
  <h1 class="mb-3">Detail Ekskul</h1>

  <div class="card">
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <td>{{ $ekskul->id }}</td>
        </tr>
        <tr>
          <th>Nama Ekskul</th>
          <td>{{ $ekskul->nama_ekskul }}</td>
        </tr>
        <tr>
          <th>Pembina</th>
          <td>{{ $ekskul->pembina }}</td>
        </tr>
        <tr>
          <th>Hari</th>
          <td>{{ $ekskul->hari }}</td>
        </tr>
        <tr>
          <th>Jam</th>
          <td>{{ $ekskul->jam }}</td>
        </tr>
        <tr>
          <th>Keterangan</th>
          <td>{{ $ekskul->keterangan }}</td>
        </tr>
      </table>

      <a href="{{ route('admin.ekskul.index') }}" class="btn btn-secondary">Kembali</a>
      <a href="{{ route('admin.ekskul.edit', $ekskul->id) }}" class="btn btn-warning">Edit</a>
    </div>
  </div>
</div>
@endsection
