<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="vieport" media="screen" content="width=device-width, initial-scale=1">
        <title> Larave| Blog Sites</title>

        <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
        <script src="{{ asset ('js/script.js')}}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>
<body>

<nav class="navbar navbar-fix-top navbar-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <a href="https://cnn.com" target="_blank">
                    <img src="{{ asset ('/images/ads-banner/header/ads-foot.png')}}" >
                    </a>
            </div>
            <!-- <div class="col-md-6">
                    <a href="https://cnn.com" target="_blank">
                    <img src="{{ asset ('/images/ads-banner/header/broaddrive-banner-716x90.png')}}" >
                    </a>
            </div> -->
        </div>

        <div class="row">
            <div class="col-md-2 pull-left" id="logo-img"> <a href="/" class="navbar-brand">
                <img src="{{ asset('images/logo/logo-150x50.jpg')}}" alt="">
            </a></div>
            <div class="col-md-8">
            <u class="nav navbar-nav">
                <li class="dropdown">
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown"> Home <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="active"><a href="#"> Entertainment</a></li>
                        <li><a href="#"> Sport</a></li>
                        <li><a href="#"> Fashion</a></li>
                        <li><a href="#"> Life Style</a></li>
                        <li><a href="#"> Politics</a></li>
                    </ul>
                </li>
                <li><a href="#"> Entertainment</a></li>
                <li><a href="#"> Sport</a></li>
                <li><a href="#"> Fashion</a></li>
                <li><a href="#"> Life Style</a></li>
                <li><a href="#"> Politics</a></li>
            </u>
            </div>
            <div class="col-md-2 pull-right">
                <form action="">
                    <input type="text" name="search" id="" placeholder="Search Here" width="50">
                </form>
            </div>
        </div>
    </div>
</nav>
    
<div class="container">
    <section>
        <div class="row">
            <div class="col-md-9">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                <div class="item active">
                <img src="{{ asset ('images/slide/player-1-1200x500.jpg')}}">
                    <div class="carousel-caption">
                    <h3 style="color: green;">Headline Tag 1</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
                </div>
                </div><!-- End Item -->

                <div class="item">
                <img src="{{ asset ('images/slide/player-2-1200x500.jpg')}}">
                    <div class="carousel-caption">
                    <h3 style="color: red;">Headline</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
                </div>
                </div><!-- End Item -->
                
                <div class="item">
                <img src="{{ asset ('images/slide/player-3-1200x500.jpg')}}">
                    <div class="carousel-caption">
                    <h3 style="color: blue;">Headline</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
                </div>
                </div><!-- End Item -->
                
                <div class="item">
                <img src="{{ asset ('images/slide/player-4-1200x500.jpg')}}">
                    <div class="carousel-caption">
                    <h3 style="color: yellow;">Headline</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
                </div><!-- End Item -->
                
                </div><!-- End Carousel Inner -->
        
                <ul class="nav nav-pills nav-justified">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem ipsum dolor sit</small></a></li>
                    <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum dolor sit</small></a></li>
                    <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum dolor sit</small></a></li>
                    <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum dolor sit</small></a></li>
                </ul>
                </div><!-- End Carousel -->
            </div>
            
            <div class="col-md-3">
                <img href="#" src="{{asset ('images/sidebar/sportybet-new.png')}}">
                <img href="#" src="{{asset ('images/sidebar/newsletter-4.png')}}">
                <img href="#" src="{{asset ('images/sidebar/messi.jpg')}}">
            </div>
        </div>
    </section>  
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-col-md-6 pull-left">
                <div class="img-mid-banner">
                    <img src="{{ asset ('images/ads-banner/broaddrive_banner-01.jpg')}}" alt="" width="600">
                </div>

                </div>
                <div class="col-sm-col-md-6 pull-right" >
                    <div class="col-sm-6-col-md-6"> 
                        <header class="header-tag">
                            <h2><strong> News Flash..</stront></h2>
                        </header>
                        <p><a href="#"><marquee width="500"> Serena Williams' 
                            return sparks seeding MiLB’s new 
                            extra-inning rule follows WBSC</marquee>
                        </a></p>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2 class="text-divider"><span> Most Recent News</span></h2>
    <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row seperator">
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{asset ('images/free-photos.gif')}}">
                    <div class="card-block">
                        <a href="#">
                        <h4 class="card-title">Tawshif Ahsan Khan</h4>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        </a>
                    </div>
                    <div class="card-footer">
                        <span class="float-right">37 minutes ago</span>
                        <span><i class=""></i>Football</span>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-divider"><span> Politics</span></h2>
        <div class="row">
            <div class="col-sm-6 col-md-7">
                <div class="row">
                <div class="col-sm-3 col-md-4 col-lg-4 mt-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                        <div class="card-block">
                            <a href="#">
                            <h4 class="card-title">Tawshif Ahsan Khan</h4>
                            <div class="card-text">
                                Tawshif is a web designer living in Bangladesh.
                            </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <span><i class=""></i>Election</span>
                            <span class="float-right">37 minutes ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-4 mt-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                        <div class="card-block">
                            <a href="#">
                            <h4 class="card-title">Tawshif Ahsan Khan</h4>
                            <div class="card-text">
                                Tawshif is a web designer living in Bangladesh.
                            </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <span><i class=""></i>Election</span>
                            <span class="float-right">37 minutes ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-4 mt-3">
                    <div class="card">
                        <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                        <div class="card-block">
                            <a href="#">
                            <h4 class="card-title">Tawshif Ahsan Khan</h4>
                            <div class="card-text">
                                Tawshif is a web designer living in Bangladesh.
                            </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <span><i class=""></i>Election</span>
                            <span class="float-right">37 minutes ago</span>
                        </div>
                    </div>
                </div>
                
                <div class="div"> 
                    &nbsp;
                </div>

                <div class="row ">
                <div class="col-sm-3 col-md-4 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                            <h4 class="card-title">Tawshif Ahsan Khan</h4>
                            <div class="card-text">
                                Tawshif is a web designer living in Bangladesh.
                            </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <span><i class=""></i>Election</span>
                            <span class="float-right">37 minutes ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                            <h4 class="card-title">Tawshif Ahsan Khan</h4>
                            <div class="card-text">
                                Tawshif is a web designer living in Bangladesh.
                            </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <span><i class=""></i>Election</span>
                            <span class="float-right">37 minutes ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                            <h4 class="card-title">Tawshif Ahsan Khan</h4>
                            <div class="card-text">
                                Tawshif is a web designer living in Bangladesh.
                            </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <span><i class=""></i>Election</span>
                            <span class="float-right">37 minutes ago</span>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>

            <!-- Polictis sidebar banner -->

            <div class="col-sm-6 col-md-5">
                <div class="col-sm-3 col-md-8"> 
                    <a href="#"><img src="{{asset ('images/ads-banner/cloth-ads.jpg')}}" alt=""></a>
                    <div class="img-mid-banner"></div>
                    <a href="#"><img src="{{asset ('images/ads-banner/cloth-ads.jpg')}}" alt=""> </a>
                    
                </div>
                <div class="col-sm-3 col-md-4"> 
                    <a href="#"><img src="{{asset ('images/ads-banner/600x60.gif')}}" alt=""></a> 
                </div>
            </div>
        </div>

        <h2 class="text-divider"><span> Entertainment </span></h2>
        <div class="row">
            <div class="col-sm-6 col-md-8">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Entertainment  banner -->

            <div class="col-sm-6 col-md-4">
                <div class="col-sm-3 col-md-12"> 
                    <a href="#"><img src="{{asset ('images/ads-banner/cloth-ads.jpg')}}" alt=""></a>
                    <div class="img-mid-banner"></div>
                    <a href="#"><img src="{{asset ('images/sidebar/newsletter-01.png')}}" alt=""> </a>
                </div>
            </div>
        </div> 
        <h2 class="text-divider"><span> Sport </span></h2>
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-divider"><span> Fashion & Life Style </span></h2>
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2 col-lg-2 mt-2">
                        <div class="card">
                            <img class="card-img-top" src="{{asset ('images/elections.jpg')}}">
                            <div class="card-block">
                                <a href="#">
                                <h4 class="card-title">Tawshif Ahsan Khan</h4>
                                <div class="card-text">
                                    Tawshif is a web designer living in Bangladesh.
                                </div>
                                </a>
                            </div>
                            <div class="card-footer">
                                <span><i class=""></i>Election</span>
                                <span class="float-right">37 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<footer>
<div class="footer-img-banner" style="background-color: red;">
            <div class="row">
            <a href="http://www.wbsc.org" target="_blank">
            <img src="{{ asset ('/images/ads-banner/footer/banner-04.png')}}" >
            </a>
            </div>
</div>
</footer>
<footer class="footer1">
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                    <li class="widget-container widget_nav_menu"><!-- widgets list -->
                        <h1 class="title-widget">Useful links</h1>
                        <ul>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> Success Stories</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> PG Courses</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i> Achiever's Batch</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Regular Batch</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test & Discussion</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Fast Track T & D</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- widgets column left end -->
            <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                    <li class="widget-container widget_nav_menu"><!-- widgets list -->
                        <h1 class="title-widget">Useful links</h1>
                        <ul>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Test Series Schedule</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Postal Coaching</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  PG Dr. Bhatia Books</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  UG Courses</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Satellite Education</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Study Centres</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  State P.G. Mocks</a></li>
                            <li><a  href="#" target="_blank"><i class="fa fa-angle-double-right"></i> Results</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- widgets column left end -->
            <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                    <li class="widget-container widget_nav_menu"><!-- widgets list -->
                        <h1 class="title-widget">Useful links</h1>
                        <ul>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Enquiry Form</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Online Test Series</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Grand Tests Series</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Subject Wise Test Series</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Smart Book</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Test Centres</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>  Admission Form</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>  Computer Live Test</a></li>
                        </ul>
					</li>
                </ul>
            </div><!-- widgets column left end -->
            <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                    <li class="widget-container widget_recent_news"><!-- widgets list -->
                    <h1 class="title-widget">Contact Detail </h1>
                    <div class="footerp"> 
                    <h2 class="title-median">Webenlance Pvt. Ltd.</h2>
                    <p><b>Email id:</b> <a href="mailto:info@webenlance.com">info@webenlance.com</a></p>
                    <p><b>Helpline Numbers </b>
                    <b style="color:#ffc106;">(8AM to 10PM):</b>  +91-8130890090, +91-8130190010  </p>
                    <p><b>Corp Office / Postal Address</b></p>
                    <p><b>Phone Numbers : </b>7042827160, </p>
                    <p> 011-27568832, 9868387223</p>
            </div>
            <div class="social-icons">
            <div style="font-size: 40px; color: saddlebrown;" class="nomargin">
                <a href="#"><i class="fa fa-facebook-square fa-1x social-fb"></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-1x social-tw"></i></a>
                <a href="#"><i class="fa fa-instagram fa-1x social-in"></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-x social-gp" ></i></a>
                <a href="#"><i class="fa fa-envelope-square fa-x social-em" ></i></a>
            </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</footer>
<!--header-->
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="copyright">
					© 2018, Webenlance, All rights reserved
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<div class="design">
					 <a href="#">Code Empire </a> |  <a target="_blank" href="#">Web Design & Development by MikeDev</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>