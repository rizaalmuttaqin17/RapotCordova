@extends('layouts.app')
@section('content')
<div class="row mb-2">
    <div class="col-sm-8">
        <h1>Mata Pelajaran</h1>
        <p>Daftar Mata Pelajaran Sekolah</p>
    </div>
    <div class="col-sm-4">
        <a class="btn btn-primary float-right" href="">Tambah Mapel</a>
    </div>
</div>
<div class="card">
    <div class="card body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Mata Pelajaran</td>
                        <td>Semester</td>
                        <td>Guru Pengampu</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Penjaskes</td>
                        <td>Ganjil</td>
                        <td>Sri Hartono</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection