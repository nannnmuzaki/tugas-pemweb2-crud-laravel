@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="row mb-3">
        <div class="col-lg-12 d-flex justify-content-between align-items-center mb-1">
            <div>
                <h2>Detail Supplier</h2>
            </div>
            <div class="mb-2">
                <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nama Supplier:</strong>
                {{ $supplier->nama_supplier }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $supplier->alamat }}
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Telepon:</strong>
                {{ $supplier->telepon }}
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $supplier->email }}
            </div>
        </div>

        <div class="col-md-12 mt-3"> 
            <div class="form-group">
                <strong>Ditambahkan pada:</strong>
                {{ $supplier->created_at }}
            </div>
        </div>
         <div class="col-md-12">
            <div class="form-group">
                <strong>Diupdate terakhir pada:</strong>
                {{ $supplier->updated_at }}
            </div>
        </div>

    </div> 
</div>
@endsection