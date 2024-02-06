@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-4 py-3">
    <div class="card">
        <div class="card-header">
            Penilaian
        </div>
        <div class="container-fluid px-4 py-3">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="#" class="form-label">Nilai 1</label>
                            <input type="name" class="form-control" id="#">
                        </div>
                        <div class="col-md-12">
                            <label for="#" class="form-label">Nilai 2</label>
                            <input type="password" class="form-control" id="#">
                        </div>
                        <div class="col-md-12">
                            <label for="#" class="form-label">Nilai 3</label>
                            <input type="text" class="form-control" id="#">
                        </div>
                        <div class="col-md-12">
                            <label for="#" class="form-label">Nilai 4</label>
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