<?php
session_start();
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Produto </h3>
		<form action="php_action/create.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
				<input type="text" name="description" id="description" required>
				<label for="description">Descrição</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="brand" id="brand" required>
				<label for="brand">Marca</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="info" id="info" required>
				<label for="info">Informações</label>
			</div>

			<div class="input-field col s12">
				<input type="number" name="quantity" id="quantity" min="0"required>
				<label for="quantity">Quantidade</label>
			</div>

			<div class="input-field col s12">
				<input type="file" name="image" value="Imagem" required>
			</div>

<!-- 			<div class="file-field input-field col s12">
				<div class="btn-small">
					<span>Escolher imagem</span>
					<input type="file" name="image" value="Imagem:" required>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div> -->

			<button type="submit" name="add" class="btn right green col s4"> Cadastrar </button>
			<a href="produtos.php" class="btn col s4"> Lista de produtos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
