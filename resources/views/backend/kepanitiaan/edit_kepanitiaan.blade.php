@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Input Bukti Kepanitiaan</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
        <form method="POST" action="{{ route('bukti.update', $databukti->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" name="kategori" value="{{$databukti->kategori}}" disabled>
                        </div>
                        <div class="col">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$datanama->user->name}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="keterangan" class="form-label">Keterangan File</label>
                            <input type="text" class="form-control" name="keterangan" value="{{$databukti->keterangan}}">
                        </div>
                        <div class="col">
                            <label for="file" class="form-label">Unggah File</label>
                            <input type="file" class="form-control" name="file" value="{{$databukti->file}}">
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