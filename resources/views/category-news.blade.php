@extends('layout.app')
@section('title','أخبار المدرسة')


@section('content')

{{-- START SCHOOL NEWS --}}

<section class="py-5 my-5">


    <div class="container">

        <div class="row gy-5 justify-content-center justify-content-sm-between">





            <div class="col-sm-5 col-md-4 col-lg-1 rounded shadow-sm text-center mx-lg-4 mx-sm-auto position-relative" style="width: 12rem;height:18rem; ">
                  <a href="{{url('post-news')}}" class="text-decoration-none">  <h5 class="my-3 display-5">الرحلات</h5> </a>
                    <p class="text-muted position-absolute bottom-0">5 المقالات</p>
            </div>


            <div class="col-sm-5 col-md-4 col-lg-1  rounded shadow-sm text-center mx-lg-4 mx-sm-auto position-relative" style="width: 12rem;height:18rem; ">
                <a href="{{url('post-news')}}"  class="text-decoration-none">  <h5 class="my-3 display-5">أخبار</h5> </a>
                <p class="text-muted position-absolute bottom-0">5 المقالات</p>
            </div>

            <div class="col-sm-5 col-md-4 col-lg-1 rounded shadow-sm text-center mx-lg-4 mx-sm-auto position-relative" style="width: 12rem;height:18rem; ">
                <a href="{{url('post-news')}}"  class="text-decoration-none">  <h5 class="my-3 display-5">المدرسة</h5> </a>
                <p class="text-muted position-absolute bottom-0">5 المقالات</p>
            </div>

            <div class="col-sm-5 col-md-4 col-lg-1  rounded shadow-sm text-center mx-lg-4 mx-sm-auto position-relative" style="width: 12rem;height:18rem; ">
                <a href="{{url('post-news')}}"  class="text-decoration-none">  <h5 class="my-3 display-5">شؤون</h5> </a>
                <p class="text-muted position-absolute bottom-0">5 المقالات</p>
            </div>

        </div>

    </div>




</section>


{{-- END SCHOOL NEWS --}}


@endsection


