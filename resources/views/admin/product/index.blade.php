@extends('layouts.admin')

@section('content')
    <a href="{{ url('add-product') }}" class="btn btn-info">Tambah Data</a>
    <div class="card">
        <div class="card-header">
            <h4>List Products</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-success table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kategori</th>
                        <th>Nama</th>
                        <th>Selling Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="rounded " width="70px" alt="Gambar">
                            </td>
                            <td>
                                <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ url('delete-product/'.$item->id) }}" method="POST" onsubmit="return swal('Heres the title!', 'Apakah anda yakin menghapusnya..?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection