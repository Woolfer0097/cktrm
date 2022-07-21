<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
            section header.image-wrapper:not(.mobile) {
                background-attachment: scroll !important;
            }

            section header.image-wrapper,
            section .navbar {
                z-index: 2 !important;
            }

            section .navbar .hamburger,
            section .navbar [data-bs-toggle="offcanvas"],
            section .navbar .btn {
                pointer-events: none;
            }

            section .navbar .container {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light">
            <div class="container flex-lg-column">
                <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                    <div class="navbar-brand"><a href="/"><img src="./assets/img/logo@2x.png" srcset="./assets/img/logo@2x.png 2x" alt="" /></a></div>
                    <div class="navbar-other ms-auto">
                        <ul class="navbar-nav flex-row align-items-center">
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.d-flex -->
                <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center">
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <a href="/"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
                                <li class="nav-item"><a class="nav-link" href="/about">О компании</a></li>

                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Обучающие программы</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="/curriculum">Все программы</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="/curriculum/English">Английский язык</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="/curriculum/German">Немецкий язык</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="/curriculum/Russian">Русский язык</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="/sale">Где купить</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/electronic-versions">Электронные версии</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/network-versions">Сетевые версии</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/demo-versions">Демоверсии</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/curriculum/registration">Регистрация программ</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/help">Техническая поддержка</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/useful">Полезная информация</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Корпоративные проекты</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="/co-op-projects/1">Air English</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/co-op-projects/2">Посольство США в Москве</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="/co-op-projects/3">МГУ им. Ломоносова</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="/articles">Статьи</a></li>

                                <li class="nav-item"><a class="nav-link" href="/webinars">Вебинары</a></li>

                                <li class="nav-item"><a class="nav-link" href="/partners">Партнёры</a></li>

                                <li class="nav-item"><a class="nav-link" href="/news">Новости</a></li>

                                @if (Auth::check())
                                    <li class="nav-item d-none d-md-block m-auto"><a class="btn btn-sm btn-primary rounded-pill" href="/logout">Выход</a></li>
                                @else
                                    <li class="nav-item d-none d-md-block m-auto"><a class="btn btn-sm btn-primary rounded-pill" href="/login">Вход</a></li>
                                @endif

                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
                                <a href="mailto:first.last@email.com" class="link-inverse">info@repetitor.ru</a>
                                <br />+7 (495) 506-96-27<br />
                                <nav class="nav social social-white mt-4">
                                    <a href="https://repetitor.ru"><i class="uil uil-external-link-alt"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!-- /offcanvas-nav-other -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.navbar-collapse-wrapper -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
        <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
            <div class="offcanvas-header">
                <a href="/"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        </div>
        <!-- /.offcanvas -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <script src="../../assets/js/plugins.js"></script>
        <script src="../../assets/js/theme.js"></script>
        @yield('main_content')
    </body>
    <section class="wrapper">
        <footer class="bg-gradient-dark">
            <div class="container pt-14 pt-md-16">
                <div class="row gx-lg-0 gy-6 mt-5">
                    <div class="col-lg-4">
                        <div class="widget">
                            <img class="mb-2" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-lg-3 offset-lg-2">
                        <div class="widget">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">Телефон</h5>
                                    <p class="mb-0">+7 (495) 506-96-27<br />+7 (495) 740-07-91</p>
                                </div>
                            </div>
                            <!--/div -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                </div>
                                <div class="align-self-start justify-content-start">
                                    <h5 class="mb-1">Адресс</h5>
                                    <address>Москва, ул. Золотая, 11</address>
                                </div>
                            </div>
                            <!--/div -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
                <hr class="mt-7 mt-md-7 mb-7" />
                <div class="d-md-flex align-items-center justify-content-between">
                    <p class="mb-2 mb-lg-0 text-dark fw-bold">© 2004-2022 «РЕПЕТИТОР МультиМедиа»</p>
                    <a href="https://repetitor.ru" class="icon text-primary fw-bold fs-20 me-4 mt-n1 align-right"><i class="uil uil-external-link-alt text-dark"></i></a>
                    <!-- /.social -->
                </div>
            </div>
            <!-- /.container -->
        </footer>
    </section>
</html>
