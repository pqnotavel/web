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
        <main>
            <div class="row container">
                <form class="col s12" id="myForm" action="">
                    <div class="row">
                        <div class="card white">
                            <div class="card-content">
                                <span class="card-title">Dados Pessoais</span>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" type="email" class="validate" >
                                        <label for="email" class="" data-error="Please enter valid email." data-success="I Like it!">Email</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">lock</i>
                                            <input id="password" type="password" name="password" class="validate">
                                            <label for="password">Senha</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Nome Completo</label>
                                    </div>
                                    <div class="input-field col s6" >
                                        <i class="material-icons prefix">phone</i>
                                        <input id="telefone" type="tel" class="telefone" name="telefone" id="telefone"> 
                                        <label for="icon_telephone">Telefone</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">date_range</i>
                                        <input type="text" class="datepicker" id="data">
                                        <label for="data">Data de nascimento</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">verified_user</i>
                                        <input id="idade" type="number" class="validate">
                                        <label for="idade">Idade</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">wc</i>
                                        <select>
                                            <option value="" disabled selected>Escolha seu Sexo</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                        </select>
                                        <label>Sexo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">local_parking</i>
                                        <input id="peso" type="number" step="any" class="validate">
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
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">credit_card</i>
                                        <select>
                                            <option value="" disabled selected>Informe a bandeira do seu Cartão</option>
                                            <option value="1">American</option>
                                            <option value="2">Master</option>
                                            <option value="3">Visa</option> 
                                        </select>
                                        <label>Cartão</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">monetization_on</i>
                                        <select>
                                            <option value="" disabled selected>Informe o Tipo de pagamento</option>
                                            <option value="1">À Vista</option>
                                            <option value="2">A Prazo</option>

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
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">cast_connected</i>
                                        <select multiple>
                                            <option value="1">Cinema</option>
                                            <option value="2">Esportes</option>
                                            <option value="3">Literatura</option>
                                            <option value="3">Música</option>
                                            <option value="3">Jogos Eletrônicos</option>
                                        </select>
                                        <label>Preferências de Conteúdo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">notifications_active</i>
                                        <input type="text" class="timepicker" id="hora">
                                        <label for="hora">Horário para receber Avisos</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">message</i>
                                        <textarea id="icon_prefix2" class="materialize-textarea" data-length="500"></textarea>
                                        <label for="icon_prefix2">Comentários</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s6">
                                        <!-- <label for="hora">Cor Favorita</label> -->
                                        <i class="material-icons prefix">format_color_fill</i>
                                        <span id="cor">Cor Favorita</span>
                                        <input type="color" id="cor" name="cor" value="#ffffff" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 center-align">
                            <button class="btn waves-effect green" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        <div class="col s6 center-align">
                            <button class=" btn waves-effect red" name="action" >Limpar
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
                idade: {
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
     </script>

    </body>
</html>