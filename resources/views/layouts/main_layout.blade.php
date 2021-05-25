<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
        rel="stylesheet"
    />
    <title>@yield('title')</title>
</head>
<body>


<header>
    <!-- Navbar -->
    {{--<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#a41559;">--}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgba(245,14,95,0.9);">
        <!-- Container wrapper -->
        <div class="container">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">AUEvent</a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getPostsByCategory','music')}}">Link</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-mdb-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Action</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider"/>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <!-- Icons -->
                <ul class="navbar-nav d-flex flex-row me-1">

                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle  align-items-center"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                        ><i class="fas fa-user"></i>
                            {{--                            <img--}}
                            {{--                                src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"--}}
                            {{--                                class="rounded-circle"--}}
                            {{--                                height="22"--}}
                            {{--                                alt=""--}}
                            {{--                                loading="lazy"--}}
                            {{--                            />--}}
                        </a>
                        @guest
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#">Увійти</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Зареєструватися</a>
                                </li>
                            </ul>
                        @endguest
                        @auth
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @role('admin')
                                <li>
                                    <a class="dropdown-item" href="#">Адмін панель</a>
                                </li>
                                @endrole
                                <li>
                                    <a class="dropdown-item" href="#">Профіль</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Вихід</a>
                                </li>
                            </ul>
                        @endauth


                    </li>
                </ul>

                {{--            <!-- Search -->--}}
                {{--            <form class="w-auto">--}}
                {{--                <input type="search" class="form-control" placeholder="Type query" aria-label="Search">--}}
                {{--            </form>--}}

            </div>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->

@yield('content')
<!-- Footer -->
<footer class="text-center text-white " style="background-color:#ff0e682e">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #3b5998;"
                href="#!"
                role="button"
            ><i class="fab fa-facebook-f"></i
                ></a>

            <!-- Twitter -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #55acee;"
                href="#!"
                role="button"
            ><i class="fab fa-twitter"></i
                ></a>

            <!-- Google -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #dd4b39;"
                href="#!"
                role="button"
            ><i class="fab fa-google"></i
                ></a>

            <!-- Instagram -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #ac2bac;"
                href="#!"
                role="button"
            ><i class="fab fa-instagram"></i
                ></a>

            <!-- Linkedin -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #0082ca;"
                href="#!"
                role="button"
            ><i class="fab fa-linkedin-in"></i
                ></a>
            <!-- Github -->
            <a
                class="btn btn-primary btn-floating m-1"
                style="background-color: #333333;"
                href="#!"
                role="button"
            ><i class="fab fa-github"></i
                ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(245, 14, 95, 0.7);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
></script>
</body>
</html>
