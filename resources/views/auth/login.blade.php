@extends('layout.app')
@section('title','تسجيل الدخول')

@section('content')
<div class="container py-5 ">
    <div class="row justify-content-center align-items-center">


        <div class="col-md-6">

            <img src="{{asset('imgs/illustration/login.svg')}}" alt="" class="img-fluid">

        </div>

        <div class="col-md-6">
            <div class="card  border-0">


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">


                            <div class="form-floating">
                                    <input id="email" type="email" placeholder="{{ __('بريد إلكتروني') }}"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <label for="floatingInput"> <i class="fa-thin fa-envelope mx-2"> </i>{{ __('بريد إلكتروني') }} </label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-floating mb-3">

                                <input id="password" type="password" placeholder="{{ __('كلمة المرور') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label for="floatingInput"> <i class="fa-thin fa-lock"></i> {{ __('كلمة السر') }} </label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                      </div>

                        <div class="row mb-3 p-3">

                                <div class="form-check col-6 ">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-muted" for="remember">
                                        {{ __('تذكرني') }}
                                    </label>
                                </div>
                            <div class="col-6 text-end p-0 ">
                                @if (Route::has('password.request'))
                                    <a class="btn btn border-0 text-primary py-0 px-0" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمة السر ?') }}
                                    </a>
                                @endif
                            </div>
                        <div class="row my-3 mx-0 p-0 ">
                            <div class="p-0">
                                <button type="submit" class="btn btn-primary rounded-pill text-light w-100">
                                    {{ __('دخول') }}
                                </button>
                        </div>



                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>
</div>
@endsection
