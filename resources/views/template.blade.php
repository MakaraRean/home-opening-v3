<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            padding-top: 40px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
            background-image: url('/images/background.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        div span {
            float: right;
            color: red;
        }

        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }

        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }

        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }

        .account-settings .about p {
            font-size: 0.825rem;
        }

        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: grey;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #5e90f2;
        }

        .qr-code {
            width: 70px;
            height: 70px;
            position: fixed;
            margin-top: 15px;
            margin-left: 15px
        }


        a.navbar-brand {
            float: left;
            height: 50px;
            padding: 15px 15px;
            font-size: 18px;
            line-height: 20px;
            text-decoration: none;
            color: orangered;
            font-family: cursive;
            font-weight: 700;

        }

        nav.main-navigation {
            position: relative;
        }

        nav.main-navigation ul.nav-list {
            margin: 0;
            padding: 0;
            list-style: none;
            position: relative;
            text-align: right;
        }

        .nav-list li.nav-list-item {
            display: inline-block;
            line-height: 40px;
            margin-left: 30px;
            margin-top: 15px;
        }

        a.nav-link {
            text-decoration: none;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 500;
            cursor: pointer;
            position: relative;
            color: #ff2d2d;
        }


        @keyframes FadeIn {
            0% {
                opacity: 0;
                -webkit-transition-duration: 0.8s;
                transition-duration: 0.8s;
                -webkit-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                transform: translateY(-10px);
            }


            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
                pointer-events: auto;
                transition: cubic-bezier(0.4, 0, 0.2, 1);
            }
        }

        .nav-list li {
            animation: FadeIn 1s cubic-bezier(0.65, 0.05, 0.36, 1);
            animation-fill-mode: both;
        }

        .nav-list li:nth-child(1) {
            animation-delay: .3s;
        }

        .nav-list li:nth-child(2) {
            animation-delay: .6s;
        }

        .nav-list li:nth-child(3) {
            animation-delay: .9s;
        }

        .nav-list li:nth-child(4) {
            animation-delay: 1.2s;
        }

        .nav-list li:nth-child(5) {
            animation-delay: 1.5s;
        }

        /* Animation */

        @keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
            -webkit-animation-duration: 1s;
            -webkit-animation-fill-mode: both
        }

        .animatedFadeInUp {
            opacity: 0
        }

        .fadeInUp {
            opacity: 0;
            animation-name: fadeInUp;
            -webkit-animation-name: fadeInUp;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('header')


</head>

<body>
    <script src="finisher-header.es5.min.js" type="text/javascript"></script>
    {{-- header --}}
    <div class="header finisher-header" style="width: 100%; height: 100px;">

        <nav class="main-navigation">
            <div class="navbar-header" style="position:absolute;float: right;">
                <ul class="nav-list" style="float: right;z-index:2">
                    <li class="nav-list-item">
                        <a href="{{ route('home') }}" class="nav-link">ទំព័រដើម</a>
                    </li>
                    <li class="nav-list-item">
                        <a href="{{ route('newAddress') }}" class="nav-link">ថែមទីតាំង</a>
                    </li>
                    <li class="nav-list-item">
                        <a href="{{ route('report') }}" class="nav-link">មើលទិន្នន័យ</a>
                    </li>
                    <li class="nav-list-item">
                        <a href="{{ route('search') }}" class="nav-link">ស្វែងរក</a>
                    </li>

                </ul>
            </div>
        </nav>
        <img src="/images/headertext.png" style="width: 100%; height: 80px;position: relative;z-index:1" alt="" style="object-fit: cover">
        {{-- <nav class="main-navigation" style="position: absolute;float: right;">
            <div class="navbar-header animated fadeInUp">
                <a class="navbar-brand" href="#"><img src="/images/logo.png" width="150" height="auto"></a>
            </div>
        </nav> --}}
    </div>

    <canvas id="sky" style="position: fixed"></canvas>
    @yield('content')


    <script>
        window.onload = function() {
            //get and store canvas & context
            var canvas = document.getElementById("sky");
            var ctx = canvas.getContext("2d");
            var h = window.innerHeight;
            var w = window.innerWidth;
            //set dims to window
            canvas.height = h;
            canvas.width = w;
            // Generate snowflakes
            var mf = 100; // max flakes
            var flakes = [];
            // loop through the empty flakes
            for (var i = 0; i < mf; i++) {

                flakes.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    r: Math.random() * 5 + 2, //min of 2px and max 7px
                    d: Math.random() + 1 // density of flakes
                })
            }
            //draw flakes
            function drawFlakes() {
                ctx.clearRect(0, 0, w, h);
                ctx.fillStyle = "white";
                ctx.beginPath();
                for (var i = 0; i < mf; i++) {
                    var f = flakes[i];
                    ctx.moveTo(f.x, f.y);
                    ctx.arc(f.x, f.y, f.r, 0, Math.PI * 2, true);
                }
                ctx.fill();
                moveFlakes();
            }
            //animate the flakes
            var angle = 0;

            function moveFlakes() {
                angle += 0.01;
                for (var i = 0; i < mf; i++) {
                    //store the current flake
                    var f = flakes[i];
                    //Upadte Y and X coordinate of each snow
                    f.y += Math.pow(f.d, 2) + 1;
                    f.x += Math.sin(angle) * 2;
                    //if the snow reach to the bottom send it to the top again
                    if (f.y > h) {
                        flakes[i] = {
                            x: Math.random() * w,
                            y: 0,
                            r: f.r,
                            d: f.d
                        };
                    }
                }
            }
            setInterval(drawFlakes, 25);
        }
    </script>

    {{-- script for header animation --}}
    <script type="text/javascript">
        new FinisherHeader({
            "count": 12,
            "size": {
                "min": 1300,
                "max": 1500,
                "pulse": 0
            },
            "speed": {
                "x": {
                    "min": 0.6,
                    "max": 5
                },
                "y": {
                    "min": 0.6,
                    "max": 5
                }
            },
            "colors": {
                "background": "#953eff",
                "particles": [
                    "#ff681c",
                    "#87ddfe",
                    "#231efe",
                    "#ff0a53"
                ]
            },
            "blending": "lighten",
            "opacity": {
                "center": 0.6,
                "edge": 0
            },
            "skew": 0,
            "shapes": [
                "c"
            ]
        });
    </script>

</body>

</html>
