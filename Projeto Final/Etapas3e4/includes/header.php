<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Casa do Agricultor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <link rel="shortcut icon" href="media/images/logo_small.png" />
    </head>

    <body >
        <nav class="teal darken-4">
            <div class="nav-wrapper row">
                <div class="col l4 s12">
                    <a href="index.php" class="brand-logo left hide-on-med-and-down">Casa do Agricultor</a>
                    <a href="index.php" class="brand-logo center hide-on-large-only left">Casa do Agricultor</a>
                </div>
                <a href="#" data-target="mobile-demo" class=" right sidenav-trigger"><i class="material-icons">menu</i></a>
                <nav class="col s4 teal darken-4 z-depth-0 hide-on-med-and-down">
                    <div class="nav-wrapper">
                        <form action="produtos.php" method="GET">
                            <div class="input-field">
                                <input id="search" type="search" name="search" required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
                <div class="col s4 right">
                    <!--Desktop-->
                    <ul class="right hide-on-med-and-down">
                        <?php 
                        // Verifica se há alguém logado
                        if(!isset($_SESSION['logado'])){ ?>
                        <li>
                            <a href="login.php"><i class="material-icons left">person</i>Login</a>
                        </li>
                        <?php } 
                        else{ 
                             //Banco
                            require_once('includes/db.php');
                            $id = $_SESSION['user_id'];
                            $sql = "SELECT name FROM users WHERE id = $id";
                            $resultado = mysqli_query($db_link, $sql);
                            $user = mysqli_fetch_array($resultado);
                        ?>
                        <!-- Dropdown Trigger -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo $user['name'] ?><i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                        <li>
                            <a href="produtos.php"><i class="material-icons left">pets</i>Produtos</a>
                        </li>
                        <?php } ?>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown1" class="dropdown-content">
                            <form>
                                <?php if(isset($_SESSION['adm']) AND $_SESSION['adm'] == 1){ ?>
                                <li><a href="cadastrar.php">Novo Adm</a></li>
                                <?php } ?>
                                <li><a href="php_action/logout.php">Sair</a></li>
                            </form>
                        </ul>

                        <li>
                            <a href="contato.php">Contato<i class="material-icons left">phone</i></a>
                        </li>
                    </ul>
                </div>
                <!--Mobile-->
                <ul class="sidenav" id="mobile-demo">
                    <li>
                        <a href="produtos.php">Produtos<i class="material-icons right">pets</i></a>
                    </li>
                    <li>
                        <a href="login.php">Login<i class="material-icons right">person</i></a>
                    </li>
                    <li>
                        <a href="contato.php">Contato<i class="material-icons right">phone</i></a>
                    </li>
                    <li>
                        <nav class="light-blue darken-4 z-depth-0">
                            <div class="nav-wrapper">
                                <form action="produtos.php" method="GET">
                                    <div class="input-field">
                                        <input id="search" type="search" name="search" required>
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </form>
                            </div>
                        </nav>
                    </li>
                </ul>
            </div>
        </nav>
        <main>