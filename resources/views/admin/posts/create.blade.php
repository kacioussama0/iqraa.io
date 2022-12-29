@extends('layout.app')
@section('title','إضافة مقال')


@section('content')

    <section class="create-category py-5">

        <div class="container">

            <div class="card">

                <div class="card-body">

                    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <div class="form-group">
                            <label for="title" class="form-label">العنوان</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category" class="form-label">التصنيف</label>

                            <select name="category" id="category" class="form-select">
                                <option value="" disabled selected >إختر تنصيف</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"  @if(old('category')) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>

                            @error('category')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class="form-label">صورة المقال</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="content" class="form-label">المحتوى</label>
                            <textarea name="content" id="content" class="form-control">{!! old('content') !!}</textarea>
                            @error('content')
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


@section('script')

    <script src="{{asset('ckeditor/build/ckeditor.js')}}"></script>


    <script>ClassicEditor
            .create( document.querySelector( '#content' ), {

                licenseKey: '',

                ckfinder: {
                    uploadUrl: "{{route('posts.uploadImage') . '?_token=' . csrf_token()}}",

                }

            } )
            .then( editor => {
                window.editor = editor;




            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: qiybqic1scos-2mtgwv7b85hg' );
                console.error( error );
            } );
    </script>

@endsection

