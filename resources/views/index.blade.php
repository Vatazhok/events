<!DOCTYPE html>
<html lang="en">
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

    <title>Document</title>
</head>
<body>

<header>
    <!-- Intro settings -->
    <style>
        #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 58px;
        }
        @media (max-width: 991px) {
            #intro {
                /* Margin to fix overlapping fixed navbar */
                margin-top: 45px;
            }
        }
    </style>
<!-- Navbar -->
{{--<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#a41559;">--}}
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgba(245,14,95,0.9);">
    <!-- Container wrapper -->
    <div class="container">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">AUEvent</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <!-- Link -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
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
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle d-flex align-items-center"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                            src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                            class="rounded-circle"
                            height="22"
                            alt=""
                            loading="lazy"
                        />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
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


<!--Main layout-->
<main class="my-5" >
    <div class="container pt-5">
        <!--Section: Content-->
{{--        <section class="text-center">--}}
{{--            <h4 class="mb-5"><strong>Latest posts</strong></h4>--}}

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="far fa-calendar-alt fa-2x"></i>
                                </th>
                                <td class="pb-3 pt-2">East 64th Street, New York</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="far fa-clock living-coral-text"></i>
                                </th>
                                <td class="pb-3 pt-2">Opens 10 AM</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="fas fa-city "></i>
                                </th>
                                <td class="pb-3 pt-2">Opens 10 AM</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="fas fa-map-marked-alt "></i>
                                </th>
                                <td class="pb-3 pt-2">Opens 10 AM</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="fas fa-hryvnia"></i>
                                </th>
                                <td class="pb-3 pt-2">Opens 10 AM</td>
                            </tr>
                            </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="https://d2q8nf5aywi2aj.cloudfront.net/uploads/resize/shows/logo/420x594_show_LXNbmuUst8K-N5Z2Tz9O9doIuvkZPiqF.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">

                            <h5 class="card-title text-center pb-1">Post title</h5>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-calendar-alt fa-2x"></i>
                                    </th>
                                    <td class="pb-3 pt-2">East 64th Street, New York</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="far fa-clock living-coral-text"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-city "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-map-marked-alt "></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                <tr class="mt-2">
                                    <th scope="row" class="px-0 pb-3 pt-2">
                                        <i class="fas fa-hryvnia"></i>
                                    </th>
                                    <td class="pb-3 pt-2">Opens 10 AM</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#!" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>

            </div>
{{--        </section>--}}
        <!--Section: Content-->

        <!-- Pagination -->
        <nav class="my-4" aria-label="...">
            <ul class="pagination pagination-circle justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</main>
<!--Main layout-->



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
