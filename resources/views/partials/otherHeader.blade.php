<!-- Header Area -->


<header class="rt-header sticky-on">
    <div id="sticky-placeholder"></div>
    <div id="navbar-wrap" class="header-menu menu-layout1 header-menu menu-layout2">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-area">
                        <a href="{{ route('home') }}" class="temp-logo">
                            <img src="{{ asset('assets/img/logo.jpeg') }}" width="157" height="40" alt="logo" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-flex justify-content-center position-static">
                    <nav id="dropdown" class="template-main-menu template-main-menu-3">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="{{ (Route::is('home')) ? 'active' : '' }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="{{ (Route::is('about')) ? 'active' : '' }}">About</a>
                            </li>
                            <li>
                                <a href="with-sidebar2.html">Property</a>
                            </li>
                            <li class="hide-on-desktop-menu">
                                <a href="index.html">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about-1.html">About</a>
                                    </li>
                                    <li>
                                        <a href="with-sidebar2.html">Property</a>
                                    </li>
                                    <li>
                                        <a href="blog1.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="404.html">404 Error</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact page</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="{{ (Route::is('contact')) ? 'active' : '' }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-4 col-lg-4 d-flex justify-content-end">
                    <div class="header-action-layout1">
                        <ul class="action-list">
                            <li class="action-item-style my-account">
                                <a href="account.html" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Sign In">
                                    <i class="flaticon-user-1"></i>
                                </a>
                            </li>
                            <li class="listing-button">
                                <a href="post-add.html" class="listing-btn">
                                    <span>
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                    <span class="item-text">Add Property</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div
            class="rt-header-menu mean-container position-relative"
            id="meanmenu">
            <div class="mean-bar">
                <a href="{{ route('home') }}">
                    <img src='{{ asset("assets/img/logo_light.png") }}' alt='logo' class='img-fluid'/>
                </a>
                <div class="mean-bar--right">
                    <div class="actions search">
                        <a href="#template-search" class="item-icon" title="Search">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                    <div class="actions user">
                        <a href="{{ route('home') }}"><i class="flaticon-user"></i></a>
                    </div>
                    <span class="sidebarBtn">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>
                </div>
            </div>
            <div class="rt-slide-nav">
                <div class="offscreen-navigation">
                    <nav class="menu-main-primary-container">
                        <ul class="menu">
                            <li class="list menu-item-parent">
                                <a class="animation" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="list menu-item-parent">
                                <a class="animation" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="list menu-item-parent">
                                <a class="animation" href="{{ route('about') }}">Property</a>
                            </li>

                            <li class="list menu-item-parent menu-item-has-children">
                                <a class="animation" href="{{ route('about') }}">Agents</a>
                                <ul class="main-menu__dropdown sub-menu">
                                    <li><a href="agency-lists1.html">Agency List page</a></li>
                                    <li><a href="agent-lists1.html">Agent List Page</a></li>
                                    <li><a href="agent-reviews1.html">Agent Reviews Page</a></li>
                                </ul>
                            </li>
                            <li class="list menu-item-parent">
                                <a class="animation" href="{{ route('contact') }}">Contact us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
