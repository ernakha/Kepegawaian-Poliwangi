 <!-- Sidebar -->
 <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{asset('backend/img/poliwangi.png')}}" alt="" style="height: 45px; width: 45px;">
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
            </i><i class="fas fa-solid fa-id-card"></i>
            <span>Kepanitiaan</span>
        </a>
    </li>

    <li class="{{'dinlurs/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link collapsed" href="{{url('/dinlurs/view')}}">
            </i><i class="fas fa-solid fa-car"></i>
            <span>Dinas Luar</span>
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