@extends('layouts.app')
@section('content')
<div class="row mb-2">
    <div class="col-sm-8">
        <h1>Guru</h1>
        <p>Daftar Nama Guru</p>
    </div>
    <div class="col-sm-4">
        <a class="btn btn-primary float-right" href="/guru/tambah">Tambah Guru</a>
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
                        <td>NIP</td>
                        <td>Wali Kelas</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sri Hartono</td>
                        <td>6402421432509584</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection