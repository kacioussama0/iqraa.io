@extends('layout.app')
@section('title','مقال')


@section('content')



    <!--Start POST -->


    <section class=" py-5 my-5" >


        <div class="container">

            <div class="alert alert-primary p-0 border-start border-0 border-primary-subtle rounded border-5 py-1 ">
                <div class="p-3">
                    <h3>معلومة هامة</h3>
                    <p>اللغة العربية لا تدرس في المدارس السويسرية كما يمنع تدريس الدين بها.</p>
                </div>
            </div>

            <h2 class="text-center">جنسيات التلاميذ </h2>

            <div class="row my-5 align-items-center">

                <div class="card-body col-md-6 p-3 bg-primary-subtle rounded">
                     <div class="row">
                        <h5>جنسيات التلاميذ من الدول العربية</h5>

                        <ul class="col-md-5 p-0 offset-1 vstack g-3 text-muted">
                            <li>الكويت</li>
                            <li>العراق</li>
                            <li>سوريا</li>
                            <li>لبنان</li>
                            <li>الأردن</li>
                            <li>فلسطين</li>
                            <li>اليمن</li>
                        </ul>

                         <ul class="col-md-5 p-0 offset-1 vstack g-3 text-muted">
                             <li>السودان</li>
                             <li>مصر</li>
                             <li>ليبيا</li>
                             <li>تونس</li>
                             <li>الجزائر</li>
                             <li>المغرب</li>
                             <li>موريتانيا</li>
                         </ul>

                   </div>
                </div>

                <div class="card-body col-md-6 p-3 bg-primary-subtle rounded">
                     <div class="row">
                        <h5>جنسيات التلاميذ من الدول الإسلامية</h5>

                        <ul class="col-md-5 p-0 offset-1 vstack g-3 text-muted">
                            <li>الباكستان</li>
                            <li>افغانستان</li>
                            <li>تركيا</li>
                            <li>ألبانيا</li>
                            <li>كوسوفو</li>
                            <li>نيجيريا</li>
                        </ul>

                         <ul class="col-md-5 p-0 offset-1 vstack g-3 text-muted">
                             <li>السنغال</li>
                             <li>غينيا</li>
                             <li>الصومال</li>
                             <li>إرتيريا</li>
                             <li>بنجلادش</li>
                             <li>البوسنة</li>
                         </ul>

                   </div>
                </div>
                <div class="col-md-6 order-first order-lg-last">
                    <img src="{{asset('imgs/illustration/nationalities.svg')}}" alt="">



                </div>

            </div>



        </div>

    </section>

    <!--End POST -->





@endsection


