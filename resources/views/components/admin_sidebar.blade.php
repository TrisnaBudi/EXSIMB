
        <aside class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/dashboard" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">EXSIMB</span>
                </a>
                <div class="py-sm-4 ms-auto ms-sm-0 flex-shrink-1">
                    <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a class="nav-link px-sm-0 px-2" href="/dashboard">
                                <i class="bi bi-speedometer2 nav-icon"></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-sm-0 px-2" href="/">
                                <i class="bi bi-house nav-icon"></i>
                                <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-sm-0 px-2" href="{{ route('gejala.index') }}">
                                <i class="bi bi-list-check nav-icon"></i>
                                <span class="ms-1 d-none d-sm-inline">Gejala</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-sm-0 px-2" href="{{ route('kerusakan.index') }}">
                                <i class="bi bi-exclamation-circle nav-icon"></i>
                                <span class="ms-1 d-none d-sm-inline">Kerusakan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-sm-0 px-2" href="{{ route('spk.index') }}">
                                <i class="bi bi-bar-chart nav-icon"></i>
                                <span class="ms-1 d-none d-sm-inline">Diagnosa</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-people nav-icon"></i>
                                <span class="ms-1 d-none d-sm-inline">Admin</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li>
                                    <a href="{{ route('admin.list_admin') }}" class="dropdown-item">
                                        <i class="bi bi-circle nav-icon"></i>
                                        <span>Admin List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="dropdown py-sm-4 ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="hugenerd" class="rounded-circle" width="28" height="28">
                        <span class="d-none d-sm-inline mx-1">Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow dropdown-menu-end" aria-labelledby="dropdownUser1">
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.edit', ['id' => auth()->id()]) }}">
                                <i class="bi bi-gear"></i>
                                <span>Ubah Password</span>
                            </a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right nav-icon"></i>
                                    <span>{{ __('Logout') }}</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>