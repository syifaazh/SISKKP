@extends('layouts.mahasiswa.app')

@section('content')

<div class="container-fluid px-4 py-3">
    <div class="card">
        <div class="card-header">
            Berkas
        </div>
        <div class="container-fluid px-4 py-3">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Unduh Berkas</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" target="_blank">Unduh</a>
                                </td>
                            </tr>

                            <tr>
                                <td>Upload Berkas</td>
                                <td>
                                    <input type="file" class="form-control" id="#">
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection