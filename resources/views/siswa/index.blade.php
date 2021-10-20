@extends('layouts.app')
@section('content')
<div class="row mb-2">
    <div class="col-sm-8">
        <h1>Siswa</h1>
        <p>Daftar Nama Siswa</p>
    </div>
    <div class="col-sm-4">
        <a class="btn btn-primary float-right" href="">Tambah Siswa</a>
    </div>
</div>
<div class="card">
    <div class="card body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>NIS</td>
                        <td>Kelas</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Alim</td>
                        <td>12334534</td>
                        <td>X AP1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection