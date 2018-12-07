<?php 
    // Message
    include_once 'includes/message.php';
    //Header
    include_once('includes/header.php');
?>
<div class="slider hide-on-med-and-down">
    <ul class="slides">
        <li>
            <img src="media/images/slide_1.jpg" alt="" class="responsive-img"/>
        </li>
        <li>
            <img src="media/images/slide_2.jpg" alt="" class="responsive-img" />
        </li>
    </ul>
</div>
<div class="slider hide-on-large-only">
    <ul class="slides">
        <li>
            <img src="media/images/slide_1_mobile.jpg" alt="" class="responsive-img" />
        </li>
        <li>
            <img src="media/images/slide_2_mobile.jpg" alt="" class="responsive-img" />
        </li>
    </ul>
</div>

<div class="row">
    <?php
        require_once('php_action/db.php');
        $sql = 'select id, description, brand, image from `products`';
        $result = mysqli_query($db_link, $sql);
        while($product=mysqli_fetch_array($result)){
    ?>
    <a href="detalhe.php?id=<?php echo $product['id']; ?>">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($product['image']);?>" alt=""/>
                </div>
                <div class="card-content">
                    <span class="card-title"><?php echo($product['description']) ?></span>
                    <p><?php echo($product['brand']) ?></p>
                </div>
            </div>
        </div>
    </a>
    <?php  
        }// fim do while
    ?>
</div>

<div class="carousel">
    <h5 class="center-align blue-text text-darken-4">Aqui também tem!</h5>
    <a class="carousel-item" href="#"><img src="media/images/racao.png" class="circle" alt=""></a>
    <a class="carousel-item" href="#"><img src="media/images/pesticidas.png" class="circle" alt=""></a>
    <a class="carousel-item" href="#"><img src="media/images/sementes.png" class="circle" alt=""></a>
    <a class="carousel-item" href="#"><img src="media/images/ferraduras.png" class="circle" alt=""></a>
</div>
<?php 
    include_once('includes/footer.php');
?>
