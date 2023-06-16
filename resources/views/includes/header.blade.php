    <!-- Nav and Logo
    ================================================== -->
    <!-- MENU
    ================================================== -->

    <nav id="menu-wrap" class="menu-back cbp-af-header">
        <div class="menu">
            <a href="/">
                <div class="logo"></div>
            </a>
            <ul>
                @auth
                <li>
                    <a class="shadow-hover" href="/dashboard">Dashboard</a>
                </li>
                @endauth

                <li>
                    <a class="shadow-hover" href="/">Home</a>
                </li>
                <li>
                    <a class="shadow-hover " href="#">Menu</a>
                    <ul>
                        <li><a href="/form-faq">Diagnosa</a></li>
                        <li><a href="/perawatan">Informasi Perawatan</a></li>
                        <li><a href="/kerusakan">Depresi</a></li>
                    </ul>
                </li>
                <li>
                    <a class="shadow-hover" href="/aboutus">About Us</a>
                </li>

                @guest()
                <li>
                    <a class="shadow-hover" href="/login">Login</span></a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    