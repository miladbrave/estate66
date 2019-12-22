@extends('frontend.En.layout.master')

@section('content')
    <div class="search" style="position: absolute;z-index: 100 ;">
        <form action="{{route('en.search')}}" method="post" name="search">
            @csrf
            <select name="location" id="pet-select">
                <option value="">Location</option>
                @foreach($search  as $pro)
                    <option value="{{$pro->encountry}}">{{$pro->encountry}}</option>
                @endforeach
            </select>
            <select name="zone" id="pet-select">
                <option value="">Area</option>
                @foreach($search  as $pro)
                    <option value="{{$pro->enzone}}">{{$pro->enzone}}</option>
                @endforeach
            </select>
            <select name="type" id="pet-select">
                <option value="">Property</option>
                @foreach($category  as $prod)
                    <option value="{{$prod->enname}}">{{$prod->enname}}</option>
                @endforeach

            </select>
            <select name="room" id="pet-select">
                <option value="">Bed Room</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">more than 4</option>
            </select>
            <select name="price" id="pet-select">
                <option value="">Price</option>
                <option value="1">$ 50000-100000</option>
                <option value="2">$ 120000-150000</option>
                <option value="3">$ 150000-200000</option>
                <option value="4">$ 200000-250000</option>
                <option value="5">$ 250000-350000</option>
                <option value="6">300000 upا</option>
            </select>
            <button class="btn btn-dark btn-sm" type="submit" name="submit">Search</button>
        </form>
    </div>

    <div class="slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/med/ca1.jpg')}}" width="100%" height="700"
                         alt="first slide">
                    <div class="one">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/med/ca3.jpg')}}" width="100%" height="700"
                         alt="Second slide">
                    <div class="two">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/med/ca2.jpg')}}" width="100%" height="700"
                         alt="Third slide">
                    <div class="three">
                        <div class="carousel-caption">
                        </div>
                    </div>
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
    </div>


    <div class="f-proj wow fadeInUp slow">
        <div class="container" style="margin-top: 5%;margin-left: 7%;margin-bottom: 5%">
            <h4 style="text-align: center;margin: 3%" class="font-weight-bold">Popular projects</h4>
            <div class="card-columns">
                @foreach($product as $pro)
                    @if($pro->entitle)
                        <div class="card">
                            <a href="{{route('enproduct.single',['slug' => $pro->slug])}}"
                               class="text-decoration-none"><img
                                    src="{{asset($pro->photos[0]->path)}}" width="100%" height="200px"
                                    class="card-img-top"
                                    alt="...">
                                <div class="card-body ">
                                    <h5 class="card-title">{{$pro->entitle}}</h5>
                                    <p class="card-text">{!! str_limit($pro->endes,20) !!}</p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <button type="button" href="#" class="btn btn-dark" style="margin-left: 45%;margin-top: 2%">More Info
            </button>
        </div>
    </div>


    <section id="subscribe">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="subscribe-title">What do you know about Turkey?</h3>
                    <a class="subscribe-btn" href="{{route('en.info')}}">More Info</a>
                </div>
            </div>
        </div>
    </section>


    <div class="f-proj wow fadeInUp slow">
        <div class="container" style="margin-top: 5%;margin-left: 7%;margin-bottom: 5%">
            <h4 style="text-align: center;margin: 3%" class="font-weight-bold">Quick sell</h4>
            <div class="card-columns">
                @foreach($product2 as $pro)
                    @if($pro->entitle && $pro->endes)
                        <div class="card">
                            <a href="{{route('enproduct.single',['slug' => $pro->slug])}}"
                               class="text-decoration-none"><img
                                    src="{{asset($pro->photos[0]->path)}}" width="100%" height="200px"
                                    class="card-img-top"
                                    alt="...">
                                <div class="card-body ">
                                    <h5 class="card-title">{{$pro->entitle}}</h5>
                                    <p class="card-text">{{$pro->endes}}</p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach

            </div>
            <button type="button" href="#" class="btn btn-dark" style="margin-left: 45%;margin-top: 2%">More Info
            </button>
        </div>
    </div>


    <div class="demo">
        <h4 style="text-align: center">Our Last Projects</h4>
        <div id="owl-demo2">
            @foreach($product2 as $pro)
                <a href="{{route('enproduct.single',['slug' => $pro->slug])}}"><div class="item"><img src="{{asset($pro->photos[0]->path)}}" alt="Owl Image"></div></a>
            @endforeach
        </div>
    </div>

@endsection
