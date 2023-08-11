@extends('layouts.front')

@section('title', 'E-commers')

@section('content')
    @include('layouts.inc._slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Produk Populer</h2>
            <div class="owl-carousel owl-theme features_image_carousel">
                @foreach ($list_products as $item)
                <div class="item">
                    <div class="card" >
                        <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">{{ $item->name }}</h6>
                        <a href="#" class="btn btn-sm rounded btn-primary">Go somewhere</a><br>
                        <span class="float-start">{{ $item->selling_price }}</span>
                        <span class="float-end"><s style="color: red">{{ $item->original_price }}</s></span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending Category</h2>
            <div class="owl-carousel owl-theme features_image_carousel">
                @foreach ($trending_category as $item)
                <div class="item">
                    <a href="{{ url('view-category/'.$item->slug)}}">
                    <div class="card" >
                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h6 class="card-title">{{ $item->name }}</h6>
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
@endsection

@section('script')
    <script>
    $('.features_image_carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
@endsection