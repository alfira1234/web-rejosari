<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rejosari</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Contents
    </div>
    <li class="nav-item">
        {{-- <a class="nav-link" href="">
            <i class="fa-solid fa-palette"></i>
            <span>Tema Wisata</span></a>

        <a class="nav-link" href="">
            <i class="fa-solid fa-people-group"></i>
            <span>Pokdarwis</span></a> --}}

        <a class="nav-link" href="/paketwis">
            <i class="fa-regular fa-images"></i>
            <span>Paket Wisata</span></a>

        <a class="nav-link" href="/pesanwis">
            <i class="fa-solid fa-cart-plus"></i>
            <span>Daftar Pesanan</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Utilities Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Charts -->

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Pengelolaan Program Pokdarwis</span>
        </a>

        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/tabel">Program Pokdarwis</a>
                <a class="collapse-item" href="/tabel">Bidang Program</a>
                <a class="collapse-item" href="/jenis">Jenis Paket</a>
                <a class="collapse-item" href="/kategori">Kategori</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
