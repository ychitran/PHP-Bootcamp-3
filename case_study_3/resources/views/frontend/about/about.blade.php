@extends('layout.head_layout')

@section('main-content')

<!--=================== ABOUT BLADE START====================== -->

<!-- IMAGE ABOUT START -->
<div class="about-image text-center">
    <img src="{{asset('frontend/img/about/hero-bg3-3.jpg')}}" alt="about">
    <div class="tittle-blade">
        <p> - About Us - </p>
    </div>

</div>
<!-- IMAGE ABOUT END -->

<!-- CONTENT ABOUT START -->
<div class="about-content container">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde ratione accusamus ducimus, velit aut nam illum. Iusto magnam cum expedita dolorem dolorum! Animi et labore amet voluptates officiis dicta ullam dolores exercitationem enim ratione accusantium
        iure consequatur quo reiciendis, nisi quibusdam magnam totam praesentium consequuntur, deserunt corrupti fugit illum! Recusandae eius quod exercitationem repellat tempora autem facilis ipsum architecto, at officia rerum inventore laborum quaerat obcaecati illo,
        .</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde ratione accusamus ducimus, velit aut nam illum. Iusto magnam cum expedita dolorem dolorum! Animi et labore amet voluptates officiis dicta ullam dolores exercitationem enim ratione accusantium
        iure consequatur quo reiciendis, nisi quibusdam magnam totam praesentium consequuntur, deserunt corrupti fugit illum! Recusandae eius quod exercitationem repellat tempora autem facilis ipsum architecto, at officia rerum inventore laborum quaerat obcaecati illo
    </p>
</div>
<div class="about-content container">
    <div class="footer-email" style="margin-bottom: 20px">
        <div class="container">
            <h3 class="text-center">The Story</h3>
        </div>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatum consequatur,
        odio reprehenderit commodi sequi odit facere iusto velit adipisci dolores ipsam corrupti animi veniam ab suscipit illum autem! Explicabo vero impedit accusamus praesentium, incidunt nobis voluptatem iusto, esse accusantium tempore dignissimos. Deleniti, quibusdam molestias velit commodi facere vero!</p>
    <br>
    <div class="row text-center">
        <div class="col-md-6 col-6">
            <img src="{{asset('frontend/img/about/team-1-1-1-600x600.jpg')}}" alt="">
            <h3>Hellen Madison</h3>
            <span class="job">Owner / Designer / Creative Director</span>
            <br>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim.</p>
        </div>
        <div class="col-md-6 col-6">
            <img src="{{asset('frontend/img/about/team-1-3-600x600.jpg')}}" alt="">
            <h3>Ellen Moonday</h3>
            <span class="job">Owner / Illustrator / Letterer</span>
            <br>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim.</p>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6 col-6">
            <div class="tittle-content">
                <h3>The Process</h3>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
                <br>
                <p>
                    Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                </p>
                <br>
                <p>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto
                    odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor.</p>
            </div>
        </div>
        <div class="col-md-6 col-6">
            <img src="{{asset('frontend/img/about/post-5-1.jpg')}}" alt="">
        </div>
    </div>
</div>

</ @endsection <!--==============ABOUT BLADE END==================-->