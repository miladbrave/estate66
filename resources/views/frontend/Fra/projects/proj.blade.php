@extends('frontend.Fra.layout.master')

@section('content')
    <img src="{{asset('/med/ca3.jpg')}}" width="100%" height="500px" alt="" style="z-index: 1;position: relative">

    <div class="container" style="margin: 3%;">

        <div class="card-columns">

            @foreach($product as $pro)
            <div class="card wow fadeInUp slow">
                    <a href="{{route('fraproduct.single',['slug' => $pro->slug])}}" class="text-decoration-none"><img src="{{asset('/med/rent.jpg')}}" class="card-img-top"
                                                                 alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">{{$pro->fratitle}}</h5>
                            <p class="card-text">{!! str_limit($pro->fradescription,30)!!}</p>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>
    </div>

@endsection
