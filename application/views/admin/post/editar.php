<div class="card shadow mb-4">
    <div class="card-header py-3"><?= empty($post->titulo) ? 'Novo artigo' : 'Editar artigo'; ?> </div>
    <div class="card-body">
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= validation_errors('<li>', '</li>'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('error_msg')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('error_msg') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
        <!-- <?php if (!empty($error_msg)) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $error_msg ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php endif ?> -->
        <?= form_open_multipart(); ?>
        <div class="form-group">
            <label class="small mb-1" for="inputUsername">Upload da imagem</label>

            <?php if ($post->imagem == '') : ?>
                <img src="<?= base_url('assets/images/default.jpg'); ?>" id="img_url" alt="tu imagen" class="img-thumbnail">
            <?php else : ?>
                <img src="<?= base_url('assets/images/' . $post->imagem); ?>" id="img_url" alt="tu imagen" class="img-thumbnail">
            <?php endif; ?>

            <input type="hidden" name="imagem_nome" value="<?= $post->imagem ?>">
            <input class="form-control-file mt-2" id="inputUsername" type="file" name="imagem" onChange="img_pathUrl(this);">
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputUsername">Titulo</label>
            <input class="form-control" id="inputUsername" type="text" name="titulo" value="<?= set_value('nome', $this->input->post('titulo') ? $this->input->post('titulo') : $post->titulo); ?>">
        </div>
        <div class="form-group">
            <label class="small mb-1" for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"><?= set_value('descricao', $post->descricao); ?></textarea>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="exampleFormControlSelect2">Selecionar Categoria</label>
            <select class="form-control" id="exampleFormControlSelect2" name="categoria_id">
                <?php if ($post->categoria_id == 0) : ?>
                    <option value="" selected>Selecionar categoria</option>
                <?php endif ?>
                <?php foreach ($categorias as $categoria) : ?>
                    <option value="<?= $categoria->id ?>" <?php if ($categoria->id == $post->categoria_id) echo "selected" ?> <?= set_select('categoria_id', $categoria->id) ?>><?= $categoria->nome ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Registrar Articulo</button>
        <?php echo form_close() ?>
    </div>
</div>