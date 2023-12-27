@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Kepanitiaan</h1>
            </div>
            <div class="co text-end mb-2">
                <a href="{{route('kepanitiaan.add')}}"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori Tugas</th>
                            <th>Tanggal Terima</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Selesai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item =>$kepanitiaan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$kepanitiaan->kepanitiaans->kategori}}</td>
                            <td>{{$kepanitiaan->kepanitiaans->terima}}</td>
                            <td>{{$kepanitiaan->kepanitiaans->mulai}}</td>
                            <td>{{$kepanitiaan->kepanitiaans->selesai}}</td>
                            <td>
                                <a href="{{route('bukti.add')}}"><button type="button" class="btn"><i class="fa fa-upload"></i></button></a>
                                <a href="{{url('generate-pdf')}}">
                                    <button type="button" class="btn"><i class="fa fa-file-pdf-o"></i></button>
                                </a>
                                <a href="{{route('kepanitiaan.delete', $kepanitiaan->id)}}" id="delete" class="btn"><i class="fa fa-trash-o"></i></a>
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