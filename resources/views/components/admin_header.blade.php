<header id="header" class="header fixed-top d-flex align-items-center">
    <nav class="main-header d-flex justify-content-between">
        <!-- Tambahkan tombol toggle sidebar di dalam main-header -->
        <button class="toggle-sidebar-btn">
            <i id="sidebar-nav" class="bi bi-list"></i>
        </button>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            <h6>{{ auth()->check() ? auth()->user()->name : 'Admin' }}</h6>
                        </span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->check() ? auth()->user()->name : 'Admin' }}</h6>
                            <span>Developer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.edit', ['id' => auth()->id()]) }}">
                                <i class="bi bi-gear"></i>
                                <span>Ubah Password</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </button>
                        </form>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </nav><!-- End Main Header -->
</header><!-- End Header -->
