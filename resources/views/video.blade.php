@extends('layout.app')
@section('title',__('الفيديوهات'))


@section('content')


    <!--Start Videos -->

    <section class="photos py-5 my-5 container">


        <div >
            <div class="d-flex justify-content-end mx-auto mb-4">

                <a href="{{url('video')}}"> <i class="btn btn-dark ms-2 rounded-circle fa-thin fa-video fa-4x align-self-end p-3"></i>
                </a>

                <a href="{{url('gallery')}}"> <i class="btn btn-dark ms-2 rounded-circle fa-thin fa-image fa-4x align-self-end p-3 "></i>
                </a>

            </div>

            <div class=" row gap-2 ">

                <div class=" col-md-6 col-lg-3 border rounded p-0">
                    <video class="img-fluid" autoplay loop muted>
                        <source
                            src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
                            type="video/mp4"
                        />
                    </video>
                </div>


                <div class="col-md-6 col-lg-3 border rounded p-0" >
                    <video class="img-fluid"  autoplay loop muted>
                        <source
                            src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
                            type="video/mp4"
                        />
                    </video>
                </div>


                <div class="col-md-6 col-lg-3 border rounded p-0">
                    <video class="img-fluid"  autoplay loop muted>
                        <source
                            src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
                            type="video/mp4"
                        />
                    </video>
                </div>


                <div class="col-md-6 col-lg-3 border rounded p-0">
                    <video class="img-fluid"  autoplay loop muted>
                        <source
                            src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
                            type="video/mp4"
                        />
                    </video>
                </div>



            </div>

        </div>




        <div class="body-card border rounded ">
            <div>
                <img src="{{asset('imgs/1.jpg')}}" alt="">
            </div>
        </div>




    </section>



    <!--End videos -->




@endsection


