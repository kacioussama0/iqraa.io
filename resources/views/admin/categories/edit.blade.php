@extends('layout.app')
@section('title','تعديل تصنيف')


@section('content')


    <section class="edit-category py-5">

        <div class="container">

            <div class="card">

                <div class="card-body">

                    <form action="{{route('categories.update',$category)}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">إسم التصنيف</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <img src="{{asset('storage/'. $category->image)}}" alt="" class="img-fluid rounded my-5" style="width: 200px">


                        <div class="form-group">
                            <label for="image">صورة التصنيف</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <button class="btn btn-lg btn-dark mt-3 w-100">تعديل</button>


                    </form>


                </div>


            </div>


        </div>


    </section>


@endsection
