@extends('frontend.ara.layout.master')

@section('content')
    <img src="{{asset('/med/ca3.jpg')}}" width="100%" height="500px" alt="" style="z-index: 1;position: relative">

    <div class="container wow fadeInUp slow">
        <h4 style="text-align: center;margin: 3%" class="font-weight-bold">استثمار</h4>
        <div class="row">
        <div class="card-columns">

            @foreach($product as $pro)
            <div class="card ">
                    <a href="{{route('product.single',['slug' => $pro->slug])}}" class="text-decoration-none"><img src="{{asset($pro->photos[0]->path)}}" width="100%" height="200px" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">{{$pro->aratitle}}</h5>
                            <p class="card-text">{!! str_limit($pro->aradescription,30)!!}</p>
                        </div>
                    </a>
                </div>
            @endforeach

            </div>
        </div>
    </div>

@endsection
