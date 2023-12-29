@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nama Makanan</div>

                <div class="card-body">
                   <div class="table-responsive p-2">
                    <div class="m-2">
                        <a href="/makanan/create" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-dark table-striped">
                        <thead>
                            <th>Nama Makanan</th>
                            <th>Asal Daerah</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($makanan as $row)
                                <tr>
                                    <td>{{$row->nama_makanan}}</td>
                                    <td>{{$row->asal_makanan}}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Ubah</a>
                                        <a href="#" class="btn btn-danger">Hapus</a>
                                        <a href="" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
