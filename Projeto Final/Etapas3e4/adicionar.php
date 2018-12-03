<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Produto </h3>
		<form action="php_action/create.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
				<input type="text" name="description" id="description">
				<label for="description">Descrição</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="brand" id="brand">
				<label for="brand">Marca</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="info" id="info">
				<label for="info">Informações</label>
			</div>

			<div class="input-field col s12">
				<input type="file" name="image" value="Imagem:">
			</div>
			<button type="submit" name="add" class="btn right amber"> Cadastrar </button>
			<a href="index.php" class="btn"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
