<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('imgs/icon.ico')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>إقرأ | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">

    @yield('style')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

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
            <a class="navbar-brand" href="#">
                <img src="{{asset('imgs/logo.svg')}}" alt="" style="width: 55px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasBottom" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-light fa-bars" style="font-size: 22px"></i>
            </button>




            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">الرئيسية</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle active " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            عن إقرأ
                        </a>
                        <ul class="dropdown-menu border-0 bg-opacity-50">
                            <li><a class="dropdown-item " href="{{url('faq')}}#headingOne" >من نحن</a></li>
                            <li><a class="dropdown-item " href="{{url('conditions-joins')}}">شروط الإلتحاق</a></li>
                            <li><a class="dropdown-item " href="#">هيكلة المدرسة</a></li>
                            <li><a class="dropdown-item " href="#">قانون</a></li>

                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/gallery')}}">معرض</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('school-news')}}">أخبار المدرسة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('contact-us')}}">تواصلو معنا</a>
                    </li>

                    <li class="nav-item p-0">
                        <button class="border-0 p-2 bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-regular fa-user"></i>
                        </button>
                    </li>



                </ul>

            </div>



        </div>
    </nav>

    <div class="collapse text-bg-light   navbar-expand-lg z-3 position-relative" style="z-index: 99999" id="navbarToggleExternalContent">
        <div class="p-2">
            <div class="container">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">الأعضاء<i class="fa fa-light fa-users fa-1x ms-2"></i></a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('categories.index')}}">التصنيفات<i class="fa fa-light fa-tag fa-1x ms-2"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">المقالات<i class="fa fa-light fa-paperclip fa-1x ms-2"></i></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">خروج<i class="fa-light fa-arrow-right-from-bracket fa-1x ms-2"></i></i></a>
                    </li>

                </ul>

            </div>
        </div>
    </div>

    @if(!request()->is('/'))

        <div class="shapedividers_com-8481 bg-primary d-flex align-items-center justify-content-center" style="height: 290px">
            <h1 class="container fw-bolder mb-0 text-center text-light">@yield('title')</h1>
        </div>


    @endif
    @yield('landing-page')



    <div class="offcanvas offcanvas-start text-bg-primary text-light  w-100" tabindex="-1" id="sidebar" aria-labelledby="sidebar">
        <div class="offcanvas-header justify-content-end p-3 container">
            <i class="fa fa-light fa-xmark fa-x" style="font-size: 22px" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>


        <div class="offcanvas-body small text-center" style="font-size: 18px">

            <img src="{{asset('imgs/logo.svg')}}" alt="" class="img-fluid mb-3" style="width: 100px">


            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">من نحن</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{url('conditions-joins')}}">شروط الإلتحاق</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">معرض</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="#">هيكلة المدرسة</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{url('school-news')}}">أخبار المدرسة</a>
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
                <h5 class="mb-3 text-light">روابط سريعة</h5>
                <ul class="list-unstyled m-0 p-0 vstack gap-1">
                    <li><a href="{{url('/')}}" class="text-decoration-none link-light">الرئيسية</a></li>
                    <li><a href="" class="text-decoration-none link-light">معرض</a></li>
                    <li><a href="{{url('faq')}}" class="text-decoration-none link-light">أسئلة شائعة</a></li>
                    <li><a href="{{url('contact-us')}}" class="text-decoration-none link-light">تواصل معنا</a></li>
                    <li><a href="" class="text-decoration-none link-light">أنشطة</a></li>
                    <li><a href="" class="text-decoration-none link-light"></a></li>
                </ul>

            </div>

            <div class="col-md-8">

                <h5 class="mb-3 text-light">تعريف</h5>

                <p class="text-light">مدرسة جنيف العربية، هي مدرسة بسويسرا تابعة للمؤسسة الثقافية الإسلامية بجنيف، انشئت سنة 1978، ومنذ ذلك تعمل بالتعاون مع جميع عناصر العملية التعليمية (الطاقم الإداري والتربوي والتلاميذ والاولياء) في بيئة آمنة من اجل دعم أبناء الجالية دينيا وتربويا وعقليا وخُلقيا ولغويا ومهارايا؛ وغيرهم من الجاليات غير المسلمة فيما يتعلق باللغة العربية من خلال فريق مؤهل إداريا وتربويا ومعرفيا وفق المعايير المعمول بها في التعليم، في بيئة تتسم بالتعاون والحيوية والتفاعل</p>

            </div>


        </div>

        <div class="row align-items-center mt-3 ">
            <div class="col-md-1 col-3 mb-3 mb-md-0">
                <img src="imgs/logo.svg" alt="" class="img-fluid">

            </div>

            <div class="col-md-6 text-light align-self-center text-center text-md-start">كل الحقوق محفوظة مدرسة إقرأ &copy; 2022</div>

            <div class="d-flex align-items-center col-md-5 justify-content-end">
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

