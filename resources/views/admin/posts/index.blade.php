@extends('layout.app')
@section('title','كل المقالات')


@section('content')

    <section class="all-categories py-5">

        <div class="container">

            <a href="{{route('posts.create')}}" class="btn btn-lg text-light my-5 btn-primary">إضافة مقال</a>


            @include('layout.success')

    @if(count($posts))


            <div class="table-responsive rounded">


                <table class="table table-primary">
                    <thead>
                    <tr>
                        <th scope="col">العنوان</th>
                        <th scope="col">الصورة</th>
                        <th scope="col">تمت الإضافة</th>
                        <th scope="col">تم التعديل</th>
                        <th scope="col">الإجراءات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($posts as $post)

                        <tr class="align-middle">
                            <th scope="row">{{$post->title}}</th>
                            <td>
                                <img src="{{asset('storage/'. $post->image)}}" alt="" class="img-fluid rounded" style="width: 150px">
                            </td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>

                            <td>

                                <a href="{{route('posts.edit',$post)}}" class="btn btn-lg btn-primary">تعديل</a>

                                <form action="{{route('posts.destroy',$post)}}" method="POST" class="d-inline-block" onsubmit="return confirm('هل أنت متأكد')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-lg btn-danger">حذف</button>
                                </form>

                            </td>

                        </tr>

                    @endforeach

                    </tbody>
                </table>


            </div>

        @else

            @include('layout.empty')

        @endif
        </div>


    </section>

@endsection
