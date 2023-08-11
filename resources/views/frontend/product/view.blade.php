@extends('layouts.front')

@section('title', $product->name)

@section('content')

    <div class="py-4 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0 text-muted">Koleksi / {{ $product->Category->name }}</h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/products/'.$product->image) }}" class="w-100">
                    </div>
                    <div class="col-md-8">
                        <h5 class="mb-0">
                            {{ $product->name }}
                            @if ($product->trending == '1') 
                            <label  class="float-end badge bg-danger tranding_tag">Trending</label>
                            @endif
                        </h5>
    
                        <hr>
                        <label class="me-3">Harga Asli : Rp.<s>{{ $product->original_price }}</s></label>
                        <label class="fw-bold">Harga jual : Rp.{{ $product->selling_price }}</label>
                        <p class="mt-3">
                            {{ $product->small_description }}
                        </p>
                        <hr>
                        @if ($product->qty = 0)
                            <label class="badge bg-success">In stock</label>
                        @else
                            <label class="badge bg-danger">Out of stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="Quality">Kualitas</label>
                                <div class="input-group text-center mb-3">
                                    <span for="" class="input-group-text">-</span>
                                    <input type="text" value="1" name="quantity" class="form-control">
                                    <span for="" class="input-group-text">+</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                <button type="submit" class="btn btn-success me-3 float-start">Tambah ke keranjang</button>
                                <button type="submit" class="btn btn-primary me-3 float-start">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection