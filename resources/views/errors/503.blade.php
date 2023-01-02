@extends('layout.app')
@section('title',__('error-503.title'))


@section('content')


    <div class="position-absolute top-50 start-50 translate-middle w-100 text-center ">
        <img src="{{asset('/imgs/illustration/503 Error Service Unavailable-cuate.svg')}}" alt="" style="max-width: 200px" class="mb-3" >
        <h3 class="display-2 py-3 mb-3">{{__('error-503.msg')}}</h3>


    </div>


@endsection


