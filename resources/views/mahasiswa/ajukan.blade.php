@extends('layouts.mahasiswa.app')

@section('content')

<div class="container-fluid px-4 py-3">
    <div class="card">
        <div class="card-header">
            Ajukan Topik
        </div>
        <div class="container-fluid px-4 py-3">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="#" class="form-label">Nama Mahasiswa</label>
                            <input type="name" class="form-control" id="#">
                        </div>
                        <div class="col-md-6">
                            <label for="#" class="form-label">Prodi</label>
                            <input type="password" class="form-control" id="#">
                        </div>
                        <div class="col-md-6">
                            <label for="#" class="form-label">Bidang Minat</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-6">
                            <label for="#" class="form-label">Semester Aktif</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-6">
                            <label for="#" class="form-label">Dosen Pembimbing</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-12">
                            <label for="#" class="form-label">Topik</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-12">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection