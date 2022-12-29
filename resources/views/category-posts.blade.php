@extends('layout.app')
@section('title',$cat->name)


@section('content')

{{-- START SCHOOL NEWS --}}

<section class="py-5 my-5">


    <div class="container">

        <div class="row gy-5 justify-content-center justify-content-sm-between">


            <a href="{{url('school-news')}}" class="btn btn-lg text-light btn-primary w-100">الرجوع للتصنيفات</a>

            @foreach($cat -> posts as $post)

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-5 overflow-hidden ">



                        <div class="card-body p-0">

                            <img src="{{asset('storage/' . $post->image)}}" alt="" class="img-fluid object-fit-cover">

                        </div>

                        <div class="card-footer  bg-transparent border-0 text-center text-primary py-3">
                            <p class=" text-muted" style="font-size: 14px">{!! Str::limit(strip_tags($post -> content) ,200)!!}</p>

                            <a href="{{url('school-news/' . $post -> category -> slug     . '/' . $post -> slug)}}" class="link-primary  text-decoration-none stretched-link">إقرأ المزيد</a>
                        </div>

                        <div class="badge bg-primary py-3">
                            <h5 class="mb-0">{{$post -> title}}</h5>
                        </div>

                    </div>
                </div>

            @endforeach







        </div>

    </div>




</section>


{{-- END SCHOOL NEWS --}}


@endsection


