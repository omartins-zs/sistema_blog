<div class="card shadow mb-4">
    <div class="card-header py-3"><?= empty($categoria->name) ? 'Nova Categoria' : 'Editar categoria'; ?></div>
    <div class="card-body">
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo validation_errors('<li>', '</li>'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <?= form_open() ?>
        <div class="form-group">
            <label class="small mb-1" for="inputUsername">Nome da categoria</label>
            <input class="form-control" id="inputUsername" type="text" value="<?= set_Value('nome', $categoria->nome); ?>" name="nome"></input>
        </div>
        <button class="btn btn-primary" type="submit">Adicionar Categoria</button>
        <?php echo form_close() ?>
    </div>
</div>