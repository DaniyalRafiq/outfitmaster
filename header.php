<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.svg" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?>" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown navdesktop">
                        <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                        Services <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"  href="#">Service 1</a></li>
                            <li><a class="dropdown-item"  href="#">Service 2</a></li>
                            <li><a class="dropdown-item"  href="#">Service 3</a></li>
                            <li><a class="dropdown-item"  href="#">Service 4</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="my-2 my-lg-0 d-xl-block d-none">
                <a href="#" class="btn btn-theme">Get Started</a>
            </div>
        </div>
    </nav>
</header>