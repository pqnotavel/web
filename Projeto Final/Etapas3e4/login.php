<?php
    //Header
    include_once('includes/header.php');
    //Banco
    require_once('includes/db.php');

    //Sessão
    session_start();

    if (isset($_POST['login'])) {
        $username = mysqli_escape_string($connect, $_POST['username']);
        $password = mysqli_escape_string($connect, $_POST['password']);
        if(empty($username) or empty($password)){
            echo "string";
        }
        else{
            setcookie('username', $username, time()+3600);
            setcookie('password', $password, time()+3600);
            $sql = "SELECT username FROM users WHERE username = '$username'";
            $resultado = mysqli_query($connect, $sql);      

            if(mysqli_num_rows($resultado) > 0){
                $password = md5($password);
                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) == 1){
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                }
            }
        }
    }
?>
<div class="row container">
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
                <button class="btn waves-effect light-blue darken-4" type="submit" name="login">Entrar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
</div>
<?php 
    include_once('includes/footer.php');
?>
