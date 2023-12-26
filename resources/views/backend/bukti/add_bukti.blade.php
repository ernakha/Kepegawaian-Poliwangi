@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Input Bukti</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('bukti.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kegiatan" class="form-label">Kegiatan</label>
                            <input type="text" class="form-control" name="kegiatan">
                        </div>
                        <div class="col">
                            <label for="nafile" class="form-label">Nama File</label>
                            <input type="text" class="form-control" name="text">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="keterangan" class="form-label">Keterangan File</label>
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                        <div class="col">
                            <label for="file" class="form-label">Unggah File</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button onclick="history.back()" type="button" class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
</div>
@endsection