@extends('layout.app')
@section('title','أسئلة شائعة')

@section('content')

    <section class="conditions py-5">

            <div class="container">

                <div class="row">
                    <div class="col-lg-8 my-5 order-last order-lg-first">
                        <div class="accordion " id="accordionExample">


                            <div class="accordion-item">
                                <h2 class="accordion" id="headingOne">
                                    <button class="accordion-button  " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        من نحن
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">مدرسة جنيف العربية، هي مدرسة بسويسرا تابعة للمؤسسة الثقافية الإسلامية بجنيف، انشئت سنة 1978، ومنذ ذلك تعمل بالتعاون مع جميع عناصر العملية التعليمية (الطاقم الإداري والتربوي والتلاميذ والاولياء) في بيئة آمنة من اجل دعم أبناء الجالية دينيا وتربويا وعقليا وخُلقيا ولغويا ومهارايا؛ وغيرهم من الجاليات غير المسلمة فيما يتعلق باللغة العربية من خلال فريق مؤهل إداريا وتربويا ومعرفيا وفق المعايير المعمول بها في التعليم، في بيئة تتسم بالتعاون والحيوية والتفاعل</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">


                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        أين موقع المدرسة
                                    </button>
                                </h2>

                                <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted"> فى جينف سويسرا
                                        </p>
                                    </div>
                                </div>


                            </div>

                            <div class="accordion-item ">
                                <h2 class="accordion-header " id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ما هي مصروفات المدرسة
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">المصروفات التقديرية للعام الاول موجودة في البند تاسعا من دليل القبول والتسجيل بالموقع على هذا الرابط كما سيكون هناك زيادة قدرها 5% سنويا على المصروفات.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header " id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        كيف يمكن التسجيل بالمدرسة وما هي الاعمار التي تقبل وشروط التحويل
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">التسجيل المبدئي يتم اليكترونيا على الموقع والاعمار موجودة ايضا في دليل القبول والتسجيل وشروط التحويل لابد ان تكون من مدارس لغات أو دولية مع اجتياز المقابلة الشخصية والاختبار التحريري ومقابلة ولي الأمر.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        ما هي الوظائف المتاحة في المدارس وكيف يمكن التقدم اليها
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted"> جميع الوظائف الادارية والتعليمية متاحة والتقديم عليها اليكترونيا ولا تقدم طلبات باليد</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        متى تبدأ الدراسة بالمدرسة
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class=" mb-0 text-muted">فى بداية الفصل الدراسي</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6 mx-auto">
                        <img src="{{asset('imgs/illustration/Thinking face-bro.svg')}}" alt="thinking face" class="order-first  py-3 img-fluid">
                    </div>
                </div>



            </div>






    </section>

@endsection
