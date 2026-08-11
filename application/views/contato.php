<section class="ftco-section contact-section px-md-4">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Informações de Contato</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-6 col-xl-3 d-flex mb-4">
                <div class="info bg-light p-4">
                    <p><span>Endereço:</span> Av. Paulista, 1000 - São Paulo, SP</p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 d-flex mb-4">
                <div class="info bg-light p-4">
                    <p><span>Telefone:</span> <a href="tel://11999999999">+55 (11) 99999-9999</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 d-flex mb-4">
                <div class="info bg-light p-4">
                    <p><span>E-mail:</span> <a href="mailto:contato@blog.com">contato@blog.com</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3 d-flex mb-4">
                <div class="info bg-light p-4">
                    <p><span>Website</span> <a href="<?= base_url() ?>">blog.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-lg-6 d-flex">
                <form action="#" class="bg-light p-5 contact-form" onsubmit="alert('Mensagem enviada com sucesso!'); return false;">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Seu Nome" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Seu E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <textarea name="mensagem" cols="30" rows="7" class="form-control" placeholder="Sua Mensagem" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>

            <div class="col-lg-6 d-flex">
                <div id="map" class="bg-light">
                    <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=-46.6600%2C-23.5650%2C-46.6500%2C-23.5550&amp;layer=mapnik" style="width:100%; height:100%; min-height: 400px; border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>