<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Administração </div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Inicio</span></a>
	</li>
<?php
// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>'
?>
	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Charts -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/categoria')  ?>">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Categorias</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/post')  ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Artigos</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>