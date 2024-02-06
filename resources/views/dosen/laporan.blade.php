@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-4 py-3">
    <div class="card">
        <div class="card-header">
            Laporan
        </div>
        <div class="container-fluid px-4 py-3">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Laporan</td>
                                <td>Status</td>
                            </tr>
                            <tr>
                                <td>-------</td>
                                <td>
                                    <input type="file" class="form-control" id="#">
                                </td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm" target="_blank">setujui</a>
                                    <a href="#" class="btn btn-warning btn-sm" target="_blank">revisi</a>
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