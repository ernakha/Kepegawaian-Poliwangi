@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Kepanitiaan</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('kepanitiaan.edit', $edit->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Kategori Tugas</label>
                            <select type="select" class="form-control" name="kategori">
                                <option selected value="{{$edit->kategori}}">{{$edit->kategori}}</option>
                                <option value="Tim">Tim</option>
                                <option value="Individu">Individu</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="terima" class="form-label">Tanggal Terima Tugas</label>
                            <input type="date" class="form-control" name="terima" value="{{$edit->terima}}">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="mulai" class="form-label">Tanggal Mulai Tugas</label>
                            <input type="date" class="form-control" name="mulai" value="{{$edit->mulai}}">
                        </div>
                        <div class="col">
                            <label for="selesai" class="form-label">Tanggal Selesai Tugas</label>
                            <input type="date" class="form-control" name="selesai" value="{{$edit->selesai}}">
                        </div>
                    </div>
                </div>
                <div class="card mt-4 mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800">Add Anggota</h1>
                        <button type="button" class="btn btn-outline-primary add-more"><i class="bi bi-plus-circle"></i>
                            Add
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class=" mb-3">
                        <div class=" add-more-data">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" name="nama[]" id="nama" value="{{$edit->anggota}}" required>
                                </div>
                            </div>
                        </div>
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

@push('js')
<script src="{{ asset('backend/js/multiselect.js') }}"></script>

@endpush