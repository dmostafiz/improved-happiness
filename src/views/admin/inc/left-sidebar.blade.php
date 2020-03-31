<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ url('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">LaraLte Admin</span>
    </a>
    
    <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link {{ setActive(['admin.index'], 'active') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
    
            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-edit"></i>
                  <p>
                    Blog Writing
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
    
                  <li class="nav-item ">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>All Articles</p>
                    </a>
                  </li>
    
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Article</p>
                    </a>
                  </li>
    
                </ul>
            </li>
            
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
<!-- /.sidebar -->