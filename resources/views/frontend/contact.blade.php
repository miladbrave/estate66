@extends('frontend.layout.master')

@section('content')
    <div class="head">
        <img src="{{asset('/med/contact-banner.jpg')}}" width="100%" height="450px" alt=""
             style="z-index: 1;position: relative">
    </div>
    <div class="contact">
        <h5 style="text-align: center;margin-top: 3%">با ما در ارتباط باشید</h5>
        <hr class="line" style="width: 80%">
        <div class="row" style="margin: 1%;position: relative">
            <div class="col-md-5">
                <div class="info wow fadeInLeft slow">
                    <i class="fa fa-map-marker fa-1x"></i>
                    <h5> نشانی :</h5>
                    <hr class="line">
                    <h6>ایران , تبریز..</h6>

                    <i class="fa fa-phone fa-1x"></i>
                    <h5> تلفن تماس :</h5>
                    <hr class="line">
                    <h6>98123-4567-002+</h6>

                    <i class="fa fa-envelope fa-1x"></i>
                    <h5> ایمیل :</h5>
                    <hr class="line">
                    <h6>example@gmail.com</h6>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 wow fadeInRight slow">
                <div class="form">
                    <form action="/action_page.php">
                        <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="نام.."
                                       style="text-align: right;direction: rtl">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="نام خانوادگی.."
                                       style="text-align: right;direction: rtl">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="موضوع..."
                                       style="text-align: right;direction: rtl">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="subject" placeholder="توضیحات.."
                                          style="height:200px;text-align: right;direction: rtl"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <input class="btn btn-sm btn-primary offset-3" type="submit" value="ارسال">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 offset-md-0 wow fadeInLeft slow">
            <div class="fluid-wrapper" style="border: 3px gray solid">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d407.1333768903383!2d33.91293019043813!3d35.2794600351395!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x14dfb1bf8aee2451%3A0xfc6a9a5dcd545d7b!2sBah%C3%A7eler%2C%20Yeni%20%C4%B0skele%2099850!3m2!1d35.285403699999996!2d33.9150619!5e0!3m2!1sen!2s!4v1576738252623!5m2!1sen!2s"
                    width="1300" height="450" frameborder="0" style="border:0;" allowfullscreen="">

                </iframe>
            </div>
        </div>
    </div>



@endsection
