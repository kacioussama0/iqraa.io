@extends('layout.app')
@section('title',__('الفيديوهات'))


@section('content')


    <!--Start Photos -->

    <section class="photos py-5 my-5">


        <div class="container ">
            <div class="d-flex justify-content-end mx-auto mb-4">

                <a href="{{url('video')}}"> <i class="btn btn-dark ms-2 rounded-circle fa-thin fa-video fa-4x align-self-end p-3"></i>
                </a>
                <a href="{{url('gallery')}}"> <i class="btn btn-dark ms-2 rounded-circle fa-thin fa-image fa-4x align-self-end p-3 "></i>
                </a>
            </div>


            <div class="row g-4">


                    <video src="https://youtu.be/OFaRbb5wu1k" type="mp4" class="col-sm-6 col-md-4 col-lg-3 object-fit-xxl-contain border rounded" autoplay></video>

                    <video src="https://www.youtube.com/watch?v=X9V1S8wtrNk" class="col-sm-6 col-md-4 col-lg-3 object-fit-xxl-contain border rounded" autoplay></video>

                    <video src="https://youtu.be/OFaRbb5wu1k" class="col-sm-6 col-md-4 col-lg-3 object-fit-xxl-contain border rounded" autoplay></video>

                    <video src="https://youtu.be/OFaRbb5wu1k" class="col-sm-6 col-md-4 col-lg-3 object-fit-xxl-contain border rounded" autoplay></video>



            </div>

        </div>




    </section>



    <!--End Photos -->




@endsection


