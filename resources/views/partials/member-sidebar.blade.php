
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is("member") ? "active" : "" }}">
        <a class="nav-link" href="{{ url('/member') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Rabbits
    </div>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> -->


    <!-- Routes  -->
    <li class="nav-item {{ request()->is("member/rabbit-profile/*") || request()->is("member/rabbit-profile") ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('member/rabbit-profile') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rabbit Profiles</span></a>
    </li>

    <li class="nav-item {{ request()->is('/member/breeding-profile') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('member/breeding-profile') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Breeding Profiles</span></a>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="{{ url('member/rabbit-inventory') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rabbit Inventory</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('member/rabbit-health-status') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rabbit Health Status</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('member/rabbit-profile') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Rabbit Posts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('member/rabbit-profile') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Make Requests</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('member/rabbit-profile') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Billing Records</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->