<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.frontend.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("backtotop").style.display = "block";
            } else {
                document.getElementById("backtotop").style.display = "none";
            }
        }

        $(window).resize(function() {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });

        function topFunction() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            document.documentElement.scrollTop = 0;
        }
    </script>
</head>

<body>
    <header id="header">
        <img class="banner-logo" style="cursor:pointer" src="https://cdn.tgdd.vn/2020/07/banner/1200-44-Copy-1200x44-1.png" height="44">
        <div class="container">
            <div class="row-logo">
                <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                    <h2>
                        <a href="{{ url('/') }}"><img src="{{asset('image/logo.png')}}"></a>
                        <nav><a id="pull" class="btn btn-danger" href="#">
                                <i class="fa fa-bars"></i>
                            </a></nav>
                    </h2>
                </div>
                <div id="search" class="col-md-7 col-sm-12 col-xs-12">
                    <form class="navbar-form" role="search" method="get" action="{{asset('search/')}}">
                        <input type="text" class="form-control" name="result" placeholder="Nhập từ khóa ...">
                        <button type="submit" class="btn btn-defalt" style="margin-top:28px;"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div id="cart" class="col-md-2 col-sm-12 col-xs-12">
                    <a class="display" href="{{asset('cart/show')}}">
                        <img src="{{asset('image/icon-cart.png')}}">
                        <a>{{Cart::count()}}</a></a>
                </div>
            </div>
        </div>
    </header><!-- /header -->

    <section id="body">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-md-3">
                    <nav id="menu">
                        <ul>
                            <li class="menu-item">Danh mục sản phẩm</li>
                            @foreach($categories as $category)
                            <li class="menu-item"><a href="{{asset('category/'.$category->id.'.html')}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div id="main" class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('image/slide-1.png')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('image/slide-2.png')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('image/slide-3.png')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    @yield('main')
                </div>
                
            </div>
        </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About us</h6>
                    <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        @foreach($categories as $category)
                        <li><a href="{{asset('category/'.$category->id.'.html')}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Contribute</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                        <a href="#">NTM</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/ghosterkrilex"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-dribbble-square"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <button onclick="topFunction()" id="backtotop" title="Go to top" class="btn"><i class="fa fa-arrow-up"></i></button>
            </div>
        </div>
    </footer>
</body>

</html>