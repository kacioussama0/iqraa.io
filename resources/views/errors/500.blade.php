@php
    $settings = \App\Models\Setting::first()
@endphp
@extends('blog-layout.app')
@section('title','خطأ')



@section('content')

    <div class="container text-center py-5 ">
        <img src="{{asset('/imgs/illustration/500 Internal Server Error-cuate.svg')}}" alt="" style="max-width: 200px" class="mb-3" >
        <h3 class="display-1 py-3 mb-5">هذا خطأنا ليس خطئك</h3>
        <a class="btn btn-outline-primary border-0 btn-lg" href="{{url('/')}}">رجوع للموقع</a>
    </div>
@endsection


