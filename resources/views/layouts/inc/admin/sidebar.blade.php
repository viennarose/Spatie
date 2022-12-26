<nav class="sidebar sidebar-offcanvas nav-pills sidebar-fill bg-light shadow-lg" id="sidebar">
    <ul class="nav mt-4 text-dark">
      <li class="nav-item border-0">
        <a class="nav-link" href="{{url('/home')}}">
          <i class="mdi mdi-home menu-icon" style="color:white"></i>
          <span class="menu-title text-dark">Dashboard</span>
        </a>
      </li>
@role('admin')
      <li class="nav-item border-0">
        <a class="nav-link" href="{{url('/admin/user-view')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Manage Users</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ route('admin.roles.index')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Manage Roles</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ route('admin.permissions.index')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-dark ms-4">Manage Permission</span>
        </a>
      </li>
@endrole

      {{-- <li class="nav-item border-0">
        <a class="nav-link" href="pages/charts/chartjs.html">
            <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title text-dark">Profile</span>
        </a>
      </li> --}}
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/patients')}}">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title text-dark">Treatment Records</span>
        </a>
    </li>
    </ul>
  </nav>
