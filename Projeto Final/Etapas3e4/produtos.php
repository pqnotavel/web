<?php 
    // Message
    include_once ('includes/message.php');

    include_once('includes/header.php');
?>
<div class="row container">
    <?php
    // Verificação  
    if(isset($_SESSION['adm']) and $_SESSION['adm'] == 1){ ?>
        <div class="fixed-action-btn">
                <a class="btn-floating btn-large 607d8b blue-grey">
                    <i class="large material-icons">list</i>
                </a>
            <ul>
                <li><a href="adicionar.php"class="btn-floating green"><i class="material-icons">add</i></a></li>
                <li><a href="pdf.php" target="_blank" class="btn-floating blue"><i class="material-icons">description</i></a></li>
            </ul>
        </div>
    <?php } ?>
    <div class="card">
    <table class="highlight responsive-table centered striped ">
        <thead>
            <tr>
                <th></th>
                <th>Código</th>
                <th>Produto</th>
                <th>Marca</th>
                <?php
                // Verificação
                if(isset($_SESSION['adm']) and $_SESSION['adm'] == 1){ ?>
                    <th>Quantidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once('php_action/db.php');
                if(isset($_GET['search'])){
                    $search = mysqli_escape_string($db_link, $_GET['search']);
                    $sql = "SELECT * FROM products WHERE description LIKE '%$search%' OR brand LIKE '%$search%'";
                }
                else{
                    $sql = "SELECT * FROM products";
                }
                $result = mysqli_query($db_link, $sql);
                while($product=mysqli_fetch_array($result)){
            ?>
            <tr>
                
                <td>
                    <?php if(isset($_SESSION['adm']) and $_SESSION['adm'] == 1){ ?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($product['image']);?>" width="50" alt="" class="materialboxed"/>
                    <?php } else{ ?>
                    <a href="detalhe.php?id=<?php echo $product['id']; ?>">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($product['image']);?>" width="50" alt=""/>
                    </a>
                    <?php } ?>
                </td>
                <td><?php echo($product['id']) ?></td>
                <td><?php echo($product['description']) ?></td>
                <td><?php echo($product['brand']) ?></td>
                <?php
                // Verificação
                if(isset($_SESSION['adm']) and $_SESSION['adm'] == 1){ ?>
                <td><?php echo($product['quantity']) ?></td>
                <td><a href="editar.php?id=<?php echo $product['id']; ?>" class="btn-floating"><i class="material-icons">edit</i></a></td>
                <td><a href="#modal<?php echo $product['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                <!-- Modal Structure -->
                <div id="modal<?php echo $product['id']; ?>" class="modal">
                    <div class="modal-content">
                        <h4>Opa!</h4>
                        <p>Tem certeza que deseja excluir <strong><?php echo $product['description']; ?></strong>?</p>
                    </div>
                    <div class="modal-footer">                       
                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                            <button type="submit" name="delete" class="btn red">Sim, quero deletar</button>
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                    </div>
                </div>

                 <?php } ?>
            </tr>
            <?php  
                }// fim do while
            ?>
        </tbody>
    </table>
</div>
</div>
<?php 
    include_once('includes/footer.php');
?>