<!--<div class="fixed-action-btn direction-top active">
    <a id="menu" class="btn btn-floating btn-large cyan"><i class="material-icons">menu</i></a>
</div>
<div class="tap-target cyan" data-target="menu">
    <div class="tap-target-content white-text center">
        <h5>Genk Circuit</h5>
        <h6>05/02/2019</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo maxime consequatur deserunt cumque delectus officiis corporis. Magni aliquam temporibus, iusto delectus enim quibusdam numquam cum esse porro</p>
    </div>
</div>-->
<footer class="page-footer elegant-color">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">About us</h5>
                <p class="grey-text text-lighten-4">At Belgian Car Club, we believe that by creating a centralised hub for sharing images from the Belgian Car Community, we can bring new Belgian car enthusiasts together as well as help the already established ones grow their social media accounts.</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Contact</h5>
                <ul id="dev_links">
                    <li><i class="material-icons tiny">location_on</i> Location: <a class="white-text" href="https://www.google.be/maps/place/Belgium/">Belgium </a></li>
                    <li><i class="material-icons tiny">alternate_email</i> E-mail: <a class="white-text" href="mailto:belgiancarclub@gmail.com"> Belgiancarclub@gmail.com </a> </li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/belgiancarclub/" target="_blank"><img src="../../../assets/images/Social/facebook.png" alt="facebook pagina" width="50"></a>
                        <a class="white-text" href="https://www.instagram.com/belgiancarclub/" target="_blank"><img src="../../../assets/images/Social/instagram.png" alt="instagram pagina" width="50"></a>
                        <a class="white-text" href="https://www.facebook.com/belgiancarclub/" target="_blank"><img src="../../../assets/images/Social/twitter.png" alt="facebook pagina" width="50"></a>
                        <a class="white-text" href="https://www.facebook.com/belgiancarclub/" target="_blank"><img src="../../../assets/images/Social/mail.png" alt="facebook pagina" width="50"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">© 2019 Belgian Car Club</div>
    </div>
</footer>
<script src="../../../assets/js/jquery-3.3.1.js"></script>
<script src="../../../assets/js/materialize.min.js"></script>
<script>
    $(window).on('resize', function() {
        var test = $(window).height() - 64;
        $('.parallax-container').css({
            'height': test + "px"
        });
    });
    $(document).ready(function() {
        $(window).trigger('resize');
    });

</script>
<script src="../../../assets/js/init.js"></script>
<script src="../../../assets/js/test.js"></script>
</body>

</html>
