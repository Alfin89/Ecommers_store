@extends('layouts.admin')

@section('content')
    <a href="{{ url('add-category') }}" class="btn btn-info">Tambah Data</a>
    <div class="card">
        <div class="card-header">
            <h4>kategory</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-success table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="rounded" width="70px" alt="Gambar">
                            </td>
                            <td>
                                <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ url('delete-category/'.$item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
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