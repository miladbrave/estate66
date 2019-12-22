@extends('frontend.En.layout.master')

@section('content')
    <img src="{{asset('/med/aboutus.jpg')}}" width="100%" height="450px" alt="" style="z-index: 1;position: relative">

    <div class="ser1">
        <div class="container" style="background-color: #f2f2e7">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('/med/logo.png')}}" width="65%" height="auto" alt="" style="z-index: 1;position: relative"><br>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 22px">
                        The company <b> "Faisle trading company  LTD" </b> has been operating since 2002 in the fully legal and registered field in Northern Cyprus by sending students to Northern Cyprus. After expanding into real estate, immigration, automotive, concerts with a highly experienced and professional team The expert continues to work. All members of the company have higher education from overseas universities as well as residents of Cyprus. The branches of the company <b>Faisle trading company  LTD </b> are operating in the cities of Istanbul and Tehran and Tabriz and will open branches in Ahvaz and Shiraz in the near future.
                    </p>
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
