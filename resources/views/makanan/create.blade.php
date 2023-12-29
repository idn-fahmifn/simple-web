@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Makanan</div>

                <div class="card-body">
                    <form action="{{route('makanan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Makanan</label>
                            <input type="text" class="form-control mt-2" name="nama_makanan">
                        </div>
                        <div class="form-group">
                            <label>Asal Makanan</label>
                            <input type="text" class="form-control mt-2" name="asal_makanan">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
