@extends('layout.main')

@section('content')
    <div>
        <h4 class="mb-3">Data Jabatan</h4>
        <a href="/Jabatan/create" class="btn btn-info btn-md p-2 mb-3">Tambah Data</a>
    </div>
    <div class="col-12 pd-1">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Karyawan</th>
          <th scope="col">Jumlah Lembur</th>
          <th scope="col">Pajak</th>
          <th scope="col">Total Tunjangan</th>
          <th scope="col">Gaji Bersih</th>
          <th scope="col">Gaji Kotor</th>
          <th scope="col">Bulan</th>
          <th scope="col">Tahun</th>
          <th scope="col">ID Karyawan</th>
          <th scope="col" class="text-center">Action</th>
        </tr>
      </thead>
    
      <tbody>
      @foreach ($gaji as $g)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $g->karyawan }}</td>
            <td>{{ $g->jumlah_lembur }}</td>
            <td>{{ $g->pajak }}</td>
            <td>{{ $g->total_tunjangan }}</td>
            <td>{{ $g->gaji_bersih }}</td>
            <td>{{ $g->gaji_kotor }}</td>
            <td>{{ $g->bulan }}</td>
            <td>{{ $g->tahun }}</td>
            <td>{{ $g->id_karyawan }}</td>
    
            <td>
              <a href="/gaji/edit/{{ $g->id }}" class="btn btn-warning">Edit</a>
              <a href="/gaji/destroy/{{ $g->id }}" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
          </td>
        </tr>
        @endforeach
      </tbody>
</table>
    </div>
@endsection