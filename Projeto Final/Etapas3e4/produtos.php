<?php 
    include_once('includes/header.php');
?>
<div class="row container">
    <div class="fixed-action-btn">
        <a href="adicionar.php" class="btn-floating btn-large amber">
            <i class="large material-icons">add</i>
        </a>
    </div>
    <table class="highlight responsive-table centered striped">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Marca</th>
                <th>Informações</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once('php_action/db.php');
                $sql = 'select id, description, brand, image, info from `products`';
                $result = mysqli_query($db_link, $sql);
                while($product=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><img src="data:image/jpeg;base64,<?php echo base64_encode($product['image']);?>" alt="" class="circle responsive-img" /></td>
                <td><?php echo($product['description']) ?></td>
                <td><?php echo($product['brand']) ?></td>
                <td><?php echo($product['info']) ?></td>
                <td><a href="editar.php?id=<?php echo $product['id']; ?>" class="btn-floating"><i class="material-icons">edit</i></a></td>
                <td><a href="#modal<?php echo $product['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                      <div id="modal<?php echo $product['id']; ?>" class="modal modal-fixed-footer">
                        <div class="modal-content">
                          <h4>Opa!</h4>
                          <p>Tem certeza que deseja excluir<strong><?php echo $product['description']; ?></strong>?</p>
                        </div>
                        <div class="modal-footer">                       

                          <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                            <button type="submit" name="delete" class="btn red">Sim, quero deletar</button>

                             <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

                          </form>

                        </div>
                      </div>
            </tr>
            <?php  
                }// fim do while
            ?>
        </tbody>
    </table>
</div>
<?php 
    include_once('includes/footer.php');
?>