<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="blog/css/vendor/fluidbox.min.css">
    <link rel="stylesheet" href="blog/css/main.css">

    <title>Gumba</title>

</head>

<body>


    <header>

        <div id="logo-container">
            <div id="logo"><a href="/">Gumba</a></div>
            <div id="subtitle">A design agency from Amsterdam</div>
        </div>
        <!-- 		<nav>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li> 
				<li><a href="mailto:your@address.com" class="bordered">Contact</a></li>
			</ul>
		</nav> -->

    </header>

    <div id="content">
        @foreach ($blogs as $key => $blogs)
        @if($blogs->id==1)
        <section class="intro">

            <h1>Hello, <span class="nl"></span>{{ $blogs->tittle}}</h1>
            <p>
                {{$blogs->content}}
            </p>
        </section>
        @endif

        @if($blogs->id == 2)
        <section class="row">
            <div class="col-full">
                <h2>{{ $blogs->tittle}}</h2>
                <p>
                    {{$blogs->content}}
                </p>
            </div>
        </section>
        @endif
        @endforeach


        <section class="row">
            <div class="photo-grid">
                <a href="blog/img/example-photo-b.jpg" rel="lightbox" class="col-2"><img src="blog/img/example-photo-b.jpg" alt="Example photo"></a>
                <a href="blog/img/example-photo-c.jpg" rel="lightbox" class="col-2"><img src="blog/img/example-photo-c.jpg" alt="Example photo"></a>
                <a href="blog/img/example-photo-a.jpg" rel="lightbox" class="col-1"><img src="blog/img/example-photo-a.jpg" alt="Example photo"></a>
            </div>
        </section>


        <section class="row">
            <div class="col">
                <h2>Contact</h2>
                <p>
                    Want to work with us? Just send us an <a href="mailto:#">email</a>.
                </p>
            </div>
            <div class="col">
                <h2>Follow us</h2>
                <p>
                    We are on <a href="http://twitter.com/rickwaalders">Twitter</a>, <a href="http://dribbble.com/rickwaalders">Dribbble</a> and <a href="http://instagram.com/rickwaalders">Instagram</a>.
                </p>
            </div>
        </section>


        <section class="row">
            <div class="col-full">
                <p>
                    © 2021 - This is a free website template by <a href="http://www.pixelsbyrick.com">Rick Waalders</a>
                </p>
            </div>
        </section>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="blog/js/vendor/jquery.1.11.min.js"><\/script>');
        }
    </script>

    <script src="blog/js/vendor/jquery.fluidbox.min.js"></script>
    <script src="blog/js/main.js"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'YOUR_GOOGLE_ANALYTICS_ID', 'auto');
        ga('send', 'pageview');
    </script>

</body>

</html>