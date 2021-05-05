@extends('layout.head_layout')

@section('main-content')

<div class="about-image text-center">
    <img src="{{asset('frontend/img/products/new_header_image.jpg')}}" alt="about">
    <div class="tittle-blade">
        <p> - Our Products - </p>
    </div>
</div>

<!-- SHOP ART CONTENT START -->
<div class="section-wrapper text-center">
    <h4>All</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_6-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>BLACK HOLE</h3>
                <span class="price">$125.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_8-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>BLACK MUSIC</h3>
                <span class="price">$220.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_3-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>BLACK MOON</h3>
                <span class="price">$125.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_1-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>BLUE COLLECTION</h3>
                <span class="price">$200.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_2-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>CREATIVE GEOMETRY</h3>
                <span class="price">$120.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_5-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>GREY TREE</h3>
                <span class="price">$288.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_7-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>SUMMER BULLETS</h3>
                <span class="price">$400.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_9-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>TRIPLE MOON</h3>
                <span class="price">$500.00</span>
            </div>
            <div class="col-md-4">
                <img src="/frontend/img/shop-content/new_product_4-300x300.png" alt="">
                <span class="tittle">NEW PRINTS</span>
                <h3>WHITE CIRCLES</h3>
                <span class="price">$215.00</span>
            </div>
        </div>
    </div>
</div>
<!-- SHOP ART CONTENT END -->

@endsection