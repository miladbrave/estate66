@extends('frontend.layout.master')

@section('content')
    <img src="{{asset('/med/aboutus.jpg')}}" width="100%" height="350px" alt="" style="z-index: 1;position: relative">

    <div class="ser1">
        <div class="container" style="background-color: #f2f2e7">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('/med/logo.png')}}" width="65%" height="auto" alt=""
                         style="z-index: 1;position: relative"><br>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 22px;text-align: justify;float: right;direction: rtl;margin: 5%"> شرکت <b> "Faisle trading company  LTD" </b> از سال 1382 (2002) به طور کاملا قانونی و ثبت شده در قبرس شمالی فعالیت خود رابا
                        اعزام دانشجویان به قبرس شمالی آغاز کرده است.سپس با گسترش شرکت در زمینه های املاک ,مهاجرت ,خودرو
                        ,کنسرت به صورت کسترده با تیم کاملا مجرب و حرفه ای متخصص به فعالیت خود ادامه می دهد. تمامی اغضای
                        این شرکت دارای تحصیلات عالیه از دانشگاه های خارج از کشور و همچنین ساکن قبرس می باشد. سیر شعبات
                        شرکت <b> "Faisle trading company  LTD" </b> در شهرهای استانبول و تهران و تبریز مشغول به فعالیت هستند و در آینده
                        نزدیک شعبات اهواز و شیراز افتتاح خواهد شد. </p>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="http://www.cypersian.com" target="_blank">
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
