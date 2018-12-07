<?php
// Message
include_once 'includes/message.php';
// Conexão
include_once 'php_action/db.php';
// Header
include_once 'includes/header.php';

if(isset($_SESSION['logado'])){
    require_once('php_action/db.php');
    $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
    $result = mysqli_query($db_link, $sql);
    if($usuario=mysqli_fetch_array($result)){
        $name = $usuario['name'];
    }
}

?>
<form action="php_action/register.php" method="POST">
    <div class="row">
        <div class="card white col s12 m6 offset-m3 l12">
            <div class="card-content">
                <?php if(isset($_SESSION['adm']) AND $_SESSION['adm'] == 1){ ?>
                <span class="card-title">Cadastrar novo Administrador</span>
                <?php } else { ?>
                <span class="card-title">Cadastrar novo Usuário</span>
                <?php } ?>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">text_format</i>
                        <input name="name" id="name" type="text" required>
                        <label for="name">Primeiro Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="lastname" id="lastname" type="text" required>
                        <label for="lastname">Último Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username" id="username" type="text" required>
                        <label for="username">Nome de Usuário</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                            <input id="phone" name="phone" type="tel" required class="phone_with_ddd">
                            <label for="phone">Telefone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">contact_mail</i>
                        <input name="email" id="email" type="email" required>
                        <label for="email">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input name="password" id="password" type="password" required/>
                        <label for="password">Senha</label>
                    </div>
                </div>
                <?php if(isset($_SESSION['adm']) AND $_SESSION['adm'] == 1){ ?>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="material-icons prefix">verified_user</i>
                        <input name="passwordConfirm" id="passwordConfirm" type="password" required/>
                        <label for="passwordConfirm">Senha Adm <?php echo($name); ?></label>
                    </div>
                </div>
                <?php } ?>
                <div class="card-action row">
                    <button class="btn waves-effect blue-grey darken-1 col s2 offset-s4" type="submit" name="register">Voltar</button>
                    
                <button class="btn waves-effect green col s2 offset-s1" type="submit" name="register">Cadastrar</button>
            </div>
        </div>
    </div>
</form>

<?php
// Footer
include_once 'includes/footer.php';
?>
