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
                                <button type="submit" class="btn btn-success me-3 float-start">Tambah ke keranjang 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                        <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                                    </svg> 
                                </button>
                                <button type="submit" class="btn btn-primary me-3 float-start">Beli 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection