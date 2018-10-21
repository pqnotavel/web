<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro de Assinatura</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    </head>
    <body>
<header>
    <nav class="blue darken-4"></nav>
</header>

<?php



function formulario(){
  
    ?>
            <main>
                <div class="row container">
                    <form class="col s12" id="myForm" action="contato.php" method="post">
                        <div class="row">
                            <div class="card white">
                                <div class="card-content">
                                    <span class="card-title">Dados Pessoais</span>
                                    <div class="row">
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">email</i>
                                            <input id="email" name="email" type="email" class="validate" required>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col l6 m12">
                                                <i class="material-icons prefix">lock</i>
                                                <input id="password" type="password" name="password" class="validate" pattern="^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,10}$" required>
                                                <label for="password">Senha</label>
                                            </div>
                                        </div>
    
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">account_circle</i>
                                            <input id="nome" name="nome" type="text" class="validate" required>
                                            <label for="icon_prefix">Nome Completo</label>
                                        </div>
                                        <div class="input-field col l6 m12" >
                                            <i class="material-icons prefix">phone</i>
                                            <input id="telefone" type="tel" class="telefone" name="telefone" id="telefone" required> 
                                            <label for="icon_telephone">Telefone</label>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">date_range</i>
                                            <input type="text" class="datepicker" id="data" name="data"> 
                                            <label for="data">Data de nascimento</label>
                                        </div>
    
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">verified_user</i>
                                            <input id="idade" type="number" min="0" max="120" class="validate" name="idade">
                                            <label for="idade">Idade</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">wc</i>
                                            <select id="sexo" name="sexo">
                                                <option value=" " disabled selected>Escolha seu Sexo</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                            </select>
                                            <label>Sexo</label>
                                        </div>
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">local_parking</i>
                                            <input id="peso" name="peso" type="number" min="0" step="0.001" class="validate">
                                            <label for="peso">Peso</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card white">
                                <div class="card-content ">
                                    <span class="card-title">Dados de Pagamento</span>
                                    <div class="row">
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">credit_card</i>
                                            <select id = "cartao" name="cartao" class="validate" required>
                                                <option value=" " disabled selected>Informe a bandeira do seu Cartão</option>
                                                <option value="American">American</option>
                                                <option value="Master">Master</option>
                                                <option value="Visa">Visa</option> 
                                            </select>
                                            <label>Cartão</label>
                                        </div>
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">monetization_on</i>
                                            <select id="pagamento"  name="pagamento" required>
                                                <option value=" " disabled selected>Informe o Tipo de pagamento</option>
                                                <option value="À Vista">À Vista</option>
                                                <option value="A Prazo">A Prazo</option>
                                            </select>
                                            <label>Tipo de Pagamento</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card white">
                                <div class="card-content ">
                                    <span class="card-title">Dados Adicionais</span>
                                    <div class="row">
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">cast_connected</i>
                                            <select multiple id="conteudo" name="conteudo" required>
                                                <option value="Cinema">Cinema</option>
                                                <option value="Esportes">Esportes</option>
                                                <option value="Literatura">Literatura</option>
                                                <option value="Música">Música</option>
                                                <option value="Jogos Eletrônicos">Jogos Eletrônicos</option>
                                            </select>
                                            <label>Preferências de Conteúdo</label>
                                        </div>
                                        <div class="input-field col l6 m12">
                                            <i class="material-icons prefix">notifications_active</i>
                                            <input type="text" class="timepicker" id="hora" name="hora" >
                                            <label for="hora">Horário para receber Avisos</label>
                                        </div>
                                    </div>  
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">message</i>
                                            <textarea id="coment" name="coment" class="materialize-textarea" data-length="500"></textarea>
                                            <label for="icon_prefix2">Comentários</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l6 m12">
                                            <!-- <label for="hora">Cor Favorita</label> -->
                                            <i class="material-icons prefix">format_color_fill</i>
                                            <span id="cor">Cor Favorita</span>
                                            <input type="color" id="cor" name="cor" value="#ffffff" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6 center-align">
                                <button class="btn waves-effect green" type="submit" name="enviar">Enviar
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                            <div class="col s6 center-align">
                                <button class=" btn waves-effect red" type="reset" name="action">Limpar
                                    <i class="material-icons right">clear</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
    
            <footer class="page-footer blue darken-4">
                <div class="container">
    
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2018 Raí and Tulio
                        <a class="grey-text text-lighten-4 right" href="http://www.facebook.com/casadoagricultoripiau/">Facebook</a>
                    </div>
                </div>
            </footer>
    
            <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>
            <script src="js/jquery.mask.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/jquery.validate.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#icon_prefix2').characterCounter();
                });
    
                $(document).ready(function () {
                    $('select').formSelect();
                });
    
                document.addEventListener('DOMContentLoaded', function () {
                    var mesAno = ['Janeiro', 'Fevereiro', 'Marco', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
                    var options = {
                        /* autoClose : true, */
                        yearRange: [1930, new Date().getFullYear()],
                        maxDate:new Date(),
                        format: 'dd/mm/yyyy',
                        i18n: {
                            months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                            monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                            weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
                            weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
                            weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
                            today: 'Hoje',
                            clear: 'Limpar',
                            cancel: 'Sair',
                            done: 'Confirmar',
                            labelMonthNext: 'Próximo mês',
                            labelMonthPrev: 'Mês anterior',
                            labelMonthSelect: 'Selecione um mês',
                            labelYearSelect: 'Selecione um ano',
                            selectMonths: true,
                            selectYears: 15,
                        }
                    }
                    $('.datepicker').datepicker();
                    var elems = document.querySelectorAll('.datepicker');
                    var instances = M.Datepicker.init(elems, options);
    
                    //  $('.datepicker').datepicker(autoClose, true);
                });
    
                $(document).ready(function () {
                    $('.timepicker').timepicker({ twelveHour: false});
                });
    
                $(document).ready(function (){
                    $('#telefone').mask('(00) 00009-0000');
                    $('#data').mask('00/00/0000');
                });
            </script>
    
            <script>
                $("#myForm").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 10
                    },
                    idade:{
                        digits: true
                    }
                },
                //For custom messages
                messages: {
                    password:{
                        required: "Digite uma senha que inclua letras, números e caracteres especiais, não menor que 6 caracteres e no máximo 10",
                        minlength: "A senha não deve conter menos de 6 caracteres",
                        maxlength: "A senha não deve conter mais de 10 caracteres"
                    },
                },
                errorElement : 'div',
                errorPlacement: function(error, element) {
                var placement = $(element).data('error');
                if (placement) {
                    $(placement).append(error)
                } else {
                    error.insertAfter(element);
                }
                }
            });
            $(document).ready(function()
            {
                // for HTML5 "required" attribute
                $("select[required]").css({position: "absolute", display: "inline", height: 0, padding: 0, width: 0});
            });
         </script>
    
    <?php

}

if (isset($_POST['enviar']))
{

    
    if($_POST['email'] == "admin@localhost.com")
    {
        echo "<script>alert('Erro o email deve ser diferente de admin@localhost.com');</script>";
        formulario();
    }
    else if (empty($_POST['email']))
    {
        echo "<script>alert('Erro, preencha o campo e-mail');</script>";
        formulario();
    }
    else if(empty ($_POST['password']) )
    {
        
        echo "<script>alert('Erro, preencha o campo senha');</script>";
        formulario();
    }
    else if (empty($_POST['nome']))
    {
        echo "<script>alert('Erro, preencha o campo nome');</script>";
        formulario();
    }
    else if (empty($_POST['telefone']))
    {
        echo "<script>alert('Erro, preencha o campo telefone');</script>";
        formulario();
    }
    else if(empty($_POST['cartao']))
    {
        echo "<script>alert('Erro, preencha o campo cartão');</script>";
        formulario();
    }
    else if(empty($_POST['pagamento']))
    {
        echo "<script>alert('Erro, preencha o campo tipo de pagamento');</script>";
        formulario();
    }
    else if (empty($_POST['conteudo']))
    {
        echo "<script>alert('Erro, preencha o campo preferencias de conteúdo');</script>";
        formulario();
    }
    else if(empty($_POST['cor']))
    {
        echo "<script>alert('Erro, preencha o campo cor favorita');</script>";
        formulario();
    }
    else
    {
    
        ?>
        <div id="container">
                <h1>Dados do formulário</h1>
            Email: <span><?php echo $_POST['email'];?></span><br>
            Senha: <span><?php echo $_POST['password'];?></span><br>
            Nome Completo: <span><?php echo $_POST['nome'];?></span><br>
            Telefone: <span><?php echo $_POST['telefone'];?></span><br>
            Data de Nascimento: <span><?php echo $_POST['data'];?></span><br>
            Idade: <span><?php echo $_POST['idade'];?></span><br>
            Sexo: <span><?php echo  $_POST['sexo'];?></span><br>
            Peso: <span><?php echo  $_POST['peso'];?></span><br>
            Cartão: <span><?php echo  $_POST['cartao'];?></span><br>
            Tipo de Pagamento: <span><?php echo  $_POST['pagamento'];?></span><br>
            Preferências de conteúdo: <span><?php echo  $_POST['conteudo'];?></span><br>
            Horário preferencial de recebimento de avisos: <span><?php echo  $_POST['hora'];?></span><br>
            Comentários: <span><?php echo  $_POST['coment'];?></span><br>
            Cor: 
            <?php echo "<div style = \"background-color: ".$_POST['cor']."; width:40px; height: 20px; border: 1px solid;\"></div><br>";?>
        </div>
        <?php   
        
    }
}
else
{
    formulario();
}
?>
</body>
</html>



