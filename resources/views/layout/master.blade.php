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
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="icon" href="{{ asset('images/tyt_icon.svg') }}" type="image/svg+xml">
    @yield('title')
</head>

<body>

    <!-- ------------------------- navbar -------------------------  -->
    <div class="_navbar">

        <div class="logo_nav">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.svg') }}" alt="logo" type="image/svg+xml">
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="nav_social_icons text-right">
                            <div class="nav_social_icon">
                                <a href="https://www.facebook.com/takeyourtimemyanmar" target="__black"><i
                                        class="fab fa-facebook-f" target="__black"></i></a>
                            </div>
                            <div class="nav_social_icon">
                                <a href="https://www.linkedin.com/company/take-your-time-by-eric/?viewAsMember=true"
                                    target="__black"><i class="fab fa-linkedin-in"></i></a>

                            </div>
                            <div class="nav_social_icon">
                                <a href="mailto:admin@youthchancesbytakeyourtime.com"><i
                                        class="fab fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg second_nav">
            <div class="container-fluid">

                <!-- hidden_logo -->
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/sm_logo.png') }}" alt="logo" class="hidden_logo"
                        style="width: 150px;">

                </a>

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
                        <img src="{{ asset('images/sm_logo.png') }}" alt="logo" type="image/svg+xml" width="120">
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
                            <img src="{{ asset('images/heading_bg.svg') }}" alt="brush_background"
                                type="image/svg+xml" class="brush_bg">
                            <h4 class="sitemap_heading">Sitemap</h4>
                        </div>
                        <div class="sitemap_items">
                            <div class="row">
                                <div class="col-6">
                                    <ul>
                                        <li><a href="{{ url('/about') }}">About Us</a></li>
                                        <li><a href="{{ url('scholarships') }}">Scholarships</a></li>
                                        <li><a href="{{ url('/grants') }}">Grants</a></li>
                                        <li><a href="{{ url('/conferences') }}">Conferences</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                        <li><a href="{{ url('/courses') }}">Courses</a></li>
                                        <li><a href="{{ url('/jobs') }}">Jobs</a></li>
                                        <li><a href="{{ url('/others') }}">Others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/footer_divider.svg') }}" alt="section_divider" type="image/svg+xml"
                        class="divider1">
                </div>

                <div class="col-lg-4">
                    <div class="contact text-center">
                        <div class="section_heading">
                            <img src="{{ asset('images/heading_bg.svg') }}" alt="brush_background"
                                type="image/svg+xml" class="brush_bg">
                            <h4 class="contact_heading">Keep In Touch</h4>
                        </div>
                        <div class="contact_items text-left">
                            <ul>

                                <li>
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    1203 Town Center Drive FL 33458 Thailand
                                </li>
                                <li>
                                    <span><i class="fas fa-phone"></i></span>
                                    <a href="tel:+959421069537">+505 94443233</a>
                                </li>
                                <li>
                                    <span> <i class="fas fa-envelope"></i></span>
                                    <a href="mailto:admin.takeyourtime@gmail.com">admin.takeyourtime@gmail.com</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <img src="{{ asset('images/footer_divider.svg') }}" alt="section_divider" type="image/svg+xml"
                        class="divider2">
                </div>

            </div>
            <hr class="contact_hr mx-auto">
            <div class="row">
                <div class="newsletter text-center">
                    <div id="mc_embed_signup">
                        <h5>Subscribe Newsletter</h5>
                        <form
                            action="https://youthchancesbytakeyourtime.us5.list-manage.com/subscribe/post?u=310f17ed8cb16efd4f6ccef28&amp;id=e65c58993a"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                    placeholder="Email Address" required>
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                        name="b_310f17ed8cb16efd4f6ccef28_e65c58993a" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                        id="mc-embedded-subscribe" class="button">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="nav_social_icons mt-4">
                        <div class="nav_social_icon">
                            <a href="https://www.facebook.com/takeyourtimemyanmar" target="__black"><i
                                    class="fab fa-facebook-f" target="__black"></i></a>
                        </div>
                        <div class="nav_social_icon">
                            <a href="https://www.linkedin.com/company/take-your-time-by-eric/?viewAsMember=true"
                                target="__black"><i class="fab fa-linkedin-in"></i></a>

                        </div>
                        <div class="nav_social_icon">
                            <a href="mailto:admin@youthchancesbytakeyourtime.com"><i
                                    class="fab fas fa-envelope"></i></a>
                        </div>
                    </div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
        integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- js -->
    <script src="{{ asset('js/script.js') }}"></script>

    @yield('alert')
    @yield('script')

</body>

</html>
