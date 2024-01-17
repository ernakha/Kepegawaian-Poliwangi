@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Nilai anggota Kepanitiaan</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" name="kategori" value="{{$datakeg->kategori}}" disabled>
                    </div>
                    <div class="col">
                        <label for="terima" class="form-label">Tanggal Terima Tugas</label>
                        <input type="date" class="form-control" name="terima" value="{{$datakeg->terima}}" disabled>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="mulai" class="form-label">Tanggal Mulai Tugas</label>
                        <input type="date" class="form-control" name="mulai" value="{{$datakeg->mulai}}" disabled>
                    </div>
                    <div class="col">
                        <label for="selesai" class="form-label">Tanggal Selesai Tugas</label>
                        <input type="date" class="form-control" name="selesai" value="{{$datakeg->selesai}}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Anggota Tugas</center></th>
                            <th><center>Nilai</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($datanama as $item =>$kepanitiaan)
                        <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                            <td><center>{{$kepanitiaan->user->name}}</center></td>
                            <td><center> {{$kepanitiaan->nilai}}</center>
                            </td>
                            <td>
                                <center>
                                <a href="{{route('nilai.tambah', $kepanitiaan->id)}}"><button type="button" class="btn"><i class="btn btn-primary">Beri Nilai!</i></button></a>

                                </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection