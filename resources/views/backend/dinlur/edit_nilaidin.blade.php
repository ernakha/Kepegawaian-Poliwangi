@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Nilai anggota Dinas Luar</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="tempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control" name="tempat" value="{{$datakeg->tempat}}" disabled>
                    </div>
                </div>
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
                     @foreach ($datanama as $item =>$dinlur)
                        <tr>
                            <td><center>{{$loop->iteration}}</center></td>
                            <td><center>{{$dinlur->user->name}}</center></td>
                            <td><center> {{$dinlur->nilai}}</center>
                            </td>
                            <td>
                                <center>
                                <a href="{{route('nilaidin.tambah', $dinlur->id)}}"><button type="button" class="btn"><i class="btn btn-primary">Beri Nilai!</i></button></a>

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