
@extends('layout.app')
@section('title','صفحة غير موجودة')



@section('content')

    <div class="container text-center py-5 ">
        <img src="{{asset('/imgs/illustration/404 Error with a cute animal-bro.svg')}}" alt="" style="max-width: 200px" class="mb-3" >
        <h3 class="w-50 py-3 mb-3">التصميم هو رحلة إستكشافية، لذا أحيانا نضيع، لكن كل شيئ على مايرام.</h3>
        <a class="btn btn-outline-primary border-0 btn-lg" href="{{url('/')}}">رجوع للموقع</a>

    </div>
@endsection


