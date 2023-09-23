@extends('layout.layout')
@section('title', 'Daftar User')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="h1">
                        Data User
                    </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="user/tambah">
                                <btn class="btn btn-success">Tambah User</btn>
                            </a>

                        </div>
                        <p>
                            <hr>
                        <table class="table table-hover table-bordered DataTable">
                            <thead>
                                <tr>
                                    <th>USERNAME</th>
                                    <th>ROLE</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($user as $u)
                                    <tr>
                                        <td>{{ $u->username }}</td>
                                        <td>{{ $u->role }}</td>
                                        <td>
                                            <a href="user/edit/{{ $u->id_user }}">
                                                <btn class="btn btn-primary">EDIT</btn>
                                            </a>
                                            <btn class="btn btn-danger btnHapus" idUser="{{ $u->id_user }}">HAPUS</btn>

                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection