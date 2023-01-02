@extends('layout.app')
@section('title',__('travel.title'))


@section('content')

    <!--Start Activities -->


    <section class="activities py-5 my-5" >


        <div class="container">

            <h3 class="special-radius z-3 position-relative w-50 text-center fw-bold mx-auto mb-5 pb-5" style="width: fit-content">{{__('travel.travel-title')}}</h3>

            <div class="row align-items-center" id="activities">
                <div class="col-lg-7  col-xl-6 order-last order-lg-first">
                    <div class="card py-5  border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 px-0 px-md-3 text-center text-xl-start">
                            <p class="text-muted text-center text-lg-start">{{__('travel.travel-content')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <img src="{{asset('imgs/illustration/schooltrip.svg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>



            <div class="row  align-items-center ">
                <div class="col-lg-7  col-xl-6 order-last ">
                    <div class="card py-5 border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 text-center text-xl-start">
                            <h4 class="text-xl-center">{{__('travel.travel-subtitle-1')}}</h4>
                            <p class="text-muted text-center text-lg-start ">
                                        {{__('travel.travel-content-1')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  col-xl-6">
                    <img src="{{asset('imgs/illustration/Trip-amico.svg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>


            <div class="row align-items-center ">
                <div class="col-lg-7  col-xl-6  order-last order-lg-first">
                    <div class="card py-5 border-0 ">
                        <div class="card-body vstack gap-3 text-center text-xl-start">
                            <h4 class="text-xl-center">{{__('travel.travel-subtitle-2')}}</h4>
                            <p class="text-muted text-center text-lg-start">
                                {{__('travel.travel-content-2')}}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5  col-xl-6  ">
                    <img src="{{asset('imgs/illustration/qst mark.svg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>

            <div class="row align-items-center ">
                <div class="col-lg-7  col-xl-6 order-last ">
                    <div class="card py-5 border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 text-center text-xl-start">
                            <h4 class="text-xl-center">{{__('travel.travel-subtitle-3')}}</h4>
                            <p class="text-muted text-center text-lg-start ">
                                {{__('travel.travel-content-3')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <img src="{{asset('imgs/illustration/goals.svg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>


            <div class="row align-items-center ">
                <div class="col-lg-7 col-xl-6 order-last order-lg-first">
                    <div class="card py-5 border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 text-center text-xl-start">
                            <h4 class="text-xl-center">{{__('travel.travel-subtitle-4')}}</h4>
                            <p class="text-muted text-center text-lg-start">
                                {{__('travel.travel-content-4')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  col-xl-6">
                    <img src="{{asset('imgs/illustration/travel.svg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>



        </div>


    </section>

    <!--End Activities -->



@endsection


