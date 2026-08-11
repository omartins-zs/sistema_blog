<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle Mobile -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Breadcrumb / Título da página atual -->
    <div class="d-none d-sm-flex align-items-center mr-auto ml-md-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 bg-transparent p-0 small">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('admin/dashboard') ?>" class="text-primary">
                        <i class="fas fa-home fa-xs mr-1"></i> Admin
                    </a>
                </li>
                <?php
                $uri_segments = array_filter(explode('/', uri_string()));
                $uri_arr      = array_values($uri_segments);
                // Remove 'admin' do início
                if (isset($uri_arr[0]) && $uri_arr[0] === 'admin') array_shift($uri_arr);
                $labels = ['dashboard' => 'Dashboard', 'post' => 'Artigos', 'categoria' => 'Categorias', 'editar' => 'Editar', 'delete' => 'Excluir'];
                foreach ($uri_arr as $seg):
                    $label = $labels[$seg] ?? ucfirst($seg);
                ?>
                    <li class="breadcrumb-item active"><?= htmlspecialchars($label) ?></li>
                <?php endforeach; ?>
            </ol>
        </nav>
    </div>

    <!-- Topbar right -->
    <ul class="navbar-nav ml-auto">

        <!-- Atalho: Novo Artigo -->
        <li class="nav-item d-none d-sm-block mr-1">
            <a class="nav-link" href="<?= base_url('admin/post/editar') ?>" title="Novo artigo">
                <i class="fas fa-plus-circle text-success"></i>
                <span class="d-none d-md-inline small ml-1 text-success font-weight-bold">Novo artigo</span>
            </a>
        </li>

        <!-- Atalho: Ver Blog -->
        <li class="nav-item d-none d-sm-block mr-2">
            <a class="nav-link" href="<?= base_url() ?>" target="_blank" title="Ver blog público">
                <i class="fas fa-external-link-alt text-info"></i>
                <span class="d-none d-md-inline small ml-1 text-info">Ver blog</span>
            </a>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Dropdown do usuário -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="d-none d-lg-flex flex-column align-items-end mr-2">
                    <span class="text-gray-800 small font-weight-bold">
                        <?= htmlspecialchars($this->session->userdata('nome') ?: 'Administrador') ?>
                    </span>
                    <span class="text-gray-500" style="font-size: .72rem;">Administrador</span>
                </div>
                <img class="img-profile rounded-circle border"
                     style="width:40px; height:40px; object-fit:cover; border-color:#e3e6f0 !important;"
                     src="<?= base_url() ?>assets/admin/img/undraw_profile.svg"
                     alt="Perfil">
            </a>

            <!-- Dropdown Menu -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <!-- Info do usuário -->
                <div class="dropdown-header bg-gradient-primary text-white py-3 px-4 rounded-top">
                    <div class="font-weight-bold">
                        <i class="fas fa-user-circle mr-2"></i>
                        <?= htmlspecialchars($this->session->userdata('nome') ?: 'Administrador') ?>
                    </div>
                    <div style="font-size:.78rem; opacity:.8;">Painel de Administração</div>
                </div>

                <a class="dropdown-item" href="<?= base_url('admin/dashboard') ?>">
                    <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                    Dashboard
                </a>
                <a class="dropdown-item" href="<?= base_url('admin/post') ?>">
                    <i class="fas fa-newspaper fa-sm fa-fw mr-2 text-gray-400"></i>
                    Artigos
                </a>
                <a class="dropdown-item" href="<?= base_url('admin/categoria') ?>">
                    <i class="fas fa-tags fa-sm fa-fw mr-2 text-gray-400"></i>
                    Categorias
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="<?= base_url() ?>" target="_blank">
                    <i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                    Ver Blog Público
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item text-danger" href="<?= base_url('user/logout') ?>"
                   onclick="return confirm('Deseja realmente sair?')">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                    Sair
                </a>
            </div>
        </li>

    </ul>
</nav>
<!-- End of Topbar -->