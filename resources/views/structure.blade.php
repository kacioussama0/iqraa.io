@extends('layout.app')
@section('title',__('structure.structure'))




@section('content')



    <!--START NOTE  -->

    <section class=" py-5 my-5" >


        <div class="container">

            <div class="alert alert-secondary p-0 border-start border-0 border-secondary rounded border-5 py-1 ">
                <div class="p-3">
                    <h3 >{{__('structure.struc-notice')}}</h3>
                    <p>{{__('structure.struc-notice-con')}}</p>
                </div>
            </div>

    <!--END NOTE  -->


            <!--Start STUDENT NATIONALITIES  -->


                <div class="container">

                    <div class="row">
                        <div class="col-lg-8 my-5 order-last order-lg-first">
                            <div class="accordion " id="accordionExample">

                                    <h4 class="py-4 text-center display-5"> {{__('structure.struc-title')}}</h4>

                                <div class="accordion-item">
                                    <h2 class="accordion" id="headingOne">
                                        <button class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{__('structure.struc-subtitle-1')}}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body row justify-content-center text-muted">

                                            <ul class="col-md-4 lh-lg">
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-kw')}}  <span class="fi fi-kw" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-iq')}}  <span class="fi fi-iq" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-sy')}}  <span class="fi fi-sy" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-lb')}}  <span class="fi fi-lb" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-jo')}}  <span class="fi fi-jo" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-ps')}}  <span class="fi fi-ps" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-ye')}}  <span class="fi fi-ye" ></span></li>
                                            </ul>

                                            <ul class="col-md-4 lh-lg ms-lg-4">
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-sd')}}  <span class="fi fi-sd" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-eg')}}  <span class="fi fi-eg" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-ly')}}  <span class="fi fi-ly" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-tn')}}  <span class="fi fi-tn" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-dz')}}  <span class="fi fi-dz" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-ma')}}  <span class="fi fi-ma" ></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-mr')}}  <span class="fi fi-mr" ></span></li>

                                            </ul>


                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">


                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            {{__('structure.struc-subtitle-2')}}
                                        </button>
                                    </h2>

                                    <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body row justify-content-center text-muted">

                                            <ul class="col-md-5 lh-lg">


                                                <li class="row justify-content-between">   {{__('structure.struc-flag-pk')}}  <span class="fi fi-pk  "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-af')}}  <span class="fi fi-af "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-al')}}  <span class="fi fi-al "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-xk')}}  <span class="fi fi-xk "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-sn')}}  <span class="fi fi-sn "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-ng')}}  <span class="fi fi-ng "></span></li>


                                            </ul>

                                            <ul class="col-md-5 lh-lg ms-lg-4">
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-ba')}} <span class="fi fi-ba "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-gn')}} <span class="fi fi-gn "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-so')}} <span class="fi fi-so "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-er')}} <span class="fi fi-er "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-bd')}} <span class="fi fi-bd  "></span></li>
                                                <li class="row justify-content-between">   {{__('structure.struc-flag-tr')}} <span class="fi fi-tr  "></span></li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item ">
                                    <h2 class="accordion-header " id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            {{__('structure.struc-subtitle-3')}}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            <ul class="lh-lg col-11">
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-in')}}<span class="fi fi-in  "></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-cn')}}<span class="fi fi-cn  "></span></li>
                                                <li class="row justify-content-between">  {{__('structure.struc-flag-tg')}}<span class="fi fi-tg  "></span></li>


                                            </ul>

                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 mx-auto">
                            <img src="{{asset('imgs/illustration/nationalities.svg')}}" alt="thinking face" class="order-first  py-3 img-fluid">
                        </div>
                    </div>

                    <!--Start STUDENT NATIONALITIES  -->

        {{--   STATISTIQUE START//// --}}

                    <section class=" py-5">
                        <div class="container">

                            <h5 class="lh-lg mb-5 mx-auto text-center">
                                {{__('structure.struc-stat-title')}}
                            </h5>

                            <div class="row align-items-center">

                                <div class="col-md-12 col-lg-7 order-lg-0 order-1">

                                    <div class="row gy-5 gy-md-0">

                                        <div class="col-md-6 ">
                                            <div class="d-flex  flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                                <i class=" fa-thin fa-graduation-cap fa-3x me-0 me-md-4  mb-md-0 mb-3"></i>
                                                <span>
                                                    <h5 class="fw-bold">{{__('structure.struc-stat-subtitle-1')}}</h5>
                                                    <p class="text-muted">
                                                            {{__('structure.struc-stat-content-1')}}
                                                    </p>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="col-md-6 ">
                                            <div class="d-flex  flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                                <i class=" fa-thin fa-school fa-3x me-0 me-md-4  mb-md-0 mb-3"></i>
                                                <span>
                                                    <h5 class="fw-bold">{{__('structure.struc-stat-subtitle-2')}}</h5>
                                                    <p class="text-muted">
                                                        {{__('structure.struc-stat-content-2')}}
                                                    </p>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="col-md-6 ">
                                            <div class="d-flex  flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                                <i class=" fa-thin fa-apple-whole fa-3x me-0 me-md-5   mb-md-0 mb-3" ></i>
                                                <span>
                                                    <h5 class="fw-bold">{{__('structure.struc-stat-subtitle-3')}} </h5>
                                                    <p class="text-muted">
                                                            {{__('structure.struc-stat-content-3')}}
                                                    </p>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 ">
                                            <div class="d-flex  flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                                <i class=" fa-thin fa-clock fa-3x me-0 me-md-4 mb-md-0 mb-3"></i>
                                                <span>
                                                    <h5 class="fw-bold">{{__('structure.struc-stat-subtitle-4')}} </h5>
                                                    <p class="text-muted">

                                                        {{__('structure.struc-stat-content-4')}}   </p>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 ">
                                            <div class="d-flex  flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                                <i class=" fa-thin fa-chalkboard-user fa-3x me-0 me-md-4 mb-md-0 mb-3"></i>
                                                <span>
                                                    <h5 class="fw-bold">{{__('structure.struc-stat-subtitle-5')}} </h5>
                                                    <p class="text-muted">
                                                             {{__('structure.struc-stat-content-5')}}
                                                    </p>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 ">
                                            <div class="d-flex  flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                                <i class=" fa-thin fa-calendar-days fa-3x me-0 me-md-4   mb-md-0 mb-3"></i>
                                                <span>
                                                    <h5 class="fw-bold">{{__('structure.struc-stat-subtitle-6')}}</h5>
                                                    <p class="text-muted">
                                                               {{__('structure.struc-stat-content-6')}}</p>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="col-md-6 ">
                                            <div class="d-flex  flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                                <i class=" fa-thin fa-books fa-3x me-0 me-md-4   mb-md-0 mb-3"></i>
                                                <span>
                                                    <h5 class="fw-bold">{{__('structure.struc-stat-subtitle-7')}}</h5>
                                                    <p class="text-muted">
                                                                {{__('structure.struc-stat-content-7')}}
                                                    </span>
                                            </div>
                                        </div>





                 </div>


                                </div>
                                <div class="col-md-12 col-lg-5 order-lg-1 order-0">
                                    <img src="{{asset('imgs/illustration/statistic.svg')}}" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </section>


                </div>

        </div>
    </section>

    {{--   STATISTIQUE ENDS HERE//// --}}





@endsection


