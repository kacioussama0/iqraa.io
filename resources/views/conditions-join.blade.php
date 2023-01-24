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
            </div> <!-- HERE ENDS IMPORTANT ALERT -->

                <div class="col-md-4 offset-md-2 order-first order-lg-last">
                    <img src="{{asset('imgs/illustration/register.svg')}}"
                         alt="illustration">
                </div>   <!-- HERE ENDS ILLUSTRATION -->
        </div> <!-- HERE ENDS FIRST ROW -->


        <div class="row justify-content-between gy-5 gy-lg-0">

            <div class="col-md-3">
                <div class="card rounded-5 text-center border-0 shadow-sm">
                    <div class="card-body">

                            <i class="fa-thin fa-file fa-6x"></i>

                            <h4 class="mt-5 text-muted" >
                                {{__('condition.condi-require-1')}}
                            </h4>
                    </div>
                </div>
            </div> <!-- HERE ENDS FIRST CARD -->

            <div class="col-md-3">
                <div class="card rounded-5 text-center border-0 shadow-sm">
                    <div class="card-body">

                            <i class="fa-thin fa-user fa-6x"></i>

                            <h4 class="mt-5 text-muted">
                                {{__('condition.condi-require-2')}}
                            </h4>
                    </div>
                </div>
            </div>  <!-- HERE ENDS SECOND CARD -->

            <div class="col-md-3">
                <div class="card rounded-5 text-center border-0 shadow-sm">
                    <div class="card-body">

                            <i class="fa-thin fa-id-card-alt fa-6x"></i>

                            <h4 class="mt-5 text-muted">
                                {{__('condition.condi-require-3')}}
                            </h4>
                    </div>
                </div>
            </div>  <!-- HERE ENDS THIRD CARD -->

        </div>
    </div>
</section>


<section class="request-info py-5">
    <div class="container">

        <h2 class="text-center special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5"
            style="width: fit-content">
            {{__('condition.condi-title-2')}}
        </h2>   <!-- HERE ENDS TITLE -->

        <!-- HERE STARTS CONDITION CONTENT -->
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

                    <img src="{{asset('imgs/illustration/to do.svg')}}"
                         alt="illustration">
                </div>   <!-- HERE ENDS ILLUSTRATION -->

        </div> <!-- HERE ENDS CONDITION CONTENT -->

    </div>
</section>

@endsection
