@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Update-Category</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" >
                            <option>{{ $products->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Nama</label>
                        <input type="text" value="{{ $products->name }}" name="name" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" value="{{ $products->slug }}" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Discripsi</label>
                        <textarea name="small_description" class="form-control" rows="3">{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Discripsi</label>
                        <textarea name="description" class="form-control" rows="3">{{ $products->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Harga Asli</label>
                        <input type="number" value="{{ $products->original_price }}" name="original_price" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Harga Penjualan</label>
                        <input type="number" value="{{ $products->selling_price }}" name="selling_price" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Kualitas</label>
                        <input type="number" value="{{ $products->qty }}" name="qty" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Pajak</label>
                        <input type="number" value="{{ $products->tax }}" name="tax" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{ $products->status == '1' ? 'checked':'' }} name="status" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Populer</label>
                        <input type="checkbox" {{ $products->trending == '1' ? 'checked':'' }} name="trending" >
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta title</label>
                        <input type="text" name="meta_title" value="{{ $products->meta_title }}" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta keyworrds</label>
                        <textarea name="meta_keywords" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta description</label>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                    </div>
                    @if ($products->image)
                    <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="Products Image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection