@extends('layout.head_layout')

@section('main-content')
<!---------- HEADER START -------------->
<div class="layout">
    <div class="layout-images">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/frontend/img/slides/01_slider_image.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/frontend/img/slides/02_slider_image.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/frontend/img/slides/03_slider_image.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
<!---------- HEADER END ---------------->

<!-- IMAGE CONTENT START -->
<div class="wrapper-image-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="/frontend/img/content-images/01_category_image-600x600.jpg" alt="">
                <div class="caption">
                    <h3>New Prints</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="/frontend/img/content-images/02_category_image-600x600.jpg" alt="">
                <div class="caption">
                    <h3>Illustrated Prints</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- IMAGE CONTENT END -->

<!-- SHOP ART CONTENT START -->
<div class="section-wrapper text-center">
    <h4>Featured Collection</h4>
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

<!-- ABOUT CONTENT START -->

<div class="about-content-section text-center">
    <img src="/frontend/img/about-content/new_product_preview.jpg" alt="">
    <div class="container">
        <span>OUR STORY</span>
        <p>Our story covering interesting stories around culture and design.
            <br>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.
        </p>
    </div>
</div>
<hr>
<!-- ABOUT CONTENT END -->



@endsection