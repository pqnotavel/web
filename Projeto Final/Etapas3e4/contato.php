<?php 
    session_start();

    include_once('includes/header.php');

    $name = "";
    $phone = "";
    $email = "";
    $message = "";

    if(isset($_SESSION['logado'])){
        require_once('php_action/db.php');
        $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
        $result = mysqli_query($db_link, $sql);
        if($usuario=mysqli_fetch_array($result)){
            $name = $usuario['name'];
            $phone = $usuario['phone'];
            $email = $usuario['email'];
        }
    } 
    if(isset($_GET['id'])){
        require_once('php_action/db.php');
        $sql = "SELECT description, brand FROM products WHERE id = ".$_GET['id'];
        $result = mysqli_query($db_link, $sql);
        if($product=mysqli_fetch_array($result)){
            $message = "Desejo orçamento de ".$product['description']." ".$product['brand'];
        }
    }
?>
<form action="php_action/sendMessage.php" method="POST">
    <div class="row">
        <div class="card white col s12">
            <div class="card-content">
                <div class="col s12 m12 l6 left">
                    <iframe class="hide-on-small-only" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15475.699247482104!2d-39.7333137!3d-14.1405179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfbddd04534c014a2!2sCasa+do+Agricultor!5e0!3m2!1spt-BR!2sbr!4v1539017478298"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <iframe class="hide-on-med-and-up" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15475.699247482104!2d-39.7333137!3d-14.1405179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfbddd04534c014a2!2sCasa+do+Agricultor!5e0!3m2!1spt-BR!2sbr!4v1539017478298"
                        width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col s12 m12 l6 right">
                    <span class="card-title">Formulário</span>
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" name="name" type="text" required class="validate" value="<?php echo $name; ?>" />
                            <label for="name">Nome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">phone</i>
                            <input id="phone" name="phone" type="tel" required value="<?php echo $phone; ?>" class="phone_with_ddd">
                            <label for="phone">Telefone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" name="email" type="email" required value="<?php echo $email; ?>" class="validate">
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="message" name="message" class="materialize-textarea" data-length="255" required"><?php echo $message; ?></textarea>
                        <label for="message">Mensagem</label>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect green" type="submit" name="send">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php 
    include_once('includes/footer.php');
?>