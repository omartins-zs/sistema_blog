<div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listar Artigos</h6>
        <a class="d-sm-inline-block btn btn-sm btn-success shadow-sm" href="<?= base_url('admin/post/editar'); ?>"><i class="fas fa-plus-circle fa-sm"></i> Novo artigo</a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('msg')) : ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <?= $this->session->flashdata('msg') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Autor</th>
                        <th>Data de publicação</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (count($posts)) : foreach ($posts as $post) : ?>
                            <tr>
                                <td><img class="rounded-circle" style="width: 4rem; height: 4rem;" src="<?= base_url('assets/images/' . $post->imagem); ?>"></td>
                                <td><?= $post->titulo ?></td>
                                <td><?= limitePalavras($post->descricao, 16) . '...' ?></td>
                                <td><?= $post->autor ?></td>
                                <td><?= $post->data_criacao ?></td>
                                <td>
                                    <a href="<?= base_url('admin/post/editar/' . $post->id); ?>" class="btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm"></i> Editar</a>
                                    <a href="<?= base_url('admin/post/delete/' . $post->id); ?>" onclick="return confirm('Certeza que quer excluir esse post?')" class="btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash-alt fa-sm"></i> Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5" class="text-center">No existen Articulos, agregar un nuevo articulo.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>