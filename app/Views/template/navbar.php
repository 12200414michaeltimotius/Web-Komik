<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="cssnavbar/fonts/icomoon/style.css">

    <link rel="stylesheet" href="cssnavbar/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cssnavbar/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="cssnavbar/css/style.css">


</head>

<body>

    <?= $this->renderSection('content'); ?>

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">


        <div class="container">
            <div class="row align-items-center">

                <div>

                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="sidebar"><span>Home</span></a></li>
                            <li class="has-children">
                                <a href="navigasi"><span>Genre Komik</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="listkomik">Action</a></li>
                                    <li><a href="listkomik2">Romance</a></li>
                                    <li><a href="listkomik3">Horror </a></li>
                                    <li><a href="listkomik4">Fantasy </a></li>
                                    <li><a href="listkomik5">Mystery </a></li>
                                    <li class="has-children">


                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://www.webtoons.com/id/comedy/tahilalats/list?title_no=542&page=1"><span>Bonus
                                        Komik

                                    </span></a></li>
                            <li><a href="https://github.com/12200414michaeltimotius/12200414_KOMICORP"><span>Source
                                        code Github</span></a></li>
                            <li><a href="http://www.bsi.ac.id/ubsi/index2.ajax/"><span>About University </span></a></li>

                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3"></span></a></div>

            </div>

        </div>
        </div>

    </header>+





    <script src="cssnavbar/js/jquery-3.3.1.min.js"></script>
    <script src="cssnavbar/js/popper.min.js"></script>
    <script src="cssnavbar/js/bootstrap.min.js"></script>
    <script src="cssnavbar/js/jquery.sticky.js"></script>
    <script src="cssnavbar/js/main.js"></script>
</body>

</html>