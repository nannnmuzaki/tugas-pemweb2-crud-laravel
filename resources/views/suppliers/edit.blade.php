@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center mb-1">
            <div>
                <h2>Detail Supplier</h2>
            </div>
            <div class="mb-2">
                <a class="btn btn-primary" href="{{ route('suppliers.index') }}">Kembali</a>
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

    <form action="{{ route('suppliers.update',$supplier->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Nama Supplier:</strong>
                    <input type="text" name="nama_supplier" value="{{ $supplier->nama_supplier }}" class="form-control" placeholder="Masukkan Nama Supplier">
                    @error('nama_supplier')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Masukkan Alamat">{{ $supplier->alamat }}</textarea>
                     @error('alamat')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
             <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Telepon:</strong>
                    <input type="text" name="telepon" value="{{ $supplier->telepon }}" class="form-control" placeholder="Masukkan Nomor Telepon">
                    @error('telepon')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
             <div class="col-md-12 mb-2">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" value="{{ $supplier->email }}" class="form-control" placeholder="Masukkan Email">
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection