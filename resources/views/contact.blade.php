@extends('layout.app')
@section('title',__('contact.contact-us'))


@section('style')
    @livewireStyles
@endsection

@section('content')


<section class="contact-us py-5">
    <div class="container">
        <div class="row my-5 g-3">

            <div class="col-md-4">
                 <div class="card rounded-5 border-0 shadow-sm">
                     <div class="card-body p-5 text-center vstack gap-4 align-items-center">
                         <i class="fa fa-light fa-location-dot fa-5x"></i>

                         <p class="text-muted">
                            <a href="https://goo.gl/maps/LjxSHwTorzeNG9n87"
                               class="text-decoration-none text-dark"
                               target="_blank">34 chemin Colladon 1209 Genève Suisse Bus 3, arrêt Colladon</a>
                         </p>
                     </div>
                </div>
            </div>   {{--HERES ENDS LOCATION CARD--}}


            <div class="col-md-4">
                 <div class="card rounded-5 border-0 shadow-sm">

                       <div class="card-body p-5 text-center vstack gap-4 align-items-center">
                           <i class="fa fa-light fa-phone fa-5x"></i>
                           <p class="fs-3 text-muted">41799653711+</p>
                       </div>
                 </div>
            </div>   {{--HERES ENDS PHONE CARD--}}


            <div class="col-md-4">
                  <div class="card rounded-5 border-0 shadow-sm">
                       <div class="card-body p-5 text-center vstack gap-4 align-items-center">
                            <i class="fa fa-light fa-envelope fa-5x"></i>

                            <p class="fs-3 text-muted ">
                               <a href="mailto:Madrassa@fcigeneve.ch "
                                  class="text-decoration-none text-dark">Madrassa@fcigeneve.ch</a>
                            </p>
                       </div>
                  </div>
            </div>  {{--HERES ENDS EMAIL CARD--}}
        </div>  {{--HERES ENDS UPPER CARDS--}}


        {{--HERES START LIVEWIRE CONTACT--}}

        <div class="row my-5 align-items-center">
                <div class="col-md-5">

                    <div class="card border-0">
                        <div class="card-body">
                            @livewire('contact')
                        </div>
                    </div>
                </div>

            {{--CONATACT ILLUSTRATION--}}

                <div class="col-md-7">
                    <img src="{{asset('imgs/illustration/contact-us.svg')}}" alt="">
                </div>

            {{--CONATACT ILLUSTRATION--}}

        </div>  {{--HERES ENDS LIVEWIRE CONTACT--}}
    </div>
</section>

@endsection


@section('script')
    @livewireScripts
@endsection
