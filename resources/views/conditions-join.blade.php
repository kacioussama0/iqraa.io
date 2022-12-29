@extends('layout.app')
@section('title','شروط الإلتحاق بالمدرسة')

@section('content')

    <section class="conditions py-5">


        <div class="container">


            <div class="row my-5  align-items-center">

                <div class="col-md-5">
                    <p class="text-muted lh-lg">يفتح الملف للأطفال من سن ثلاث سنوات ونصف للصف الأول من رياض الأطفال ويحدد التنسيق المقبولين من المتقدمين</p>

                        <div class="alert alert-primary p-0 border-start border-0 border-primary-subtle rounded border-5 py-1 ">
                            <div class="p-3">
                                <h3>ملاحظة</h3>
                                <p>يشترط حضور الطفل مع الأب والأم فى المقابلة الشخصية قبل فتح الملف</p>
                            </div>
                        </div>

                </div>
                <div class="col-md-4 offset-md-2 order-first order-lg-last">
                    <img src="{{asset('imgs/illustration/register.svg')}}" alt="">
                </div>
            </div>

            <div class="row justify-content-between gy-5 gy-lg-0">

                <div class="col-md-3">
                    <div class="card rounded-5 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fa-thin fa-file fa-6x"></i>
                            <h4 class="mt-5 text-muted">شهادة ميلاد</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card rounded-5 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fa-thin fa-user fa-6x"></i>
                            <h4 class="mt-5 text-muted">8 صور شخصية</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card rounded-5 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fa-thin fa-id-card-alt fa-6x"></i>
                            <h4 class="mt-5 text-muted">صورة بطاقة الأب والأم</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>

    <section class="request-info py-5">


        <div class="container">

            <h2 class="text-center">طلب المعلومات</h2>

            <div class="row my-5 align-items-center">

                <div class="col-md-6">

                    <ol class="vstack gap-3">
                        <li class="lh-lg">تنسيق السن للصف الأول رياض أطفال والصف الأول الابتدائي ،يتم الإختيار تدريجيًا من الأكبر للأصغر سنا لحين إستكمال الكثافة المقررة</li>
                        <li class="lh-lg">يشترط للتقديم بقسم لغات أن يكون مؤهل الأب والأم مؤهل عالي ، أما قسم العربي لابد أن يكون مؤهل أحد الوالدين مؤهل عالي.</li>
                        <li class="lh-lg">في حالة قبول الطالب يتم فتح الملف ودفع المصروفات خلال خمس أيام من تاريخ علمه بالقبول وفي حاله التأخير يتم حذف اسم الطالب تلقائيًا و إدخال اسم الطالب الذى يليه فى الترتيب.</li>
                        <li class="lh-lg">تطبيقًا وتنفيذً للقرارات الوزارية ولائحة الإنضباط المدرسي ومن أحد بنودها الإلتزام بالزي المدرسي ولاتسمح إدارة المدرسة للطالب بالدخول بأي زي مخالف.</li>
                        <li class="lh-lg">في حالة التقدم بأي شكوى أو استفسار ، يتم التسجيل بالريسبشن حيث يقوم ولي الأمر بنفسهِ بتسجيل اسم الطالب ،الصف ،القسم ، رقم التليفون للتواصل والرد على  الشكوى أو الاستفسار.</li>
                    </ol>


                    <div class="alert alert-primary p-0 border-start border-0 border-primary-subtle rounded border-5 py-1 ">
                        <div class="p-3">
                            <h3>ملاحظة</h3>
                            <p>لاينظر لأي مشكلة تكتب على جروبات الواتس آب أو الفيس بوك.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 order-first order-lg-last">
                    <img src="{{asset('imgs/illustration/to do.svg')}}" alt="">



                </div>

            </div>


                <div class="row align-items-center p-0" id="activities">
                    <div class="col-lg-6 order-last order-lg-last">
                        <div class="card py-5 border-0 text-center text-lg-start">
                            <div class="card-body vstack gap-3 ">
                                <h4>االأتوبيس المدرسي </h4>
                                <p class="text-muted">في حالة الإشتراك في الأتوبيس المدرسي ، ولي الأمر ملزم إلزامًا تامًا بدفع القيمة المالية المحددة للأتوبيس المدرسي كاملة قبل بدء العام الدراسي، وتعتبر الأماكن محجوزة للعام الدراسي بأكمله.ولايحق لولي الأمر المطالبة بإسترداد مصروفات الأتوبيس تحت أي ظرف حتى لو لم يستخدم نجله الاتوبيس.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('imgs/illustration/autobus.svg')}}" alt="" class="img-thumbnail border-0 rounded-5  ">
                    </div>
                </div>

        </div>



    </section>

@endsection
