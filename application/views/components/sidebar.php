	<div class="sidebar-box pt-md-4">
		<form action="#" class="search-form">
			<div class="form-group">
				<span class="icon icon-search"></span>
				<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
			</div>
		</form>
	</div>
	<div class="sidebar-box ftco-animate">
		<h3 class="sidebar-heading">Categorias</h3>
		<ul class="categories">
			<?php if (count($categorias)) : ?>
				<?php foreach ($categorias as $categoria) : ?>
					<li><a href="<?= base_url('blog/categoria/' . $categoria->id) ?>"><?= $categoria->nome ?><span>(<?= $categoria->num_posts ?>)</span></a></li>
				<?php endforeach  ?>
			<?php else : ?>
				<li><a href="<?= base_url() ?>">Não há categorias <span>(0)</span></a></li>
			<?php endif ?>
		</ul>
	</div>