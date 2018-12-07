<?php 

    session_start();
    
    include_once('includes/header.php');
    include_once('php_action/db.php');

    if(isset($_GET['id'])){
        $id = mysqli_escape_string($db_link, $_GET['id']);

        $sql = "SELECT * FROM products WHERE id = '$id'";
        $resultado = mysqli_query($db_link, $sql);
        $product = mysqli_fetch_array($resultado);
    }
    else{
        header('Location: index.php');
    }
?>
<div class="row container">
    <div class="card col s12">
        <div class="card-image col s12 m12 l4">
            <img class="materialboxed" data-caption="<?php echo($product['description']) ?>" src="data:image/jpeg;base64,<?php echo base64_encode($product['image']);?>" alt="">
        </div>
        <div class="card-content col s12 m12 l6 right">
            <h5><?php echo($product['description']) ?></h5>
            <p class="justify"><?php echo($product['info']) ?></p>
        </div>
        <div class="card-action col s12">
            <a href="contato.php?id=<?php echo $product['id']; ?>" class="waves-effect waves-light btn green right"> ORÇAMENTO </a>
        </div>
    </div>
</div>
<?php 
    include_once('includes/footer.php');
?>