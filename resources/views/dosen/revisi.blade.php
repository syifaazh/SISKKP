@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-4 py-3">
    <div class="card">
        <div class="card-header">
            Revisi
        </div>
        <div class="container-fluid px-4 py-3">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="#" class="form-label">Revisi</label>
                            <textarea class="form-control" id="#"></textarea>
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