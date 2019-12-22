@extends('frontend.ara.layout.master')

@section('content')
    <img src="{{asset('/med/aboutus.jpg')}}" width="100%" height="450px" alt="" style="z-index: 1;position: relative">

    <div class="ser1">
        <div class="container" style="background-color: #f2f2e7">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('/med/logo.png')}}" width="65%" height="auto" alt="" style="z-index: 1;position: relative"><br>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 20px;text-align: justify;float: right;direction: rtl;margin: 5%"> تعمل الشركة <b> "Faisle trading company  LTD" </b>  في شمال قبرص منذ عام 2002 وهي شركة مرخصة ومسجلة بالكامل ، مع توسيع الطلاب إلى شمال قبرص. والمهنية المهنية تواصل العمل. جميع أعضاء الشركة حاصلون على تعليم عالي من جامعات أجنبية بالإضافة إلى سكان قبرص. تعمل فروع الشركة<b>Faisle trading company  LTD </b> في مدينتي إسطنبول وطهران وتبريز وستفتح فروعًا في الأهواز وشيراز في المستقبل القريب.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="http://www.cypersian.com " target="_blank">
                            <img src="{{asset('/med/1.png')}}" alt="" width="100%" height="180">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="http://www.cyemu.com" target="_blank">
                            <img src="{{asset('/med/2.png')}}" alt="" width="100%" height="180">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="http://www.rout66motors.com" target="_blank">
                            <img src="{{asset('/med/3.png')}}" alt="" width="100%" height="180">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
