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
                    <input type="text" class="form-control" name="" value="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Karyawan</label>
                <div class="col-sm-10">Gaji Pokok
                    <input type="text" class="form-control" name="" value="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Total Tunjangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="" value="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Gaji Kotor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="" value="">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-cm-2 col-form-label">Gaji Bersih</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="" value="">
                </div>
            </div>

            <div class="d-grid text-end">
                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection