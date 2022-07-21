@extends('layout')

@section('title')О компании@endsection

@section('main_content')
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7 order-lg-2">
                    <figure><img class="w-auto" src="./assets/img/illustrations/i2.png" srcset="./assets/img/illustrations/i2@2x.png 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h3 class="display-5 mb-7">О компании</h3>
                    <div class="accordion accordion-wrapper" id="accordionExample">
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> РЕПЕТИТОР МультиМедиа </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Центр образовательных компьютерных технологий «РЕПЕТИТОР МультиМедиа» - сообщество лингвистов, преподавателей и IT-специалистов, разрабатывающих современные эффективные решения для изучения и преподавания языков с применением информационных технологий. Основные направления работы – разработка, издание и распространение мультимедийных обучающих программ, видео- и аудиокурсов по языкам, образовательные интернет-проекты.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> История </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>С 1996 года мы занимаемся разработкой, изданием и распространением мультимедийных программ для самостоятельного изучения иностранных языков. Мы берем на себя ответственность за весь процесс создания обучающей программы – от первоначальной идеи до тиражирования, включая разработку мультимедийного контента и программной оболочки.</p>
                                    <p>Мы неизменно добиваемся того, чтобы наши программы имели четкую и ясную структуру, основывались на понятных пользователю методических принципах, вовлекали в работу все виды памяти (слуховую, визуальную, речевую, моторную), сочетали стихийную работу пользователя с грамматическими пояснениями и упражнениями.</p>
                                    <p>Мы заботимся о доступности и легкости в освоении наших программ, интуитивной понятности интерфейса, логичном оформлении, подчиненном главной цели – учебной эффективности.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingThree">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Сотрудничество с другими учебными организациями </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>В наших проектах мы часто сотрудничаем со специалистами ведущих учебных заведений и организаций (Факультет иностранных языков и регионоведения МГУ им. М.В.Ломоносова, филологический факультет СПбГУ, Гёте-Институт, РГГУ, Радио “Voice of America” и др.). В разработке контента наших обучающих программ обязательно участвуют специалисты, для которых целевой язык программ является родным.</p>
                                    <p>Мы показывали наши программы на крупных выставках в России и за рубежом (CeBIT в Ганновере, Франкфуртская книжная ярмарка, SIMO в Мадриде, IFA в Берлине и др.).</p>
                                    <p>Наши работы отмечены Грамотой Министра Науки и образования РФ, наградами на Всероссийском конкурсе «Книги России», Всероссийском конкурсе «Контент» и др.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Наши ключевые партнеры </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p><a href="/co-op-projects/3">Факультет иностранных языков и регионоведения МГУ им. М.В.Ломоносова (дистанционные олимпиады по языкам и страноведению)</a></p>
                                    <p><a href="/co-op-projects/2">English Language Office of the USA Embassy in Moscow (мультимедийные методические издания и интернет-проекты для преподавателей)</a></p>
                                    <p><a href="/co-op-projects/1">Санкт-Петербургская компания «НИТА – Новые информационные технологии в авиации» (лингвистические тренажерные классы для языковой подготовки авиадиспетчеров и пилотов)</a></p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <!--/.accordion -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7">
                    <figure><img class="w-auto" src="./assets/img/illustrations/i5.png" srcset="./assets/img/illustrations/i5@2x.png 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h1 class="text-center mb-5">Контакты и реквизиты</h1>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-exclamation-circle"></i> </div>
                        </div>
                        <div>
                            <p>Полное наименование: Общество с ограниченной ответственностью «Центр образовательных компьютерных технологий «РЕПЕТИТОР МультиМедиа»</p>
                            <p>Юридически равноправное краткое наименование: ООО «ЦКТ РМ»</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Юридический адрес</h5>
                            <address>105094, Г.Москва, ВН.ТЕР.Г. МУНИЦИПАЛЬНЫЙ ОКРУГ СОКОЛИНАЯ ГОРА, УЛ ЗОЛОТАЯ, Д. 11, ЭТАЖ 2Б, ПОМЕЩ. 2Б13</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-point"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Фактический адрес</h5>
                            <address>Москва, ул. Золотая, 11</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Телефон</h5>
                            <p class="mb-0">+7 (495) 506-96-27</p>
                            <p>+7 (495) 740-07-91 (<strong>только</strong> по вопросам сервиса подбора репетиторов на www.repetitor.ru)</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-2"><a href="mailto:info@repetitor.ru" class="link-body">info@repetitor.ru</a></p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-bill"></i> </div>
                        </div>
                        <div>
                            <h5 class="mu-2">Реквизиты</h5>
                            <p class="mb-0"><p>ОГРН: <strong>1037739916609 от 20.10.2003</strong></p>
                            <p>ИНН: <strong>7702504562</strong><br />
                                КПП: <strong>771901001</strong><br />
                                ОКПО: <strong>71287471</strong><br />
                                ОКВЭД: <strong>73.10</strong></p>
                            <p>Ген. директор: Жислин Анатолий Яковлевич.<br />Действует на основании Устава.</p>
                            <p>р/с: 40702810700120031933</p>
                            <p>ПАО АКБ "АВАНГАРД", г. МОСКВА</p>
                            <p>БИК: 044525201</p>
                            <p>к/с: 30101810000000000201</p></p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
