@extends('layouts.dosen.app')

@section('content')

<div class="container-fluid px-4 py-3">
    <div class="card">
        <div class="card-header">
            Jadwal
        </div>
        <div class="container-fluid px-4 py-3">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Bidang minat</td>
                                <td>Pembimbing</td>
                                <td>Penguji</td>
                                <td>Jadwal</td>
                                <td>Ruang</td>
                                <td>Penilaian</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <a href="{{url('nilai')}}" class="btn btn-danger btn-sm" target="_blank">Nilai</a>
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