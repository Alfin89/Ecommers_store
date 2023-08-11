@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>
                @foreach ($product as $item)
                <div class="col-md-3 mb-3">
                    <div class="card" >
                        <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">{{ $item->name }}</h6>
                        <a href="#" class="btn btn-sm rounded btn-primary">Go somewhere</a><br>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection