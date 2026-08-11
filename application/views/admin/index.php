<!-- Cabeçalho da página -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <i class="fas fa-home mr-2 text-primary"></i>
        Dashboard
    </h1>
    <div>
        <a href="<?= base_url('admin/post/editar') ?>" class="btn btn-sm btn-success shadow-sm mr-2">
            <i class="fas fa-plus-circle fa-sm mr-1"></i> Novo Artigo
        </a>
        <a href="<?= base_url() ?>" target="_blank" class="btn btn-sm btn-outline-primary shadow-sm">
            <i class="fas fa-eye fa-sm mr-1"></i> Ver Blog
        </a>
    </div>
</div>

<!-- Boas-vindas -->
<div class="alert alert-primary border-left-primary shadow-sm mb-4 py-3 px-4" role="alert">
    <i class="fas fa-hand-wave mr-2"></i>
    Bem-vindo de volta, <strong><?= htmlspecialchars($this->session->userdata('nome') ?: 'Administrador') ?></strong>!
    Gerencie seus artigos e categorias abaixo.
</div>

<!-- Cards de Estatísticas -->
<div class="row">

    <!-- Card: Total de Artigos -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de Artigos</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_posts ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Categorias -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Categorias</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_categorias ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tags fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Criar Novo -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ações Rápidas</div>
                        <a href="<?= base_url('admin/post/editar') ?>" class="btn btn-info btn-sm mt-1">
                            <i class="fas fa-plus fa-xs mr-1"></i> Novo Artigo
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bolt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Ver Blog -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Blog Público</div>
                        <a href="<?= base_url() ?>" target="_blank" class="btn btn-warning btn-sm mt-1 text-white">
                            <i class="fas fa-external-link-alt fa-xs mr-1"></i> Abrir Blog
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-globe fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Tabela dos Últimos Artigos -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-clock mr-2"></i> Artigos Recentes
        </h6>
        <a href="<?= base_url('admin/post') ?>" class="btn btn-sm btn-outline-primary">
            Ver todos <i class="fas fa-arrow-right fa-xs ml-1"></i>
        </a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="thead-light">
                    <tr>
                        <th style="width:70px;" class="pl-3">Img</th>
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Autor</th>
                        <th>Data</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($ultimos_posts)) : ?>
                        <?php foreach (array_slice($ultimos_posts, 0, 5) as $post) : ?>
                        <tr>
                            <td class="align-middle pl-3">
                                <img src="<?= base_url('assets/images/' . $post->imagem) ?>"
                                     class="rounded-circle"
                                     style="width:42px;height:42px;object-fit:cover;border:2px solid #e3e6f0;"
                                     onerror="this.src='<?= base_url('assets/images/default.jpg') ?>';"
                                     alt="">
                            </td>
                            <td class="align-middle font-weight-bold text-gray-800">
                                <?= htmlspecialchars($post->titulo) ?>
                            </td>
                            <td class="align-middle">
                                <span class="badge badge-primary badge-pill"><?= htmlspecialchars($post->nome ?? '—') ?></span>
                            </td>
                            <td class="align-middle small text-muted">
                                <?= htmlspecialchars($post->autor) ?>
                            </td>
                            <td class="align-middle small text-muted">
                                <?= date('d/m/Y', strtotime($post->data_criacao)) ?>
                            </td>
                            <td class="align-middle text-center">
                                <a href="<?= base_url('admin/post/editar/' . $post->id) ?>"
                                   class="btn btn-info btn-sm">
                                    <i class="fas fa-edit fa-xs"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">
                                <i class="fas fa-inbox fa-2x mb-2 d-block"></i>
                                Nenhum artigo ainda.
                                <a href="<?= base_url('admin/post/editar') ?>" class="d-block mt-2">Criar primeiro artigo</a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>