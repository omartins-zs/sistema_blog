<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-newspaper mr-2"></i> Listar Artigos
        </h6>
        <a class="btn btn-sm btn-success shadow-sm" href="<?= base_url('admin/post/editar'); ?>">
            <i class="fas fa-plus-circle fa-sm mr-1"></i> Novo artigo
        </a>
    </div>

    <div class="card-body">

        <?php if ($this->session->flashdata('msg')) : ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <i class="fas fa-check-circle mr-1"></i> <?= $this->session->flashdata('msg') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error_msg')) : ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <i class="fas fa-exclamation-triangle mr-1"></i> <?= $this->session->flashdata('error_msg') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 80px;">Imagem</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th style="width: 130px;">Autor</th>
                        <th class="text-center" style="width: 120px;">Publicado em</th>
                        <th class="text-center" style="width: 120px;">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (count($posts)) : foreach ($posts as $post) : ?>
                        <tr>
                            <!-- Imagem com fallback -->
                            <td class="text-center align-middle">
                                <img
                                    class="rounded-circle shadow-sm"
                                    style="width: 52px; height: 52px; object-fit: cover; border: 2px solid #e3e6f0;"
                                    src="<?= base_url('assets/images/' . $post->imagem); ?>"
                                    alt="<?= htmlspecialchars($post->titulo) ?>"
                                    onerror="this.onerror=null; this.src='<?= base_url('assets/images/default.jpg') ?>';"
                                >
                            </td>

                            <!-- Título -->
                            <td class="align-middle font-weight-bold">
                                <?= htmlspecialchars($post->titulo) ?>
                            </td>

                            <!-- Descrição resumida -->
                            <td class="align-middle text-muted small">
                                <?= htmlspecialchars(limitePalavras($post->descricao, 18)) ?>...
                            </td>

                            <!-- Autor -->
                            <td class="align-middle">
                                <span class="badge badge-light border">
                                    <i class="fas fa-user fa-xs mr-1 text-secondary"></i>
                                    <?= htmlspecialchars($post->autor) ?>
                                </span>
                            </td>

                            <!-- Data formatada -->
                            <td class="align-middle text-center small text-secondary">
                                <?= date('d/m/Y', strtotime($post->data_criacao)) ?><br>
                                <span class="text-muted"><?= date('H:i', strtotime($post->data_criacao)) ?></span>
                            </td>

                            <!-- Botões de ação — lado a lado, nunca empilhados -->
                            <td class="align-middle text-center" style="white-space: nowrap;">
                                <a href="<?= base_url('admin/post/editar/' . $post->id); ?>"
                                   class="btn btn-info btn-sm shadow-sm"
                                   title="Editar post"
                                   style="margin-right: 4px;">
                                    <i class="fas fa-edit fa-sm"></i> Editar
                                </a>
                                <a href="<?= base_url('admin/post/delete/' . $post->id); ?>"
                                   class="btn btn-danger btn-sm shadow-sm"
                                   title="Excluir post"
                                   onclick="return confirm('Tem certeza que quer excluir o post \'<?= addslashes($post->titulo) ?>\'?')">
                                    <i class="fas fa-trash-alt fa-sm"></i> Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" class="text-center py-5 text-muted">
                                <i class="fas fa-inbox fa-3x mb-3 d-block"></i>
                                Nenhum artigo encontrado.<br>
                                <a href="<?= base_url('admin/post/editar') ?>" class="btn btn-success btn-sm mt-3">
                                    <i class="fas fa-plus-circle mr-1"></i> Criar primeiro artigo
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<style>
/* Garante que os botões de ação fiquem SEMPRE lado a lado */
#dataTable td:last-child {
    white-space: nowrap !important;
    min-width: 160px;
}
#dataTable td:last-child .btn {
    display: inline-flex !important;
    align-items: center;
    gap: 4px;
    margin: 2px 2px !important;
    vertical-align: middle;
}

/* Imagem com fallback visual */
#dataTable td:first-child img {
    background: #f0f0f0;
    transition: transform 0.2s;
}
#dataTable td:first-child img:hover {
    transform: scale(1.12);
}

/* Linhas com hover sutil */
#dataTable tbody tr:hover {
    background-color: #f8f9fc;
}

/* Cabeçalho da tabela */
#dataTable thead th {
    font-size: 0.80rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: #5a5c69;
}
</style>