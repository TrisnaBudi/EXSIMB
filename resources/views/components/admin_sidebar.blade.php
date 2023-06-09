<aside class="main-sidebar sidebar-dark-primary" style="min-height: 353.2px;" id="sidebar-nav">
  <!-- Sidebar -->
  <div class="sidebar bg-dark">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">
          <span class="brand-text font-weight-light">EXSIMB</span>
      </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                  <a class="nav-link" href="/dashboard">
                      <i class="bi bi-speedometer2 nav-icon"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-heading">Knowledge</li>
              <li class="nav-item">
                  <a class="nav-link" href="/">
                      <i class="bi bi-house nav-icon"></i>
                      <span>Home</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('gejala.index') }}">
                      <i class="bi bi-list-check nav-icon"></i>
                      <span>Gejala</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('kerusakan.index') }}">
                      <i class="bi bi-exclamation-circle nav-icon"></i>
                      <span>Kerusakan</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('spk.index') }}">
                      <i class="bi bi-bar-chart nav-icon"></i>
                      <span>Diagnosis Results</span>
                  </a>
              </li>
              <li class="nav-heading">Settings</li>
              <li class="nav-item">
                  <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-people nav-icon"></i><span>Admin</span><i class="bi bi-chevron-down ms-auto"></i>
                  </a>
                  <ul id="forms-nav" class="nav nav-treeview collapse" data-bs-parent="#sidebar-nav">
                      <li class="nav-item">
                          <a href="{{ route('admin.list_admin') }}" class="nav-link">
                              <i class="bi bi-circle nav-icon"></i><span>Admin List</span>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item" style="white-space: nowrap;">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="bi bi-box-arrow-right nav-icon"></i>{{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
