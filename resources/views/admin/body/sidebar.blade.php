 <!-- Sidebar -->
 <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class=""></i>
        </div>
        <div class="sidebar-brand-text mx-3">Poliwangi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="{{'dashboard' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="{{'kepanitiaans/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link collapsed" href="{{url('/kepanitiaans/view')}}">
            </i><i class="fas fa-solid fa-table"></i>
            <span>Kepanitiaan</span>
        </a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <i class="fas fa-solid fa-door-closed"></i>
        <span>Log Out</span></a>
    </li>
</ul>
<!-- End of Sidebar -->