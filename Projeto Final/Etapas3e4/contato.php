<?php 
    include_once('includes/header.php');
?>
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
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l6">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Telefone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate">
                        <label for="icon_email">E-mail</label>
                    </div>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="icon_prefix2" class="materialize-textarea" data-length="255"></textarea>
                    <label for="icon_prefix2">Mensagem</label>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect light-blue darken-4" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include_once('includes/footer.php');
?>