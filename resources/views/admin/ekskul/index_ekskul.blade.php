@extends('layouts.admin')

@section('title', 'Data Ekskul')

@section('content')
<div class="container">
  <h1 class="mb-4">Data Ekskul</h1>
  <a href="{{ route('admin.ekskul.create') }}" class="btn btn-primary mb-3">+ Tambah Ekskul</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Ekskul</th>
        <th>Pembina</th>
        <th>Hari</th>
        <th>Jam</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ekskul as $ekskul)
      <tr>
        <td>{{ $ekskul->id }}</td>
        <td>{{ $ekskul->nama_ekskul }}</td>
        <td>{{ $ekskul->pembina }}</td>
        <td>{{ $ekskul->hari }}</td>
        <td>{{ $ekskul->jam }}</td>
        <td>{{ $ekskul->keterangan }}</td>
        <td>

          <a href="{{ route('admin.ekskul.show', $ekskul->id) }}" class="btn btn-info btn-sm">Lihat</a>
          <a href="{{ route('admin.ekskul.edit', $ekskul->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('admin.ekskul.destroy', $ekskul->id) }}" method="POST" class="d-inline"
            onsubmit="return confirm('Apakah kamu yakin ingin menghapus data ekskul ini?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
