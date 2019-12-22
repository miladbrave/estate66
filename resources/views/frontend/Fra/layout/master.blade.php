<html lang="fra">
<head>
    <title>Route 66 Real Estate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/front/css/EnSelf.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link  href="{{asset('/front/fancybox/dist/jquery.fancybox.min.css')}}" rel="stylesheet">


</head>


<body>

<div class="header">
    <div class="lan">
        <select class="btn btn-outline-dark btn-sm" name="lang" onchange="getlang(this)">
            <option value="fra">Fra</option>
            <option value="fa">Fa</option>
            <option value="en">En</option>
            <option value="ara">Ara</option>
        </select>
    </div>
    <h1>Route 66 Real Estate</h1>
    <a href="{{route('fra.home')}}"><img id="lan-img" src="{{asset('/med/logo.png')}}" width="90" height="80"
                                         class="d-inline-block align-top" alt=""></a>

    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div>Menu</div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="nav-back" style="margin-left: -2%;margin-top: 1%">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('fra.home')}}" style="padding-right: 0.1rem;padding-left: 0.1rem" ><strong>Accueil</strong><span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" style="padding-right: 0.1rem;padding-left: 0.1rem">
                            <strong>Un service</strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('fra.service')}}">Un service1</a>
                            <a class="dropdown-item" href="{{route('fra.service')}}">Un service2</a>
                            <a class="dropdown-item" href="{{route('fra.service')}}">Un service3</a>
                        </div>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="{{route('fra.proj')}}" style="padding-right: 0.1rem;padding-left: 0.1rem"><strong>Projets</strong></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="{{route('fra.info')}}" style="padding-right: 0.1rem;padding-left: 0.1rem"><strong>Info</strong></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="{{route('fra.about')}}" style="padding-right: 0.1rem;padding-left: 0.1rem"><strong>À&nbsp;propos&nbsp;de&nbsp;nous</strong></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="{{route('fra.contact')}}" style="padding-right: 0.1rem;padding-left: 0.1rem"><strong>Contact</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>

@yield('content')


<div class="footer">
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                    <h5 class="font-weight-bold text-uppercase mb-4">FAISLE TRADING COMPANY LTD</h5>
                    <p style="text-align: justify">
                        La société "faisle trading company LTD" opère depuis 2002 dans le domaine entièrement légal et enregistré dans le nord de Chypre en envoyant des étudiants dans le nord de Chypre. Après une expansion dans l'immobilier, l'immigration, l'automobile, des concerts avec une équipe hautement expérimentée et professionnelle L'expert continue de travailler.
                    </p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
                    <h5 class="font-weight-bold text-uppercase mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a href="{{'fra.home'}}">Accueil</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="{{'fra.proj'}}">Projets</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="{{'fra.about'}}">À&nbsp;propos&nbsp;de&nbsp;nous</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="{{'fra.service'}}">Un service</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                    <h5 class="font-weight-bold text-uppercase mb-4">Contact</h5>
                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fa fa-map-marker fa-1x"></i> New York, NY 10012, US</p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-envelope fa-1x"></i> info@example.com</p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-phone fa-1x"></i> + 01 234 567 88</p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-phone fa-1x"></i> + 01 234 567 89</p>
                        </li>
                    </ul>

                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
                    <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>
                    <div id="wrapper">
                        <div id="share">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="https://www.instagram.com/" class="containe instagram">
                                        <svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="circle">
                                            <circle cx="100" cy="100" r="50"/>
                                        </svg>
                                        <div class="social">
                                            <i class="fa fa-instagram" style="color: red"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="containe twitter">
                                        <svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="circle">
                                            <circle cx="100" cy="100" r="50"/>
                                        </svg>
                                        <div class="social">
                                            <i class="fa fa-twitter" style="color: #3aaae1"></i>
                                        </div>
                                    </a>

                                </div>

                                <div class="col-md-6">
                                    <a href="#" class="containe youtube">
                                        <svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="circle">
                                            <circle cx="100" cy="100" r="50"/>
                                        </svg>
                                        <div class="social">
                                            <i class="fa fa-youtube" style="color: red"></i>
                                        </div>
                                    </a>
                                    <a href="#" class="containe facebook">
                                        <svg preserveAspectRatio="xMinYMin meet" viewBox="0 0 200 200" class="circle">
                                            <circle cx="100" cy="100" r="50"/>
                                        </svg>
                                        <div class="social">
                                            <i class="fa fa-facebook" style="color: blue"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="background-color: black;width: 80%">

            <div class="footer-copyright text-center" style="color: white">© 2018 Copyright:Route State 66            </div>
        </div>
    </footer>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('/front/fancybox/dist/jquery.fancybox.min.js')}}"></script>

<script src="{{asset('/front/js/owl.carousel.js')}}"></script>
<script src="{{asset('/front/js/Self.js')}}"></script>
<script src="{{asset('/front/js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>


</body>
</html>
