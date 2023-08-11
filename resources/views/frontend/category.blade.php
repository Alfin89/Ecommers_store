@extends('layouts.front')

@section('title', 'View Category')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>All Category</h1>
                        <div class="row">
                            @foreach ($category as $item)
                                <div class="col-md-3 mb-3">
                                    <a href="{{ url('view-category/'.$item->slug) }}">
                                        <div class="card" >
                                            <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h6 class="card-title">{{ $item->name }}</h6>
                                            <p>
                                                {{ $item->description }}
                                            </p>
                                            <a href="#" class="btn btn-sm rounded btn-primary">Lebih detail</a><br>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection