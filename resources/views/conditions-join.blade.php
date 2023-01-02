@extends('layout.app')
@section('title',__('condition.condi-title'))

@section('content')

    <section class="conditions py-5">


        <div class="container">


            <div class="row my-5  align-items-center">

                <div class="col-md-5">


                        <div class="alert alert-secondary p-0 border-start border-0 border-secondary rounded border-5 py-1 ">
                            <div class="p-3">
                                <h3>{{__('condition.condition-notice')}}</h3>
                                <p>{{__('condition.condition-content')}}</p>
                                <p>{{__('condition.condition-notice-con')}}</p>
                            </div>
                        </div>

                </div>
                <div class="col-md-4 offset-md-2 order-first order-lg-last">
                    <img src="{{asset('imgs/illustration/register.svg')}}" alt="">
                </div>
            </div>

            <div class="row justify-content-between gy-5 gy-lg-0">

                <div class="col-md-3">
                    <div class="card rounded-5 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fa-thin fa-file fa-6x"></i>
                            <h4 class="mt-5 text-muted" >{{__('condition.condi-require-1')}}</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card rounded-5 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fa-thin fa-user fa-6x"></i>
                            <h4 class="mt-5 text-muted">{{__('condition.condi-require-2')}}</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card rounded-5 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fa-thin fa-id-card-alt fa-6x"></i>
                            <h4 class="mt-5 text-muted">{{__('condition.condi-require-3')}}</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>

    <section class="request-info py-5">


        <div class="container">

            <h2 class="text-center special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5" style="width: fit-content">{{__('condition.condi-title-1')}}</h2>

            <div class="row my-5 align-items-center">

                <div class="col-md-6">

                    <ol class="vstack gap-3">
                        <li class="lh-lg">{{__('condition.condi-content-1')}}</li>
                        <li class="lh-lg">{{__('condition.condi-content-2')}}</li>
                        <li class="lh-lg">{{__('condition.condi-content-3')}}</li>
                        <li class="lh-lg">{{__('condition.condi-content-4')}}</li>
                        <li class="lh-lg">{{__('condition.condi-content-5')}}</li>
                    </ol>


                    <div class="alert alert-secondary p-0 border-start border-0 border-secondary rounded border-5 py-1 ">
                        <div class="p-3">
                            <h3>{{__('condition.condition-notice-2')}}</h3>
                            <p>{{__('condition.condition-notice-con-2')}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 order-first order-lg-last">
                    <img src="{{asset('imgs/illustration/to do.svg')}}" alt="">



                </div>

            </div>


                <div class="row align-items-center p-0" id="activities">
                    <div class="col-lg-6 order-last order-lg-last">
                        <div class="card py-5 border-0 text-center text-lg-start">
                            <div class="card-body vstack gap-3 ">
                                <h4>{{__('condition.condi-title-3')}}</h4>
                                <p class="text-muted lh-lg">{{__('condition.condi-content-6')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('imgs/illustration/autobus.svg')}}" alt="" class="img-thumbnail border-0 rounded-5  ">
                    </div>
                </div>

        </div>



    </section>

@endsection
