@extends('frontend.Fra.layout.master')

@section('content')
    <img src="{{asset('/med/aboutus.jpg')}}" width="100%" height="450px" alt="" style="z-index: 1;position: relative">

    <div class="ser1">
        <div class="container" style="background-color: #f2f2e7">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('/med/logo.png')}}" width="65%" height="auto" alt="" style="z-index: 1;position: relative"><br>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 22px">La société <b> "Faisle trading company  LTD" </b> opère depuis 2002 dans le domaine entièrement légal et enregistré dans le nord de Chypre en envoyant des étudiants dans le nord de Chypre. Après une expansion dans l'immobilier, l'immigration, l'automobile, des concerts avec une équipe hautement expérimentée et professionnelle L'expert continue de travailler. Tous les membres de l'entreprise ont une formation supérieure dans des universités à l'étranger ainsi que des résidents de Chypre. Les succursales de la société <b>Faisle trading company  LTD </b> opèrent dans les villes d'Istanbul, de Téhéran et de Tabriz et ouvriront prochainement des succursales à Ahvaz et à Shiraz.</p>
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
