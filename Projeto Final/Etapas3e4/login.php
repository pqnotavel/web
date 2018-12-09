<?php
    // Message
    include_once 'includes/message.php';
    //Header
    include_once('includes/header.php');
    //Banco
    require_once('includes/db.php');

    // //Sessão
    // session_start();

    if (isset($_POST['login'])) {
        $username = mysqli_escape_string($db_link, $_POST['username']);
        $password = mysqli_escape_string($db_link, $_POST['password']);

        if(empty($username) or empty($password)){
            $_SESSION['mensagem'] = "Campo vazio!";
        }

        setcookie('username', $username, time()+600);
        setcookie('password', $password, time()+600);
        
        $sql = "SELECT username FROM users WHERE username = '$username'";
        $resultado = mysqli_query($db_link, $sql);      

        if(mysqli_num_rows($resultado) > 0){
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

            $resultado = mysqli_query($db_link, $sql);

            if(mysqli_num_rows($resultado) == 1){
                $user = mysqli_fetch_array($resultado);
                mysqli_close($db_link);
                
                $_SESSION['logado'] = 1;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['adm'] = $user['adm'];
                $_SESSION['mensagem'] = "Seja bem-vindo, ".$user['name'];
                header('Location: produtos.php');
            }
            else{
                $_SESSION['mensagem'] = "Combinação de dados inválida!";
            }
        }
    }
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="row">
        <div class="card white col s12 m6 offset-m3 offset-l4 l4">
            <div class="card-content">
                <span class="card-title">Login</span>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username" id="username" type="text" class="validate" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : '' ?>">
                        <label for="username">Usuário</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input name="password" id="password" type="password" class="validate" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="card-action">
                    <div class="col s6 left">
                    <a href="cadastrar.php" class="btn waves-effect  blue-grey darken-1">Cadastrar
                        <!-- <i class="material-icons right">person_add</i> -->
                    </a>
                    </div>
                    <div class="col s6 right">
                    <button class="btn waves-effect green" type="submit" name="login">Entrar
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
