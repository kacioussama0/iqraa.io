@extends('layout.app')
@section('title',__('home.gallery-title'))


@section('content')


    <!--Start Photos -->

    <section class="photos py-5 my-5">


        <div class="container ">
                <div class="d-flex justify-content-end mx-auto mb-4">

                     <i class="btn btn-dark ms-2 rounded-circle fa-thin fa-video fa-4x align-self-end p-3"></i>
                     <i class="btn btn-dark ms-2 rounded-circle fa-thin fa-image fa-4x align-self-end p-3 "></i>
                </div>
            <div class="row g-4">

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/7.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/8.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/9.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/10.jpg')}}" alt="" class="img-fluid rounded-5 ">
                </div>


                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/11.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/12.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/13.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/14.jpg')}}" alt="" class="img-fluid rounded-5 ">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/15.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/16.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/22.jpg')}}" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="{{asset('imgs/18.jpg')}}" alt="" class="img-fluid rounded-5 ">
                </div>

            </div>

        </div>




    </section>



    <!--End Photos -->




@endsection


