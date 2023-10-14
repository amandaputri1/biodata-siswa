<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2F5B68">
  <!-- Brand Logo -->
  <a>
      <img src="{{ asset('Template/docs/assets/img/logo neskar.png') }}" alt="AdminLTE Logo" style=" width: 40%; height: 40%;">
      <span style=" font-size: 17px; color: white;"> SMKN 1 KARAWANG </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info" style="color: #ffff">
              <a style="color: #ffff; font-size: 18px;">Biodata siswa</a>
          </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search" >
              <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                  aria-label="Search" style="background-color: #fff">
              <div class="input-group-append">
                  <button class="btn btn-sidebar" style="background-color: #fff; color:black" >
                      <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Starter Pages
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ route('siswa.create') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Input Data Siswa</p>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('siswa.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Siswa</p>
                        </a>
                    </li>
                  </ul>
              </li>
              <li class="nav-item">
              </li>
              <li>
                  <form action="{{ route('auth.logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="nav-link btn btn-warning">Logout</button>
                  </form>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<aside class="control-sidebar control-sidebar-dark" style="background-color: #2F5B68">
  <!-- Control sidebar content goes here -->
  
</aside>