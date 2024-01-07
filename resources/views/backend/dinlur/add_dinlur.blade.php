@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tambah Dinas Luar</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('dinlur.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="tempat" class="form-label">Tempat Dinas</label>
                            <input type="text" class="form-control" name="tempat" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="kategori" class="form-label">Kategori Tugas</label>
                            <select type="select" class="form-control" name="kategori" required>
                                <option selected>Pilih</option>
                                <option value="Tim">Tim</option>
                                <option value="Individu">Individu</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="terima" class="form-label">Tanggal Terima Tugas</label>
                            <input type="date" class="form-control" name="terima" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="mulai" class="form-label">Tanggal Mulai Tugas</label>
                            <input type="date" class="form-control" name="mulai" required>
                        </div>
                        <div class="col">
                            <label for="selesai" class="form-label">Tanggal Selesai Tugas</label>
                            <input type="date" class="form-control" name="selesai" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="mulai" class="form-label">Anggota</label>
                            <select class="form-control js-example-basic-multiple" name="nama[]" id="nama" required>
                            @foreach ($anggdin as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                            </select>
                            <!-- <input type="text" class="form-control" name="nama[]" id="nama" required> -->
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.js-example-basic-multiple').select2({
        maximumSelectionLength: 10,
        multiple:true,
});
</script>
@endpush