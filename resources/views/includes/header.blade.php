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
                <li>
                    <a class="shadow-hover" href="/dashboard">Dashboard</a>
                </li>
                <li>
                    <a class="shadow-hover curent-shadow" href="#">Menu</a>
                    <ul>
                        <li><a href="/form-faq">Diagnosa</a></li>
                        <li><a href="/gejala">Gejala</a></li>
                        <li><a href="/kerusakan">Depresi</a></li>
                    </ul>
                </li>
                <li>
                    <a class="shadow-hover" href="#kontak">Kontak</a>
                </li>

                @guest()
                <li>
                    <a class="shadow-hover" href="/login">Login</span></a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>