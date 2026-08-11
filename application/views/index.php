<div class="row pt-md-4">
    <?php if (count($posts)) : ?>
        <?php foreach ($posts as $post) : ?>
            <div class="col-md-12">
                <div class="blog-entry ftco-animate d-md-flex">
                    <a href="single.html" class="img img-2" style="background-image: url(<?= base_url('assets/images/' . $post->imagem) ?>);"></a>
                    <div class="text text-2 pl-md-4">
                        <h3 class="mb-2"><a href="<?= base_url('blog/post/' . $post->id) ?>"><?= $post->titulo ?></a></h3>
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i><?= format_date($post->data_criacao) ?></span>
                                <span><a href="<?= base_url('blog/categoria/' . $post->categoria_id) ?>"><i class="icon-folder-o mr-2"></i><?= $post->nome ?></a></span>
                                <span><i class="icon-user mr-2"></i><?= $post->autor ?></span>
                            </p>
                        </div>
                        <p class="mb-4"><?= limitePalavras($post->descricao, 16) ?></p>
                        <p><a href="<?= base_url('blog/post/' . $post->id) ?>" class="btn-custom">Ler mais <span class="ion-ios-arrow-forward"></span></a></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php else : ?>
        <div class="col-md-12">
            <div class="blog-entry ftco-animate d-md-flex">
                <p>No hay articulos</p>
            </div>
        </div>
    <?php endif ?>
</div><!-- END-->