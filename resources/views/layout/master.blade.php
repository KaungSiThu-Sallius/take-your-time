<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="icon" href="{{asset('images/tyt_icon.svg')}}" type="image/svg+xml">
    @yield('title')
</head>

<body>

    <!-- ------------------------- navbar -------------------------  -->
    <div class="_navbar">

        <div class="logo_nav">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="{{asset('images/logo.svg')}}" alt="logo" type="image/svg+xml">
                    </div>
                    <div class="col-6">
                        <div class="nav_social_icons text-right">
                            <div class="nav_social_icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <div class="nav_social_icon">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>

                            </div>
                            <div class="nav_social_icon">
                                <a href="#"><i class="fab fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg second_nav">
            <div class="container-fluid">

                <!-- hidden_logo -->
                <img src="{{asset('images/logo.svg')}}" alt="logo" type="image/svg+xml" class="hidden_logo">

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_collapse"
                    aria-controls="navbar_collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbar_collapse">
                    <div class="second_nav_items mx-auto">
                        <div class="container">
                            <div class="nav_items mx-auto">

                                <ul class="navbar-nav text-center">
                                        @yield('nav_items')
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>

    @yield('contents')

    <!-- ------------------------- footer -------------------------  -->
    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="description text-center">
                        <img src="{{asset('images/logo.svg')}}" alt="logo" type="image/svg+xml" width="100">
                        <p><span class="company_name">"Take Your Time"</span> is Opportunity Lorem Apsom for
                            youth.
                            Lorem Scholarships
                            all around the
                            world lorem apsom.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sitemap text-center">
                        <div class="section_heading">
                            <img src="{{asset('images/heading_bg.svg')}}" alt="brush_background" type="image/svg+xml"
                                class="brush_bg">
                            <h4 class="sitemap_heading">Sitemap</h4>
                        </div>
                        <div class="sitemap_items">
                            <div class="row">
                                <div class="col-6">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Scholarships</a></li>
                                        <li><a href="#">Grants</a></li>
                                        <li><a href="#">Conferences</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">Others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('images/footer_divider.svg')}}" alt="section_divider" type="image/svg+xml" class="divider1">
                </div>

                <div class="col-lg-4">
                    <div class="contact text-center">
                        <div class="section_heading">
                            <img src="{{asset('images/heading_bg.svg')}}" alt="brush_background" type="image/svg+xml"
                                class="brush_bg">
                            <h4 class="contact_heading">Contact Us</h4>
                        </div>
                        <div class="contact_items text-left">
                            <ul>

                                <li>
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    1203 Town Center Drive FL 33458 Thailand
                                </li>
                                <li>
                                    <span><i class="fas fa-phone"></i></span>+505 94443233
                                </li>
                                <li>
                                    <span> <i class="fas fa-envelope"></i></span> admin.takeyourtime@gmail.com
                                </li>

                            </ul>
                        </div>
                    </div>
                    <img src="{{asset('images/footer_divider.svg')}}" alt="section_divider" type="image/svg+xml" class="divider2">
                </div>

            </div>
        </div>
    </div>

    <!-- ------------------------- copyright -------------------------  -->
    <div class="copyright">
        <div class="container">
            <p>Copyright © 2021 Take Your Time - All rights reserved.</p>
        </div>
    </div>




    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- js -->
    <script src="{{asset('js/script.js')}}"></script>

    @yield('alert')
</body>

</html>
