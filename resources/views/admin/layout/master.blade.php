<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="icon" href="{{asset('images/tyt_icon.svg')}}" type="image/svg+xml">


    @yield('title')
    <style>
        :root {
            --side-bar-bgColor: #6CBBB3;
            --side-bar-bgColor-hover: #FFEBEB;
            --side-bar-txtColor: #2B2E2D;
            --side-bar-headingColor: #454746;
            --side-bar-width: 220px;

            --page-content-blockColor: #F9F9F9;

            --primary01: #6CBBB3;
            --primary04: #F0FFFC;
            --secondary02: #EE7674;
            --white: #F9F9F9;

            --border-radius: 4px;
            --box-shadow: 0 0 10px -2px rgba(0, 0, 0, 0.075);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: var(--white);
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "PT Serif", sans-serif;
            font-weight: 600;
        }

        p,
        a {
            font-family: "Open Sans", serif;
        }

        .button {
            background-color: var(--secondary02) !important;
            border-radius: 6px;
            color: var(--white);
            font-weight: 600;
        }

        .button:hover {
            color: var(--white);
        }

        .button a {
            color: var(--white);
        }

        ul {
            list-style: none;
        }

        a,
        button {
            color: inherit;
        }

        a {
            text-decoration: none;
        }

        button {
            background: none;
            cursor: pointer;
        }

        input {
            -webkit-appearance: none;
        }



        label {
            cursor: pointer;
        }

        button,
        input {
            border: none;
        }

        svg {
            display: block;
        }

        body {
            font: 16px/1.5 "Lato", sans-serif;
        }

        .logo_div{
            margin: 0 auto;
        }

        .side-bar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: auto;
            padding-top: 20px;
            width: var(--side-bar-width);
            color: var(--side-bar-txtColor);
            background: var(--side-bar-bgColor);
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }

        .side-bar .active {
            background: var(--side-bar-bgColor-hover);
            color: var(--side-bar-txtColor);
            outline: none;
        }

        .side-bar nav {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }

        .side-bar .logo {
            display: block;
            margin: 0 15px;
        }

        .side-bar .toggle-mob-menu {
            display: none;
            margin-left: 5px;
            padding: 4px;
            background: var(--page-content-blockColor);
            border-radius: var(--border-radius);
        }

        .side-bar .toggle-mob-menu svg {
            fill: var(--black);
            transition: transform 0.2s;
        }

        .side-bar .admin-menu {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .side-bar .admin-menu li:nth-last-child(2) {
            margin-bottom: 35px;
        }

        .side-bar .admin-menu li:last-child {
            margin-top: auto;
            margin-bottom: 20px;
        }

        .side-bar .admin-menu li>* {
            width: 100%;
            padding: 12px 15px;
        }

        .side-bar .admin-menu .switcher {
            display: inline-block;
            width: auto;
        }

        .side-bar .admin-menu .menu-heading h3 {
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-size: 12px;
            margin-top: 12px;
            color: var(--side-bar-headingColor);
        }

        .side-bar .admin-menu .svg_icon,
        .side-bar .admin-menu svg {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .side-bar .admin-menu a,
        .side-bar .admin-menu button {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }

        .side-bar .admin-menu a:hover,
        .side-bar .admin-menu a:focus,
        .side-bar .admin-menu button:hover,
        .side-bar .admin-menu button:focus {
            background: var(--side-bar-bgColor-hover);
            color: var(--side-bar-txtColor);
            outline: none;
        }

        .side-bar .admin-menu a:hover .svg_icon,
        .side-bar .admin-menu a:focus .svg_icon,
        .side-bar .admin-menu button:hover .svg_icon,
        .side-bar .admin-menu button:focus .svg_icon,
        .side-bar .admin-menu a:hover svg,
        .side-bar .admin-menu a:focus svg,
        .side-bar .admin-menu button:hover svg,
        .side-bar .admin-menu button:focus svg {
            fill: var(--side-bar-txtColor);
        }

        .side-bar .admin-menu button {
            padding: 15px;
        }

        .icon_sidebar{
            color: #454746;
        }

        /********************************* dashboard ********************************/

        .dashboard_card .card_info {
            padding: 40px 20px;
            background-color: var(--primary04);
            border-radius: var(--border-radius);
            cursor: pointer;
            color: black;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .dashboard_card .card_info:hover {
            background-color: var(--primary01);
            color: white;
        }

        .dashboard_card .card_info:hover .detail_icon{
            color: var(--side-bar-bgColor-hover);
        }

            .dashboard_card .detail_icon {
                position: absolute;
                font-size: 248%;
                top: 40%;
                right: 13%;
                color: var(--primary01);
            }



            .dashboard_card .count_number {
                font-size: 40px;

            }

        /********************************* scholarship ********************************/

        .card_info{
            background-color: var(--primary04);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 40px 20px;
        }

        .card_info .badge {
            font-size: 14px;
        }

        .data_table .badge{
            font-size: 12px;
            margin-left: 2px;
        }

        .data{
            padding: 30px 0 60px;
        }

        .data .heading{
            margin-bottom: 30px;
        }

        .data .heading h2{
            margin: 0;
        }

        .data .heading .button{
            margin: 0;
            float: right;
        }



        .search {
        width: 100%;
        position: relative;
        display: flex;
        }

        .search form{
            width: 98%;
        }

        .searchTerm {
        width: 92%;
        border: 3px solid var(--primary01);
        border-right: none;
        padding: 15px;
        height: 20px;
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #9DBFAF;
        }

        .searchTerm:focus{
        color: var(--primary01);
        }

        .searchButton {
        width: 50px;
        height: 36px;
        border: 1px solid var(--primary01);
        background: var(--primary01);
        text-align: center;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
        }

        .search input{
            color: #7C7C7C;
        }

        .create_scholar form{
            margin: 40px 0;
            background-color: var(--primary04);
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        }

        .create_scholar .card{
            border-radius: 20px !important;
        }

        .create_scholar .card-header{
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .create_scholar .card-body{
            padding: 40px;
        }

        .create_scholar form h2{
            margin-bottom: 0 !important;
            padding: 10px;
        }

        .funding, .type_checkbox, .image , .criteria, .benefit, .application_process, .date {
            color: #757575;
        }


        .funding h5, .type_checkbox h5, .image h5, .detail_text h5, .other_text h5{
            margin:25px 0 15px;
            color: #454746;
        }

        .criteria h5, .benefit h5, .application_process h5{
            margin:25px 0 0px;
            color: #454746;
        }

        .funding .custom-radio, .type_checkbox .custom-checkbox{
            margin-bottom: 5px;
        }

        .sub_btn .btn{
            margin-top: 40px;
        }
        /********************************* media query ********************************/
        @media (max-width: 1199px) {
            .searchTerm {
                width: 86%;
            }
        }
        @media screen and (max-width: 767px) {

            .side-bar,
            .page-content {
                position: static;
                width: 100%;
            }

            .side-bar {
                padding: 10px;
           box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            }

            .side-bar nav {
                flex-direction: row;

            }

            .side-bar .logo {
                margin-left: 15px;
            }

            .side-bar .logo svg,
            .side-bar .logo .svg_icon {
                width: 83px;
                height: 35px;
            }

            .side-bar .toggle-mob-menu {
                display: block;
                height: 33px;
                margin-top: 23px;

            }
            .side-bar .admin-menu button{
                display: none;
            }

            .side-bar .admin-menu {
                position: absolute;
                left: 199px;
                top: 86px;
                margin-top: 0;
                z-index: 2;
                border-radius: var(--border-radius);
                background: var(--side-bar-bgColor);
                visibility: hidden;
                opacity: 0;
                transform: scale(0.95);
                transition: all 0.2s;
            }

            .side-bar .admin-menu li:nth-last-child(2) {
                margin-bottom: 12px;
            }

            .side-bar .admin-menu li:last-child button,
            .search-and-user .admin-profile .greeting {
                display: none;
            }

            .page-content {
                min-height: 0;
                padding: 10px;
            }
            .cards .row{
                margin-top: 10px !important;
            }

            .card_info{
                margin-top: 40px;
            }

            .dashboard_card .card_info{
                margin-top: 0;
                margin-bottom: 40px;
            }

            .dashboard_card .detail_icon {
                position: absolute;
                font-size: 248%;
                top: 31%;
            }
            .searchTerm {
                width: 89%;
            }

        }

        .mob-menu-opened .toggle-mob-menu svg {
            transform: rotate(180deg);
        }

        .mob-menu-opened .side-bar .admin-menu {
            transform: scale(1);
            visibility: visible;
            opacity: 1;
        }

        @media screen and (min-width: 768px) {
            .collapsed .side-bar {
                width: 40px;
            }

            .collapsed .side-bar .admin-menu li>* {
                padding: 10px;
            }

            .collapsed .side-bar .logo,
            .collapsed .side-bar .admin-menu span,
            .collapsed .side-bar .admin-menu .menu-heading {
                display: none;
            }

            .collapsed .side-bar .admin-menu svg,
            .collapsed .side-bar .admin-menu .svg_icon {
                margin-right: 0;
            }

            .collapsed .side-bar .collapse-btn svg {
                transform: rotate(180deg);

            }

            .collapsed .page-content {
                left: 40px;
                width: calc(100% - 40px);
            }
        }

        @media (max-width: 1199px){
            .searchTerm {
                width: 81%;
            }

            .data .heading h2 {
                font-size: 26px;
                margin-top: 9px;
            }
        }


    </style>
</head>

<body>
    <svg style="display: none;">
        <symbol id="collapse" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
                <path
                    d="M12.2579 17C12.006 17 11.7536 16.9047 11.5615 16.7121L4.04606 9.19572C3.66141 8.81107 3.66141 8.18844 4.04606 7.80379L11.5615 0.288367C11.9461 -0.0962849 12.5693 -0.0962849 12.9539 0.288367C13.3386 0.673018 13.3386 1.29614 12.9539 1.6803L6.13395 8.49975L12.9539 15.3192C13.3386 15.7039 13.3386 16.3275 12.9539 16.7121C12.7618 16.9042 12.5099 17 12.2579 17Z"
                    fill="#FAF5F5" />
            </g>
            <defs>
                <clipPath id="clip0">
                    <rect width="17" height="17" fill="black" />
                </clipPath>
            </defs>
        </symbol>


        <symbol id="down" viewBox="0 0 16 16">
            <polygon points="3.81 4.38 8 8.57 12.19 4.38 13.71 5.91 8 11.62 2.29 5.91 3.81 4.38" />
        </symbol>
    </svg>
    <header class="side-bar">
        <nav>
            <div class="logo_div">
                <a href="#0" aria-label="logo" class="logo">
                    <img src="{{asset('images/logo.svg')}}" alt="logo" type="image/svg+xml" />
                </a>
            </div>
           <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
                <svg width="20" height="20" aria-hidden="true">
                    <use xlink:href="#down"></use>
                </svg>
            </button>
            <ul class="admin-menu">
                <li class="menu-heading">
                    <h3>Admin</h3>
                </li>

                @yield('nav_items')
                <hr>
                <li class="">
                    <a href="{{url('admin/logout')}}">
                        <img src="{{asset('images/logout.svg')}}" alt="course" type="image/svg+xml" class="svg_icon" />
                        <span>Logout</span>
                    </a>
                </li>
                <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu" style="background-color: #EE7674">
                    <svg aria-hidden="true">
                        <use xlink:href="#collapse"></use>
                    </svg>
                    <span style="color: #F9F9F9">Collapse</span>
                </button>
                </li>
            </ul>
        </nav>
    </header>
    <section class="page-content">
        @yield('contents')
    </section>
    <script>
        const html = document.documentElement;
        const body = document.body;
        const menuLinks = document.querySelectorAll(".admin-menu a");
        const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
        const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
        const collapsedClass = "collapsed";

        /*TOGGLE HEADER STATE*/
        collapseBtn.addEventListener("click", function () {
            body.classList.toggle(collapsedClass);
            this.getAttribute("aria-expanded") == "true"
                ? this.setAttribute("aria-expanded", "false")
                : this.setAttribute("aria-expanded", "true");
            this.getAttribute("aria-label") == "collapse menu"
                ? this.setAttribute("aria-label", "expand menu")
                : this.setAttribute("aria-label", "collapse menu");
        });

        /*TOGGLE MOBILE MENU*/
        toggleMobileMenu.addEventListener("click", function () {
            body.classList.toggle("mob-menu-opened");
            this.getAttribute("aria-expanded") == "true"
                ? this.setAttribute("aria-expanded", "false")
                : this.setAttribute("aria-expanded", "true");
            this.getAttribute("aria-label") == "open menu"
                ? this.setAttribute("aria-label", "close menu")
                : this.setAttribute("aria-label", "open menu");
        });

        /*SHOW TOOLTIP ON MENU LINK HOVER*/
        for (const link of menuLinks) {
            link.addEventListener("mouseenter", function () {
                if (
                    body.classList.contains(collapsedClass) &&
                    window.matchMedia("(min-width: 768px)").matches
                ) {
                    const tooltip = this.querySelector("span").textContent;
                    this.setAttribute("title", tooltip);
                } else {
                    this.removeAttribute("title");
                }
            });
        }
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>

</html>
