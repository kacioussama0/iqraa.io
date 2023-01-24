@extends('layout.app')
@section('title',__('home.home'))


@section('landing-page')

    <video autoplay muted loop
           class="position-absolute start-0 top-0 z-n1 w-100 vh-100 object-fit-cover ">
        <source src="{{asset('imgs/landing.mp4')}}"
                type="video/mp4">
        Your browser does not support the video tag.
    </video> <!-- HERE ENDS THE VIDEO -->

    <div class="header-content text-light w-100  position-absolute start-50 top-50 translate-middle text-center">
        <h1 class="mb-5 display-4 text-light fw-bold">
            {{__('home.school-tiltle')}}
        </h1>

        <div class="row p-0 m-0">
            <h4 class="col-12 col-md-6 col-lg-4 mx-auto fw-lighter mb-5 lh-sm">
                {{__('home.ecol-slogan')}}
            </h4>

        </div>
            <a class="btn btn-lg btn-outline-light rounded-pill px-4"
               href="{{url('faq')}}#headingOne">
                {{__('home.about-us')}}
            </a>
    </div>  <!-- HERE ENDS THE LANDING PAGE -->

    <a href="#activities"
       class="position-absolute bottom-0 start-50 translate-middle-x link-light">
        <svg id="scrl-icon"
             xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 24 38.9">
                <path class="scrl-body"
                      d="M12.8 38.4h-1.6C5.2 38.4.4 33.6.4 27.6V11.2C.4 5.2 5.2.4 11.2.4h1.6c6 0 10.8 4.8 10.8 10.8v16.5c0 5.9-4.8 10.7-10.8 10.7z"/>
                <path class="scrl-wheel"
                      d="M12 13.9a4.2 4.2 0 01-4.2-4.2V4.2C7.8 1.9 9.7 0 12 0c2.3 0 4.2 1.9 4.2 4.2v5.4a4.1 4.1 0 01-4.2 4.3z"/>
        </svg>
    </a> <!-- HERE ENDS THE SCROLLER -->


@endsection

@section('content')

    <!--HERE STARTS Activities -->

<section class="activities py-5 my-5" >
    <div class="container">
        <h3 class="special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5"
            style="width: fit-content">
                {{__('home.act-title')}}
        </h3> <!-- HERE ENDS THE TITLE -->

        <div class="row align-items-center" id="activities">
            <div class="col-lg-6 order-last order-lg-first">
                <div class="card py-5 border-0 text-center text-lg-start">
                    <div class="card-body vstack gap-3 ">
                            <h4>
                                {{__('home.act-subtitle')}}
                            </h4>

                            <p class="text-muted lh-lg">
                                {{__('home.act-content-1')}}
                            </p>

                    </div>
                </div>
            </div>

                <div class="col-lg-6">
                    <img src="{{asset('imgs/44.jpg')}}"
                         alt="student"
                         class="img-fluid border-0 rounded-5">
                </div>
        </div>  <!-- HERE ENDS THE FIRSTS  ACTIVITIES-->


        <div class="row  align-items-center ">
            <div class="col-lg-6 order-last ">
                <div class="card py-5 border-0 text-center text-lg-start">
                    <div class="card-body vstack gap-3 ">
                            <h4>
                                {{__('home.act-subtitle-2')}}
                            </h4>

                            <p class="text-muted lh-lg">
                                {{__('home.act-content-2')}}
                            </p>

                            <a href="{{url('/travel-info')}}"
                               class="btn btn-outline-dark rounded-pill px-5 align-self-lg-start align-self-stretch">
                                {{__('home.read-more')}}
                            </a>
                    </div>
                </div>
            </div>

                <div class="col-lg-6 ">
                    <img src="{{asset('imgs/trip.jpg')}}"
                         alt=""
                         class="img-thumbnail border-0 rounded-5">
                </div>
        </div>   <!-- HERE ENDS SECOND  ACTIVITIES-->


        <div class="row align-items-center ">
            <div class="col-lg-6 order-last order-lg-first">
                <div class="card py-5 border-0 text-center text-lg-start">
                    <div class="card-body vstack gap-3 ">

                        <h4>
                          {{__('home.act-subtitle-3')}}
                        </h4>

                        <p class="text-muted lh-lg">
                            {{__('home.act-content-3')}}
                        </p>

                    </div>
                </div>
            </div>

                <div class="col-lg-6">
                    <img src="{{asset('imgs/iqraageneva-4.jpg')}}"
                         alt=""
                         class="img-fluid border-0 rounded-5">
                </div>
        </div>
    </div>
</section>   <!--HERE ENDS Activities -->

<!--HERE START properties -->

<section class="properties py-5 mt-5 bg-primary bg-opacity-10">
    <div class="container">
        <h3 class="special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5"
            style="width: fit-content;--color-default:#46ABEE">
            {{__('home.prop-title')}}
        </h3>  <!-- HERE ENDS THE TITLE-->

        <!-- HERE ENDS THE PROPERTIE CARD-->

        <div class="row gy-5 gy-lg-0">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 rounded-5 p-3 text-center shadow-sm">
                    <div class="card-body ">

                        <h3 class="special-radius z-3 position-relative fw-bold mx-auto pb-5"
                            style="width: fit-content;--color-default:#00EAD1">
                            {{__('home.prop-subtitle-3')}}
                        </h3>

                        <p class="lh-lg text-muted">
                            {{__('home.prop-content-3')}}
                        </p>

                    </div>
                </div>
            </div> <!-- HERE ENDS THE FIRSTS  CARD-->


            <div class="col-md-6 col-lg-4">
                <div class="card border-0 rounded-5 p-3 text-center shadow-sm">
                    <div class="card-body ">

                        <h3 class="special-radius z-3 position-relative fw-bold mx-auto pb-5"
                            style="width: fit-content;--color-default:#9DCBE8">
                            {{__('home.prop-subtitle-2')}}
                        </h3>

                        <p class="lh-lg text-muted">
                            {{__('home.prop-content-2')}}
                        </p>

                    </div>
                </div>
            </div>  <!-- HERE ENDS THE SECOND  CARD-->


            <div class="col-md-6 col-lg-4">
                <div class="card border-0 rounded-5 p-3 text-center shadow-sm">
                    <div class="card-body ">

                        <h3 class="special-radius z-3 position-relative fw-bold mx-auto pb-5"
                                style="width: fit-content;--color-default:#FAA6A4">
                                {{__('home.prop-subtitle-1')}}
                        </h3>

                        <p class="lh-lg text-muted">
                                {{__('home.prop-content-1')}}
                        </p>

                    </div>
                </div>
            </div>   <!-- HERE ENDS THE THIRD  CARD-->

        </div>
    </div>
</section>

    <div class="spikes">
    </div>  <!-- HERE ENDS THE DECO-->
    <!--HERE Ends properties -->

{{--Start TESTIMONIALS    --}}

{{--    <div class="container my-3">--}}
{{--        <div class="row">--}}
{{--            <div class="owl-carousel owl-theme">--}}
{{--                <div class="item"><div class="card">--}}
{{--                     <div class="">--}}
{{--                         <p>jdjdjdjdjjdj</p>--}}
{{--                     </div>--}}

{{--                     <div class="item"><h4>2</h4></div>--}}
{{--                     <div class="item"><h4>3</h4></div>--}}
{{--                     <div class="item"><h4>4</h4></div>--}}
{{--                     <div class="item"><h4>5</h4></div>--}}
{{--                     <div class="item"><h4>6</h4></div>--}}
{{--                     <div class="item"><h4>7</h4></div>--}}
{{--                     <div class="item"><h4>8</h4></div>--}}
{{--                     <div class="item"><h4>9</h4></div>--}}
{{--                     <div class="item"><h4>10</h4></div>--}}
{{--                     <div class="item"><h4>11</h4></div>--}}
{{--                     <div class="item"><h4>12</h4></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

            {{--ENDS TESTIMONIALS    --}}

    <!--Start Photos -->

<section class="photos py-5 my-5">
    <div class="container">

        <h3 class="special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5"
            style="width: fit-content;--color-default:#F0CE9E">
            {{__('home.gallery-title')}}
        </h3> <!-- HERE ENDS THE SPECIAL TITLE-->

        <div class="row g-4">

            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/7.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/6.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/9.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/10.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5 ">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/11.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/12.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/13.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/14.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5 ">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/15.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/16.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/22.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5">
            </div>


            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="{{asset('imgs/18.jpg')}}"
                     alt=""
                     class="img-fluid rounded-5 ">
            </div>
        </div>
    </div>
</section>    <!--HERE ENDS  Photos -->


    <!--Start Join -->

<section class="join text-light py-5 my-5"
         style="background-image: url('imgs/join-us.svg');
                background-size: cover">  <!-- ILLUSTRATION-->

    <div class="container vstack gap-4 py-5">

        <h3 class="text-center display-5 fw-bold">
            {{__('home.join-title')}}
        </h3>

        <p class="display-6 text-center">
            {{__('home.join-subtitle')}}
        </p>

        <a href="#"
           class="btn btn-light rounded-pill mx-auto d-block px-5">
            {{__('home.join-btn')}}
        </a>
    </div>
</section>   <!--HERE ENDS Join -->


<!-- Start Enjoy -->

<section class="enjoy py-5">
    <div class="container">
        <h5 class="lh-lg mb-5 mx-auto text-center fs-4">
                {{__('home.enjoy-title')}}
        </h5>

        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 order-lg-0 order-1">

                <div class="row gy-5 gy-md-0">

                    <div class="col-md-6 ">
                        <div class="d-flex justify-content-between flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">

                            <i class="fa fa-light fa-joystick fa-3x me-0 me-md-4 mb-md-0 mb-3"></i>
                            <span>

                                <h5 class="fw-bold">
                                    {{__('home.enjoy-subtitle-1')}}
                                </h5>
                                <p class="text-muted">
                                    {{__('home.enjoy-content-1')}}
                                </p>

                            </span>
                        </div>
                    </div>


                    <div class="col-md-6 ">
                        <div class="d-flex justify-content-between flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">

                            <i class="fa fa-light fa-stairs fa-3x me-0 me-md-4 mb-md-0 mb-3"></i>
                            <span>

                                <h5 class="fw-bold">
                                    {{__('home.enjoy-subtitle-2')}}
                                </h5>

                                <p class="text-muted">
                                    {{__('home.enjoy-content-2')}}
                                </p>

                            </span>
                        </div>
                    </div>


                    <div class="col-md-6 ">
                        <div class="d-flex justify-content-between flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                            <i class="fa fa-light fa-bullseye fa-3x me-0 me-md-4 mb-md-0 mb-3"></i>
                            <span>

                                <h5 class="fw-bold">
                                    {{__('home.enjoy-subtitle-3')}}
                                </h5>

                                <p class="text-muted">
                                    {{__('home.enjoy-content-3')}}
                                </p>

                            </span>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col-md-12 col-lg-5 order-lg-1 order-0">
                    <img src="{{asset('imgs/footer.svg')}}"
                         alt="Illustrattion"
                         class="img-fluid">
                </div> <!-- ILLUSTRATION-->
        </div>
    </div>
</section>     <!-- End Enjoy -->

@endsection
