<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
</script>
<script src="<?= base_url()?>public/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?= base_url()?>public/js/ie10-viewport-bug-workaround.js"></script>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h3>Partenaires</h3>
            </div>
            <div class="col-lg-3">
                <h3>Derniers Tweets</h3>
                <a class="twitter-timeline" href="https://twitter.com/Student_Hood" data-widget-id="710467959244902401">Tweets de @Student_Hood</a>
                <script>
                    ! function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0],
                            p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
            </div>
            <div class="col-lg-3">
                <h3>Contactez-nous</h3>
                <i class=""></i> <strong>Adresse :</strong> 139 rue des Pyrénées, 75020 Paris
                <br/>
                <i class=""></i> <strong>Tel : </strong> 08.00.60.06.33
                <br/>
                <i class=""></i> <strong>E-mail :</strong> <a href="mailto:studenthood24@gmail.com">studenthood24@gmail.com</a>
                <br/>
            </div>
            <div class="col-lg-3">
                <h3>Suivez-nous</h3>
                <ul class="glyph">
                    <li id="fa-facebook"><a href="https://www.facebook.com/StudentHood-574539246048240/"><i class="fa fa-facebook"></i></a></li>
                    <li id="fa-twitter"><a href="https://twitter.com/Student_Hood?lang=fr"><i class="fa fa-twitter"></i></a></li>
                    <li id="fa-instagram"><a href="https://www.instagram.com/student_hood/"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row footer-down">
            <div class="col-lg-10">
                <a href="index.php"><img src="<?= base_url()?>public/img/logo-carre.png" alt="StudentHood" height="60px;" /></a> Copyright StudentHood 2016.
            </div>
            <div class="col-lg-2 footer-nav">
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
</footer>