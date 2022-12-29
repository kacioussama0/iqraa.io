@extends('layout.app')
@section('title','الرئيسية')


@section('landing-page')



    <video autoplay muted loop  class="position-absolute start-0 top-0 z-n1 w-100 vh-100 object-fit-cover ">
        <source src="{{asset('imgs/landing.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>


    <div class="header-content text-light w-100  position-absolute start-50 top-50 translate-middle text-center">
        <h1 class="mb-5 display-4 text-light fw-bold">مدرسة إقرأ جينيف</h1>


            <div class="row p-0 m-0">

                <h4 class="col-12 col-md-6 col-lg-4 mx-auto fw-lighter mb-5 lh-sm"> نعد جيل مقبل على المعرفة والعلم بهدف الوصول للتميز </h4>


            </div>
            <a class="btn btn-lg btn-outline-light rounded-pill px-4"> تعرف علينا</a>
    </div>


    <a href="#activities" class="position-absolute bottom-0 start-50 translate-middle-x  link-light"><svg id="scrl-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 38.9">
            <path class="scrl-body" d="M12.8 38.4h-1.6C5.2 38.4.4 33.6.4 27.6V11.2C.4 5.2 5.2.4 11.2.4h1.6c6 0 10.8 4.8 10.8 10.8v16.5c0 5.9-4.8 10.7-10.8 10.7z"/><path class="scrl-wheel" d="M12 13.9a4.2 4.2 0 01-4.2-4.2V4.2C7.8 1.9 9.7 0 12 0c2.3 0 4.2 1.9 4.2 4.2v5.4a4.1 4.1 0 01-4.2 4.3z"/></svg></a>


@endsection

@section('content')



    <!--Start Activities -->


    <section class="activities py-5 my-5" >


        <div class="container">

            <h3 class="special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5" style="width: fit-content">نشاطات المدرسة</h3>

            <div class="row align-items-center" id="activities">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="card py-5 border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 ">
                            <h4>الأنشطة المدرسية ودورها فى تنمية شخصية الطالب</h4>
                            <p class="text-muted">تلعب الأنشطة المدرسية دور هام جداً فى صقل شخصية الطالب بحيث تصبح شخصية متعاونة وإيجابية ويزيد من روح الإنتماء لدى الطالب، فمن خلال الأنشطة المدرسية يمكن إكتشاف مواهب الطلبة ومن هنا يمكن تنميتها</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('imgs/2.jpg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>



            <div class="row  align-items-center ">
                <div class="col-lg-6 order-last ">
                    <div class="card py-5 border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 ">
                            <h4>الرحلات المدرسية</h4>
                            <p class="text-muted">الرحلات المدرسية جزء من المنهاج المدرسي له قيمته وأهميته التربوية فهو نشاط محبب لدى جميع الطلاب.
                                وتعمل الجماعة لتحقيق أهداف تربوية واجتماعية وثقافية ووطنية منها
                                توسيع دائرة معارف الطلاب وإطلاعه على الجوانب التراثية والحضارية والعمرانية في البلاد إضافة إلى المكنونات البيئية المختلفة.</p>
                            <a href="{{url('/travel-info')}}" class="btn btn-outline-dark rounded-pill px-5 align-self-lg-start align-self-stretch">   اعرف المزيد</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <img src="{{asset('imgs/3.jpg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>


            <div class="row align-items-center ">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="card py-5 border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 ">
                            <h4>النشاط الصحي او الرياضي</h4>
                            <p class="text-muted">النشاط الصحي هو ذالك المجال الذي يهيئ الفرص أمام الطلاب لتعديل السلوك والمفاهيم إلى أنماط السلوك الصحي وتوجيههم التوجيه السليم وبواسطة هذا النشاط يتحقق التواصل الجيد للوعي والسلوك الصحي داخل وخارج أسوار المدرسة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('imgs/2.jpg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>

            <div class="row  align-items-center ">
                <div class="col-lg-6 order-last">
                    <div class="card py-5 border-0 text-center text-lg-start">
                        <div class="card-body vstack gap-3 ">
                            <h4>الرحلات المدرسية</h4>
                            <p class="text-muted">الرحلات المدرسية جزء من المنهاج المدرسي له قيمته وأهميته التربوية فهو نشاط محبب لدى جميع الطلاب.
                                وتعمل الجماعة لتحقيق أهداف تربوية واجتماعية وثقافية ووطنية منها
                                توسيع دائرة معارف الطلاب وإطلاعه على الجوانب التراثية والحضارية والعمرانية في البلاد إضافة إلى المكنونات البيئية المختلفة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('imgs/3.jpg')}}" alt="" class="img-thumbnail border-0 rounded-5">
                </div>
            </div>



        </div>


    </section>

    <!--End Activities -->


    <!--Start properties -->

    <section class="properties py-5 mt-5 bg-primary bg-opacity-10">

        <div class="container">

            <h3 class="special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5" style="width: fit-content;--color-default:#46ABEE">خصائصنا</h3>

            <div class="row gy-5 gy-lg-0">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 rounded-5 p-3 text-center shadow-sm">
                        <div class="card-body ">
                            <h3 class="special-radius z-3 position-relative  fw-bold mx-auto pb-5" style="width: fit-content;--color-default:#00EAD1">رؤيتنا</h3>
                            <p class="lh-lg text-muted">حماية الهوية الإسلامية لأبناء الجالية، وجعلهم نافعـين لذاتهم ومجتمعهم، بما يجعلها نموذجا للمدارس العربية في اوروبا.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 rounded-5 p-3 text-center shadow-sm">
                        <div class="card-body ">
                            <h3 class="special-radius z-3 position-relative  fw-bold mx-auto pb-5" style="width: fit-content;--color-default:#9DCBE8">الأهداف</h3>
                            <p class="lh-lg text-muted">أن تعد جيل مقبل على المعرفة والعلم ومصادرهما بهدف الوصول للتميزأن تقدم للتلميذ أنشطة اجتماعية متنوعة</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 rounded-5 p-3 text-center shadow-sm">
                        <div class="card-body ">
                            <h3 class="special-radius z-3 position-relative  fw-bold mx-auto pb-5" style="width: fit-content;--color-default:#FAA6A4">الرسالة</h3>
                            <p class="lh-lg text-muted">تقديم برامج لرعاية الموهبين واستخدام اساليب التكنولوجيا الحديثة و التنمية المهنية المستمرة للمعلمين</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <div class="spikes"></div>

    <!--End properties -->


    <!--Start Photos -->

    <section class="photos py-5 my-5">


        <div class="container">

            <h3 class="special-radius z-3 position-relative display-6 fw-bold mx-auto mb-5 pb-5" style="width: fit-content;--color-default:#F0CE9E">الصور</h3>

            <div class="row g-4">

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/7.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/8.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/9.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/10.jpg" alt="" class="img-fluid rounded-5 ">
                </div>


                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/11.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/12.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/13.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/14.jpg" alt="" class="img-fluid rounded-5 ">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/15.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/16.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/22.jpg" alt="" class="img-fluid rounded-5">
                </div>

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <img src="imgs/18.jpg" alt="" class="img-fluid rounded-5 ">
                </div>

            </div>

        </div>




    </section>



    <!--End Photos -->



    <!--Start Join -->

    <section class="join text-light py-5 my-5" style="background-image: url('imgs/join.svg');background-size: cover">

        <div class="container vstack gap-4 py-5">

            <h3 class="text-center display-5  fw-bold">إلتحق بالمدرسة</h3>
            <p class="display-6 text-center">يمكنك تسجيل أولادك عبر الإنترنت</p>
            <a href="#" class="btn btn-outline-light rounded-pill mx-auto d-block  px-5">سجل الأن</a>

        </div>




    </section>


    <!--End Join -->



    <!-- Start Enjoy -->

    <section class="enjoy py-5">
        <div class="container">

            <h5 class="lh-lg mb-5 mx-auto text-center">
                مجموعة من الأنشطة التي يتفاعل فيها الطلاب باستخدام اللغة العربية الفسحة
                تعليم اللغة –أي لغة– وتعلمها يختلف عن غيره من المواد الأخرى
            </h5>

            <div class="row align-items-center">

                <div class="col-md-12 col-lg-7 order-lg-0 order-1">

                    <div class="row gy-5 gy-md-0">

                        <div class="col-md-6 ">
                            <div class="d-flex justify-content-between flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                <i class="fa fa-light fa-joystick fa-3x me-0 me-md-4  mb-md-0 mb-3"></i>
                                <span>
                                    <h5 class="fw-bold">الإثارة</h5>
                                    <p class="text-muted">
                                        لابد أن يكون النشاط مثيرا ومشوقا كي يتفاعل المتعلمون معه ويستمعتون بأدائه، كأن يكون لعبة تعليمية أو وسيلة جذابة.
                                    </p>
                                </span>
                            </div>
                        </div>


                        <div class="col-md-6 ">
                            <div class="d-flex justify-content-between flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                <i class="fa fa-light fa-stairs fa-3x me-0 me-md-4  mb-md-0 mb-3"></i>
                                <span>
                                    <h5 class="fw-bold">التدرج</h5>
                                    <p class="text-muted">
بحيث تبدأ بالجزئيات وتنتهي بالكليات، من الخاص إلى العام، من التدريب على التعرف ثم التذكر ثم التحليل فالتطبيق والتركيب… إلى أن يصل إلى إعادة التركيب والبناء.                                    </p>
                                </span>
                            </div>
                        </div>


                        <div class="col-md-6 ">
                            <div class="d-flex justify-content-between flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start">
                                <i class="fa fa-light fa-bullseye fa-3x me-0 me-md-4   mb-md-0 mb-3"></i>
                                <span>
                                    <h5 class="fw-bold">هادفة مكملة</h5>
                                    <p class="text-muted">
لابد أن تكون الأنشطة هادفة إلى تحقق الأهداف التعليمية المطلوبة، تعمل على تنميتها وتتكامل فيما بينها للوصول بالمتعلم إلى درجة الإتقان.                                    </p>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-12 col-lg-5 order-lg-1 order-0">
                    <img src="imgs/footer.svg" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>

    <!-- End Enjoy -->

@endsection
