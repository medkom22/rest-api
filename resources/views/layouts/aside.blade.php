
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Admin BEM Unsoed</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
       
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
              Artikel
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-book nav-icon"></i>
                <p>Daftar Artikel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <i class="fas fa-book nav-icon"></i>
                <p>Kategori</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Komik
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kategori</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Gensoed Merch</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Fakultas</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>UKM</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>User</p>
          </a>
        </li>

        <li class="nav-header">REST API</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Rest API
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/tables/data.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>