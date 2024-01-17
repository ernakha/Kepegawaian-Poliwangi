@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Data Dinas Luar</h1>
            </div>
            <div class="co text-end mb-2">
                <a href="{{route('dinlur.add')}}"><button type="button" class="btn btn-primary">Tambah Data</button></a>
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
                            <th><center>Tempat Dinas Luar</center></th>
                            <th><center>Kategori Tugas</center></th>
                            <th><center>Tanggal Terima</center></th>
                            <th><center>Tanggal Masuk</center></th>
                            <th><center>Tanggal Selesai</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item =>$dinlur)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$dinlur->tempat}}</td>
                            <td>{{$dinlur->kategori}}</td>
                            <td>{{$dinlur->terima}}</td>
                            <td>{{$dinlur->mulai}}</td>
                            <td>{{$dinlur->selesai}}</td>
                            <td> <center>
                            <a href="{{route('buktidin.edit', $dinlur->id)}}"><button type="button" class="btn"><i class="fa fa-upload"></i></button></a>
                                <a href="{{route('nilaidin.edit', $dinlur->id)}}"><button type="button" class="btn"><i class="fa fa-heart"></i></button></a>
                                <a href="{{url('generate-pdf')}}">
                                    <button type="button" class="btn"><i class="fa fa-file-pdf-o"></i></button>
                                </a>
                                <a href="{{route('dinlur.delete', $dinlur->id)}}" id="delete" class="btn"><i class="fa fa-trash-o"></i></a>
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