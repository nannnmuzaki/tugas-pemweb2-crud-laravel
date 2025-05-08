@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center mb-3">
            <div> 
                <h2>Tambah Supplier Baru</h2>
            </div>
            <div class="mb-2">
                <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Nama Supplier:</strong>
                    <input type="text" name="nama_supplier" class="form-control" placeholder="Masukkan Nama Supplier" value="{{ old('nama_supplier') }}">
                    @error('nama_supplier')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                     @error('alamat')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
             <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Telepon:</strong>
                    <input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ old('telepon') }}">
                    @error('telepon')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
             <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection