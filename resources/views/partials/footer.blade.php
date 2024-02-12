<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top d-flex container">
                        <div>
                            <h5>dc comics</h5>
                                <ul class="list-unstyled">
                                    <a href="/"></a>
                                    <li><a class="nav-link" href="/">Characters</a></li>
                                    <li><a class="nav-link" href="/">Comics</a></li>
                                    <li><a class="nav-link" href="/">Movies</a></li>
                                    <li><a class="nav-link" href="/">Tv</a></li>
                                    <li><a class="nav-link" href="/">Games</a></li>
                                    <li><a class="nav-link" href="/">Videos</a></li>
                                    <li><a class="nav-link" href="/">News</a></li>
                                </ul>
                            <h5>shop</h5>
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="/">Shop Dc</a></li>
                                    <li><a class="nav-link" href="/">Shop Dc Collectibles</a></li>
                                </ul>
                        </div>
                        <div class="mx-5">
                            <h5>dc</h5>
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="/">Terms Of Use</a></li>
                                    <li><a class="nav-link" href="/">Privacy policy(new</a>)</li>
                                    <li><a class="nav-link" href="/">Ad Choices</a></li>
                                    <li><a class="nav-link" href="/">Advertising</a></li>
                                    <li><a class="nav-link" href="/">Jobs</a></li>
                                    <li><a class="nav-link" href="/">Subscriptions</a></li>
                                    <li><a class="nav-link" href="/">Talent Workshops</a></li>
                                    <li><a class="nav-link" href="/">CPSC Certificates</a></li>
                                    <li><a class="nav-link" href="/">Ratings</a></li>
                                    <li><a class="nav-link" href="/">Shop Help</a></li>
                                    <li><a class="nav-link" href="/">Contact Us</a></li>
                                </ul>
                        </div>
                        <div>
                            <h5>sites</h5>
                                <ul class="list-unstyled">
                                    <li><a class="nav-link" href="/">DC</a></li>
                                    <li><a class="nav-link" href="/">MAD Magazine</a></li>
                                    <li><a class="nav-link" href="/">DC Kids</a></li>
                                    <li><a class="nav-link" href="/">DC Universe</a></li>
                                    <li><a class="nav-link" href="/">DC Power Visa</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom py-4">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <button class="btn btn-outline-primary text-white rounded-0 text-uppercase fw-bold">sign-up now!</button>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <div class="mx-3 blu_text text-uppercase fw-bold">follow us</div>
                        <div class="socials">
                            <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="facebook">
                            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter">
                            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube">
                            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest">
                            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="periscope">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>