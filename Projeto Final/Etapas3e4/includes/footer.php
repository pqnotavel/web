    </main>
    <footer class="page-footer teal darken-4">
        <div class="container">

        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright
                <a class="grey-text text-lighten-4 right" href="https://goo.gl/HE9akc">Facebook</a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    <script type="text/javascript">
        $('.button-collapse').sidenav();
        $('.slider').slider();

        $(document).ready(function () {
            $('.modal').modal();
            $('.sidenav').sidenav();
            $('.carousel').carousel();
            $('.materialboxed').materialbox();
            $('.modal').modal();
            $('.fixed-action-btn').floatingActionButton();
            $('textarea#info').characterCounter();
            $('textarea#message').characterCounter();
            $(".dropdown-trigger").dropdown({coverTrigger: false});
            // $(".dropdown-trigger").dropdown(recalculateDimensions());
            $('.phone_with_ddd').mask('(00) 00009-0000');
            $("#zoom").elevateZoom();
        });
    </script>

</body>

</html>