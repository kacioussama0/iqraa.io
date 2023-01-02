
@extends('layout.app')
@section('title', __('error-404.title'))



@section('content')

    <div class="container text-center py-5 ">
        <img src="{{asset('/imgs/illustration/404 Error with a cute animal-bro.svg')}}" alt="" style="max-width: 200px" class="mb-3" >
        <h3 class=" py-3 mb-3  mx-auto text-dark">{{__('error-404.msg')}}</h3>
        <a class="btn btn-outline-primary border-0 btn-lg" href="{{url('/')}}">{{__('error-404.back')}}</a>

    </div>
@endsection


