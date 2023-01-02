@extends('layout.app')
@section('title',__('faq.faq-title'))

@section('content')

    <section class="conditions py-5">

            <div class="container">

                <div class="row">
                    <div class="col-lg-8 my-5 order-last order-lg-first">
                        <div class="accordion " id="accordionExample">


                            <div class="accordion-item">
                                <h2 class="accordion" id="headingOne">
                                    <button class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{__('faq.about-us')}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">{{__('faq.about-us-cont-1')}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">


                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        {{__('faq.location')}}
                                    </button>
                                </h2>

                                <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">{{__('faq.location-content')}}
                                        </p>
                                    </div>
                                </div>


                            </div>

                            <div class="accordion-item ">
                                <h2 class="accordion-header " id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{__('faq.money-school')}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">{{__('faq.money-school-content')}}

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header " id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        {{__('faq.how-to-login')}}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">{{__('faq.how-to-login-content')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        {{__('faq.school-jobs')}}
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">{{__('faq.school-jobs-content')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        {{__('faq.starting-school')}}
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">{{__('faq.starting-school-content')}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 mx-auto">
                        <img src="{{asset('imgs/illustration/Thinking face-bro.svg')}}" alt="thinking face" class="order-first  py-3 img-fluid">
                    </div>
                </div>



            </div>






    </section>

@endsection
