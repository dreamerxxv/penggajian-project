@extends('layout.main')

@section('content')
<div class="col-12 ps-4">
    <h4>Tambah Data Gaji</h4>
    <a href="/Gaji/index" class="btn btn-danger btn-md p-2 mb-3">Kembali</a>
</div>

<div class="col-12 ps-4">
    <div class="col12 bg-light p-2 rounded-3 shadow-sm">
        <form action="" method="post">
            @csrf

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Bulan</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Karyawan</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Staff IT</option>
                        <option>Manager</option>
                        <option>Sales</option>
                        <option>Keamanan</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Total Tunjangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Gaji Kotor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Gaji Bersih</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="d-grid text-end">
                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection