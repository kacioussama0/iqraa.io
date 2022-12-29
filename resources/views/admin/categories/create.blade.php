@extends('layout.app')
@section('title','إضافة تصنيف')


@section('content')

    <section class="create-category py-5">

        <div class="container">

            <div class="card">

                <div class="card-body">

                    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <div class="form-group">
                            <label for="name">إسم التصنيف</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">صورة التصنيف</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <button class="btn btn-lg btn-dark mt-3 w-100">إضافة</button>


                    </form>


                </div>


            </div>


        </div>


    </section>


@endsection
