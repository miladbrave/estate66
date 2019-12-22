@extends('frontend.layout.master')

@section('content')

{{--    <img src="{{asset('/med/line3.jpg')}}" width="100%" height="300px" alt="" style="z-index: 1;position: relative;">--}}

    <div class="product" style="margin-top: 5%">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-0" style="margin-bottom: 1%">
                    <div id="gallery">
                        <div id="panel">
                            <a data-fancybox="gallery" href="{{asset($product->photos[0]->path)}}"><img id="largeImage" src="{{asset($product->photos[0]->path)}}" alt=".."
                                   style="width: 100%;height: 450px"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    @foreach($product->photos as $photo)
                        <div class="column" style="margin: 1px">
                            <div id="thumbs">
                                <a data-fancybox="gallery" href="{{asset($photo->path)}}">
                                    <img src="{{asset($photo->path)}}" style="width:100%;height: 100px;"
                                         alt="1st image description"/></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6 attribute">
                    <ul>
                        <li><h4> {{$product->title}}</h4></li>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <li><b>کد : </b>{{$product->sku}}</li>
                                @foreach($product->attributevalue as $attribute)
                                    @if($attribute->attributeGroup->title == "متراژ")
                                        <li><b>متراژ :{{$attribute->title}}</b></li>
                                    @endif
                                    @if($attribute->attributeGroup->title == "اتاق خواب")
                                        <li><b> تعداد اتاق :{{$attribute->title}}</b></li>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <li><b>شهر : </b>{{$product->country}}</li>
                            </div>
                        </div>
                    </ul>
                    <hr>
                    <div class="price">
                        <div class="row">
                            @if($product->dis_price)
                                <div class="col-md-7"><h4
                                        style="text-align: right;direction: rtl;color: red">{{$product->dis_price}}
                                        تومان </h4></div>
                                <div class="col-md-5">
                                    <h4 style="text-align: right;direction: rtl;">
                                        <del>{{$product->price}} تومان</del>
                                    </h4>
                                </div>
                            @else
                                <div class="col-md-10"><h4
                                        style="text-align: right;direction: rtl">{{$product->price}}
                                        تومان </h4></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="line">
        <div class="container" style="margin-bottom: 5%">
            <div class="characters">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">مشخصات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">توضیحات</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <table class="table table-striped">
                            <tbody>
                            @foreach($product->attributevalue as $attribute)
                                <tr>
                                    <td>{{$attribute->attributeGroup->title}}</td>
                                    <td>{{$attribute->title}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <h5>{!! $product->description !!}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
