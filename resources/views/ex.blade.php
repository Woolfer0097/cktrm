<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Обучающие программы и компьютерные самоучители по языкам - ЦКТ РЕПЕТИТОР МультиМедиа</title>

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
                    <div class="navbar-brand"><a href="/"><img src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" /></a></div>
                    <div class="navbar-other ms-auto">
                        <ul class="navbar-nav flex-row align-items-center">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info" href="https://repetitor.ru"><i class="uil uil-external-link-alt"></i></a></li>
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
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other ms-auto w-100 d-none d-lg-block">
                        <nav class="nav social social-muted justify-content-end text-end">
                            <a href="/login"><i class="uil uil-user"></i></a>
                        </nav>
                        <!-- /.social -->
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
</html>
