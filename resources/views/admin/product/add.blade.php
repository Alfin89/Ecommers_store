@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Add-Category</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id" >
                            <option value="">Pilih Kategori Produk</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}" >{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Nama</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Discripsi</label>
                        <textarea name="small_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Discripsi</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Harga Asli</label>
                        <input type="number" name="original_price" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Harga Penjualan</label>
                        <input type="number" name="selling_price" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Kualitas</label>
                        <input type="number" name="qty" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Pajak</label>
                        <input type="number" name="tax" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Populer</label>
                        <input type="checkbox" name="trending" >
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta keyworrds</label>
                        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta description</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection