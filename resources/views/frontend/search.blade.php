@extends('frontend.layout.master')

@section('content')

    <img src="{{asset('/med/h1.jpg')}}" width="100%" height="500px" alt="" style="z-index: 1;position: relative;">


    <div class="result" style="margin-top: 5%;z-index: 1000">
        <div class="container">
            <h2 style="float: right;text-align: right">نتایج جستجو</h2>
            <hr class="line" style="float: right;width: 100%;margin-right: 1%;margin-top:2%">
            <div class="row">
                <div class="card-columns">
                    @if($number)
                        @foreach($number as $pro)
                            <div class="card wow fadeInUp slow">
                                <a href="{{route('product.single',['slug' => $pro->slug])}}"
                                   class="text-decoration-none"><img src="{{asset($pro->photos[0]->path)}}" width="100%"
                                                                     height="200px" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <h5 class="card-title">{{$pro->title}}</h5>
                                        <p class="card-text">{!! $pro->description !!}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    @if($rom)
                        @foreach($rom as $pro)
                            <div class="card wow fadeInUp slow">
                                <a href="{{route('product.single',['slug' => $pro->slug])}}"
                                   class="text-decoration-none"><img src="{{asset($pro->photos[0]->path)}}" width="100%"
                                                                     height="200px" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <h5 class="card-title">{{$pro->title}}</h5>
                                        <p class="card-text">{!! $pro->description !!}.</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                    @if($type)
                        @foreach($type as $pro)
                            <div class="card wow fadeInUp slow">
                                <a href="{{route('product.single',['slug' => $pro->slug])}}"
                                   class="text-decoration-none"><img src="{{asset($pro->photos[0]->path)}}" width="100%"
                                                                     height="200px" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <h5 class="card-title">{{$pro->title}}</h5>
                                        <p class="card-text">{!! $pro->description !!}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    @if($locate)
                        @foreach($locate as $pro)
                            <div class="card wow fadeInUp slow">
                                <a href="{{route('product.single',['slug' => $pro->slug])}}"
                                   class="text-decoration-none"><img src="{{asset($pro->photos[0]->path)}}" width="100%"
                                                                     height="200px" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <h5 class="card-title">{{$pro->title}}</h5>
                                        <p class="card-text">{!! $pro->description !!}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                    @if($zon)
                        @foreach($zon as $pro)
                            <div class="card wow fadeInUp slow">
                                <a href="{{route('product.single',['slug' => $pro->slug])}}"
                                   class="text-decoration-none"><img src="{{asset($pro->photos[0]->path)}}" width="100%"
                                                                     height="200px" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <h5 class="card-title">{{$pro->entitle}}</h5>
                                        <p class="card-text">{!! $pro->endes !!}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
                @if(!$number && !$rom && !$type && !$locate && !$zon)
                    <div>
                        <p style="text-align: right;direction: rtl;float: right">متاسفانه موردی یافت نشد!</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
