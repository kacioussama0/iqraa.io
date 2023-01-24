<!doctype html>
<html lang="{{session()->get('locale')}}" dir="@if(session()->get('locale') == 'ar'){{'rtl'}}@else{{'ltr'}}@endif">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('imgs/icon.ico')}}">
    <meta name="description" content="geneva school iqraa teaches arabic language and quran and islam ">
    <meta property="og:description" content="Switzerland school iqraa teaches arbic language and quran and islam">
    <meta property="og:type" content="website">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('imgs/iqraa.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إقرأ | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">


    @if(session()->get('locale') == 'ar')
        <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/master.css')}}">

    @yield('style')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelector('.owl-carousel').owlCarousel({

            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })

    </script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
    />




    <script>
        $(window).on('load',function(){
            $('.loading-page').fadeOut();
            $('body').removeClass('overflow-hidden');
            $('.loading-page').addClass('d-none');



        });
    </script>

</head>
<body class="overflow-hidden">

@include('components.loader')


<!--Start Header -->

<header class="position-relative landing-page @if(request()->is('/')) vh-100    @endif">









    <nav class="navbar navbar-expand-lg navbar-dark  @if(!request()->is('/')) bg-primary bg-opacity-100 @endif" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('imgs/logo.svg')}}" alt="" style="width: 55px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasBottom" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-light fa-bars" style="font-size: 22px"></i>
            </button>




            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">{{__('app.home.php')}}</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle active " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('app.about')}}
                        </a>
                        <ul class="dropdown-menu border-0 bg-opacity-50 ">
                            <li><a class="dropdown-item " href="{{url('faq')}}#headingOne" >{{__('app.about-us')}}</a></li>
                            <li><a class="dropdown-item " href="{{url('conditions-joins')}}">{{__('app.conditions-to-join')}}</a></li>
                            <li><a class="dropdown-item " href="{{url('structure')}}">{{__('app.structure')}}</a></li>
                            <li><a class="dropdown-item " href="#">{{__('app.law')}}</a></li>

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/gallery')}}">{{__('app.gallery')}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('school-news')}}">{{__('app.school-news')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('contact-us')}}">{{__('app.contact-us')}}</a>
                    </li>

                    <li class="nav-item" >
                        @if(session()->get('locale') == 'ar')
                            <a class="nav-link active" href="{{url('change-language/fr')}}"> <i class="fi fi-fr"></i></a>
                        @else
                            <a class="nav-link active" href="{{url('change-language/ar')}}"> <i class="fi fi-sa"></i></a>
                        @endif
                    </li>



                    @auth

                    <li class="nav-item p-0">
                        <button class="border-0 p-2 bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class=" fa-regular fa-user"></i>
                        </button>
                    </li>

                    @endauth

                </ul>



            </div>



        </div>
    </nav>


    @auth
    <div class="collapse text-bg-light   navbar-expand-lg z-3 position-relative" style="z-index: 99999" id="navbarToggleExternalContent">
        <div class="p-2">
            <div class="container">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">{{__('app.user')}}<i class=" fa-light fa-users fa-1x ms-2"></i></a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('categories.index')}}">{{__('app.catergory')}}<i class=" fa-light fa-tag fa-1x ms-2"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">{{__('app.article')}}<i class=" fa-light fa-paperclip fa-1x ms-2"></i></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#logout-form"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{__('app.logout')}}<i class="fa-light fa-arrow-right-from-bracket fa-1x ms-2"></i></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>

                </ul>

            </div>
        </div>
    </div>

    @endauth

    @if(!request()->is('/'))

        <div class="shapedividers_com-8481 bg-primary d-flex align-items-center justify-content-center" style="height: 290px">
            <h1 class="container fw-bolder mb-0 text-center text-light">@yield('title')</h1>
        </div>


    @endif

    @yield('landing-page')



    <div class="offcanvas offcanvas-start text-bg-primary text-light  w-100" tabindex="-1" id="sidebar" aria-labelledby="sidebar">
        <div class="offcanvas-header justify-content-end p-3 container">
            <i class="fa-light fa-xmark fa-x" style="font-size: 22px" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>


        <div class="offcanvas-body small text-center" style="font-size: 18px">

            <a href="/">
            <img src="{{asset('imgs/logo.svg')}}" alt="" class="img-fluid mb-3" style="width: 100px">
            </a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">{{__('app.home.php')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">{{__('app.about')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{url('conditions-joins')}}">{{__('app.conditions-to-join')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{url('gallery')}}">{{__('app.gallery')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{url('structure')}}">{{__('app.structure')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{url('school-news')}}">{{__('app.school-news')}}</a>
                </li>

                <li class="nav-item" >
                    @if(session()->get('locale') == 'ar')
                        <a class="nav-link active" href="{{url('change-language/fr')}}"> <i class="fi fi-fr"></i></a>
                    @else
                        <a class="nav-link active" href="{{url('change-language/ar')}}"> <i class="fi fi-sa"></i></a>
                    @endif
                </li>

            </ul>




        </div>


        <div class="shapedividers_com-8481 py-3 " style="height: 100px"></div>

    </div>


</header>

<!--End Header -->


@yield('content')

@yield('script')
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>





<!-- Start Footer -->

<div class="shapedividers_com-1552 bg-primary py-3" style="height: 100px"></div>

<footer class="text-bg-primary  py-5" >


    <div class="container">

        <div class="row  align-items-center text-center text-sm-start">

            <div class="col-md-4">
                <h5 class="mb-3 text-light fs-4">{{__('app.shortcuts')}}</h5>
                <ul class="list-unstyled m-0 p-0 vstack gap-1">
                    <li><a href="{{url('/')}}" class="text-decoration-none link-light text-light">{{__('app.home.php')}}</a></li>
                    <li><a href="{{url('gallery')}}" class="text-decoration-none link-light text-light">{{__('app.gallery')}}</a></li>
                    <li><a href="{{url('faq')}}" class="text-decoration-none link-light text-light">{{__('app.faq')}}</a></li>
                    <li><a href="{{url('contact-us')}}" class="text-decoration-none link-light text-light">{{__('app.contact-us')}}</a></li>
                    <li><a href="" class="text-decoration-none link-light text-light">{{__('app.act')}}</a></li>
                    <li><a href="" class="text-decoration-none link-light text-light"></a></li>
                </ul>

            </div>

            <div class="col-md-8">

                <h5 class="mb-3 display-6 text-light">{{__('app.descrip')}}</h5>

                <p class="text-light fw-lighter">{{__('app.descrip-content')}}</p>

            </div>


        </div>

        <div class="row align-items-center mt-3 ">
            <div class="col-md-1 col-3  mb-3 mb-md-0  justify-content-md-start">
                <img src="imgs/logo.svg" alt="iqraa" href="{{url('/')}}" class="img-fluid">

            </div>

            <div class="col-md-6 text-light align-self-center text-center text-md-start">{{__('app.all-rights-reserved')}} &copy {{date('Y')}}</div>

            <div class="d-flex align-items-center col-md-5 justify-content-lg-end justify-content-center">
                <a href="https://www.facebook.com/MEDIA.EOIC/" target="_blank" class="me-3 text-light" ><i class="fa-brands fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/eoic_geneva/" target="_blank" class="me-3 text-light" ><i class="fa-brands fa-instagram fa-2x"></i></a>
                <a href="https://www.youtube.com/channel/UCi_iTZfHrRN19Wtwo4vM4EA?view_as=subscriber" target="_blank" class="me-3 text-light" ><i class="fa-brands fa-youtube fa-2x"></i></a>

                <a href="https://twitter.com/EOIC_Geneva" target="_blank" class="me-3 text-light" ><i class="fa-brands fa-twitter fa-2x"></i></a>
            </div>

        </div>


    </div>



</footer>


<!-- End Footer -->

</html>

