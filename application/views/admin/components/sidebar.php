<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-blog"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Blog <span style="font-weight:300; font-size:.85em;">Admin</span></div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item <?= (strpos(current_url(), 'dashboard') !== false) ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Conteúdo</div>

    <!-- Artigos -->
    <li class="nav-item <?= (strpos(current_url(), 'admin/post') !== false) ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/post') ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Artigos</span>
        </a>
    </li>

    <!-- Categorias -->
    <li class="nav-item <?= (strpos(current_url(), 'admin/categoria') !== false) ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin/categoria') ?>">
            <i class="fas fa-fw fa-tags"></i>
            <span>Categorias</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Navegação</div>

    <!-- Ver Blog -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>" target="_blank">
            <i class="fas fa-fw fa-eye"></i>
            <span>Ver Blog</span>
        </a>
    </li>

    <!-- Sair -->
    <li class="nav-item">
        <a class="nav-link text-warning-light" href="<?= base_url('user/logout') ?>"
           onclick="return confirm('Deseja realmente sair?')">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Sair</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>