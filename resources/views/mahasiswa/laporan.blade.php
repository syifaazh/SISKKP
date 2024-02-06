@extends('layouts.mahasiswa.app')

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
                                <td>Laporan</td>
                                <td>status</td>
                                <td>keterangan</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="file" class="form-control" id="#">
                                </td>
                                <td><span class="badge badge-warning">Belum Diverifikasi</span></td>
                                <td>-------</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="container-fluid px-4 py-3">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                               <td>daftar absen</td>
                               <td></td>
                            </tr>
                            <tr>
                                <td>Logbook</td>
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