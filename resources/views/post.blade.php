@extends('layout.app')
@section('title',$catpost -> title)


@section('content')



    <!--Start POST -->


    <section class="post  py-5 my-5" >

        <div class="container">

            <div class=" my-5 border-start border-5 border-primary p-2 bg-primary-subtle d-flex justify-content-between align-items-center">
                <h1>{{$catpost -> title}}</h1>
                <h3 class="mb-0">{{date_format($catpost ->created_at,'Y-m-d')}}</h3>

            </div>


            {!! $catpost -> content !!}

        </div>

    </section>

    <!--End POST -->





@endsection


