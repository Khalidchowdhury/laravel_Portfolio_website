
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">

    
    <div class="nav">

        {{-- Sidebar Dashboard Nav bar  --}}
        <a class="nav-link" href="{{ route('main.page') }}">
            <div class="sb-nav-link-icon">
                <i class="fas fa-house"></i>
            </div>
            Main
        </a>
        <a class="nav-link" href="{{ route('about.page') }}">
            <div class="sb-nav-link-icon">
                <i class="fas fa-address-card"></i>
            </div>
            About 
        </a>
        <a class="nav-link" href="{{ route('portfolio.page') }}">
            <div class="sb-nav-link-icon">
                <i class="fas fa-file"></i>
            </div>
            Portfolio
        </a>
        <a class="nav-link" href="{{ route('team.page') }}">
            <div class="sb-nav-link-icon">
                <i class="fas fa-apple-whole"></i>
            </div>
            Team
        </a>
        <a class="nav-link" href="{{ route('contact.page') }}">
            <div class="sb-nav-link-icon">
                <i class="far fa-address-card"></i>
            </div>
            Contact
        </a>
        
        
        
        {{-- Dashboard Main Menu Navbar  --}}
        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                    Authentication
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="login.html">Login</a>
                        <a class="nav-link" href="register.html">Register</a>
                        <a class="nav-link" href="password.html">Forgot Password</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                    Error
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="401.html">401 Page</a>
                        <a class="nav-link" href="404.html">404 Page</a>
                        <a class="nav-link" href="500.html">500 Page</a>
                    </nav>
                </div>
            </nav>
        </div>  
    </div>





            </div>
        </nav>
    </div>
