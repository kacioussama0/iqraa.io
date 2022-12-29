@extends('layout.app')
@section('title','كل التصنيفات')


@section('content')

    <section class="all-categories py-5">

        <div class="container">

            <a href="{{route('categories.create')}}" class="btn btn-lg text-light my-5 btn-primary">إضافة تصنيف</a>


            @include('layout.success')

    @if(count($categories))


            <div class="table-responsive rounded">


                <table class="table table-primary">
                    <thead>
                    <tr>
                        <th scope="col">الإسم</th>
                        <th scope="col">الصورة</th>
                        <th scope="col">تمت الإضافة</th>
                        <th scope="col">تم التعديل</th>
                        <th scope="col">الإجراءات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)

                        <tr class="align-middle">
                            <th scope="row">{{$category->name}}</th>
                            <td>
                                <img src="{{asset('storage/'. $category->image)}}" alt="" class="img-fluid rounded" style="width: 150px">
                            </td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>

                            <td>

                                <a href="{{route('categories.edit',$category)}}" class="btn btn-lg btn-primary">تعديل</a>

                                <form action="{{route('categories.destroy',$category)}}" method="POST" class="d-inline-block" onsubmit="return confirm('هل أنت متأكد')">
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
