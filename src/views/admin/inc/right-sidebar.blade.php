<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        @if (Auth::user()->avatar != '')
            <img class="img-circle elevation-2"
            src="{{ url('storage/user/'. Auth::user()->avatar) }}" alt="User Image">
        @else
            <img class="img-circle elevation-2"
            src="{{ url('defaults/user.png') }}" alt="User Image">
        @endif
      </div>
      <div class="info">
          <p>
            {{ ( auth()->check() ) ? auth()->user()->name : "Mostafiz Rahaman " }}
            <br>
            <small>
              {{ ( auth()->check() ) ? auth()->user()->email : "dev.mosatfiz@gmail.com" }}
            </small>
          </p>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('user.profile') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile.edit') }}" class="nav-link">
                    <i class="nav-icon fa fa-edit"></i>
                    <p>Update Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile.password') }}" class="nav-link">
                    <i class="nav-icon fa fa-lock"></i>
                    <p>Change Password</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.logout') }}" class="nav-link">
                    <i class="nav-icon fa fa-power-off"></i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</aside>