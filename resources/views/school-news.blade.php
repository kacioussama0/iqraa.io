@extends('layout.app')
@section('title','أخبار المدرسة')


@section('content')

{{-- START SCHOOL NEWS --}}

<section class="py-5 my-5">


    <div class="container">

        <div class="row gy-5 justify-content-center justify-content-sm-between">




            @foreach($categories as $category)

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-5 overflow-hidden ">



                        <div class="card-body p-0">

                            <img src="{{asset('storage/' . $category->image)}}" alt="" class="img-fluid object-fit-cover">

                        </div>

                        <h3 class="card-footer display-6 bg-transparent border-0 text-center text-primary py-3">
                            <a href="{{url('school-news/' . $category -> slug)}}" class="link-primary text-decoration-none stretched-link">{{$category->name}}</a>
                        </h3>

                        <div class="badge bg-primary py-3">
                            <h5 class="mb-0">المقالات : {{count($category->posts)}}</h5>
                        </div>

                    </div>
                </div>

            @endforeach







        </div>

    </div>




</section>


{{-- END SCHOOL NEWS --}}


@endsection


