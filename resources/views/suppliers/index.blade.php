@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center mb-2">
            <div> 
                <h2>Daftar Supplier</h2>
            </div>
            <div class="mb-2">
                <a class="btn btn-success" href="{{ route('suppliers.create') }}">Tambah Supplier</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
                <td>{{ $suppliers->firstItem() + $loop->index }}</td> {{-- Atau gunakan $suppliers->firstItem() + $loop->index for pagination --}}
                <td>{{ $supplier->nama_supplier }}</td>
                <td>{{ $supplier->alamat }}</td>
                <td>{{ $supplier->telepon }}</td>
                <td>{{ $supplier->email }}</td>
                <td>
                    <form action="{{ route('suppliers.destroy',$supplier->id) }}" method="POST">
                        <a class="btn btn-dark btn-sm" href="{{ route('suppliers.show',$supplier->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('suppliers.edit',$supplier->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus supplier ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Optional: Pagination links --}}
    {{ $suppliers->links() }}

</div>
@endsection