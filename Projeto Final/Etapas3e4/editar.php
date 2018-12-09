<?php

session_start();

// Conexão
include_once 'php_action/db.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($db_link, $_GET['id']);

	$sql = "SELECT * FROM products WHERE id = '$id'";
	$resultado = mysqli_query($db_link, $sql);
	$product = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Produto </h3>
		<form action="php_action/update.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $product['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="description" id="description" value="<?php echo $product['description'];?>" class="validate" required>
				<label for="description">Descrição</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="brand" value="<?php echo $product['brand'];?>" id="brand" class="validate" required>
				<label for="brand">Marca</label>
			</div>

			<div class="input-field col s12">
				<input type="number" name="quantity" min="0" value="<?php echo $product['quantity'];?>" id="quantity" class="validate" required>
				<label for="quantity">Quantidade</label>
			</div>

			<div class="input-field col s12">
				<textarea name="info" id="info" data-length="255" class="materialize-textarea" class="validate" required><?php echo $product['info'];?></textarea>
				<label for="info">Informações</label>
			</div>

			<div class="input-field col s12">
				<input type="file" name="image" value="Imagem">
			</div>

			<div class="input-field col s12">
			</div>
			<!-- <div class="center"> -->
			<a href="produtos.php" name="cancel" class="btn col s4"> Lista de Produtos </a>
			<button type="submit" name="edit" class="btn green right col s4"> Atualizar </button>
			<!-- </div> -->
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
