<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin_home') }}">
            <i style="font-size:20px" class="fas fa-fw fa-tachometer-alt"></i>
            <span style="font-size: 23px">Admin Panel</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin_home') }}">
            <i style="font-size:16px" class="fas fa-fw fa-cog"></i>
            <span  style="font-size:18px" >Anasayfa</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin_category') }}">
            <i style="font-size:16px" class="fas fa-fw fa-wrench"></i>
            <span style="font-size:18px">Kategoriler</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin_blogs') }}">
            <i style="font-size:16px" class="fas fa-fw fa-rss"></i>
            <span style="font-size:18px">Bloglar</span>
        </a>
    </li>
    
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin_message') }}">
            <i style="font-size:16px" class="fas fa-envelope-square"></i>
            <span style="font-size:18px">Mesajlar</span>
        </a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin_review') }}">
            <i style="font-size:16px" class="fas fa-comments"></i>
            <span style="font-size:18px">Yorumlar</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin_faq') }}">
            <i style="font-size:16px" class="fas fa-question"></i>
            <span style="font-size:18px">FAQ</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin_users') }}">
            <i style="font-size:16px" class="fas fa-users"></i>
            <span style="font-size:18px">Kullanıcılar</span>
        </a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin_setting') }}">
            <i style="font-size:16px" class="fas fa-envelope-square"></i>
            <span style="font-size:18px">Settings</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->