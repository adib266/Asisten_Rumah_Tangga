  <!-- Main Sidebar  -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
      <!-- <img src="{{asset('AdminLTE')}}/dist/img/logo-esteh.png" alt="logo esteh" class=" w-25 h-25 items-center " > -->
      <span class="brand-text ml-3 fw-bold">Asisten Ruamah Tangga</span>
    </a>
    {{-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake w-75" src="{{asset('AdminLTE')}}/dist/img/logo-esteh.png" alt="AdminLTELogo" >
    </div> --}}
    <!-- Akhir Brand Logo -->

    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link ">
                <i class="nav-icon fa-solid fa-house"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/history_majikan" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                lihat history majikan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/verifikasi') }}" class="nav-link">
            <i class="nav-icon fa-brands fa-slack"></i>
              <p>
                Verifikasi Pegawai
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('actionlogout')}}" class="nav-link">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Akhir sidebar menu -->
 
  </aside>
  <!-- Akhir main sidebar  -->