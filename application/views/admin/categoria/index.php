  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header d-flex align-items-center justify-content-between py-3">
          <h6 class="m-0 font-weight-bold text-primary">Lista de categorias</h6>
          <a class="d-sm-inline-block btn btn-sm btn-success shadow-sm" href="<?= base_url('admin/categoria/editar') ?>"><i class="fas fa-plus-circle fa-sm"></i> Nova categoria</a>
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
                          <th>Categoria</th>
                          <th>Ações</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php if (count($categorias)) : foreach ($categorias as $categoria) : ?>
                              <tr>
                                  <td><?= $categoria->nome ?></td>
                                  <td>
                                      <a href="<?= base_url('admin/categoria/editar/' . $categoria->id); ?>" class="btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm"></i> Editar</a>
                                  </td>
                              </tr>
                          <?php endforeach; ?>
                      <?php else : ?>
                          <tr>
                              <td colspan="2" class="text-center">Não existem categorias.</td>
                          </tr>
                      <?php endif; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>