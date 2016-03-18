<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url()?>public/img/favicon.ico">

    <title>StudentHood</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?= base_url()?>public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>public/css/custom.css" rel="stylesheet"/>
    <link href="<?= base_url()?>public/css/services.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= base_url()?>public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url()?>public/img/logo.png" alt="StudentHood"  height="60"/></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-5 nav-co">
                       
                        <?php if($this->session->userdata('user_id'))
                    {?>
                   
                        <a href="<?=  base_url()?>index.php/users/logout"><button type="button" class="<?=$login_class;?> btn btn-default navbar-btn navbar-right"><i class="glyphicon glyphicon-chevron-right nav-glyph"></i> (<?=$this->session->userdata['username']?>) Déconnexion</button></a>
                    <?php
                    } 
                    else{ ?>
                        <a href="<?=  base_url()?>index.php/users/login"><button type="button" class="btn btn-default navbar-btn navbar-right"><i class="glyphicon glyphicon-chevron-right nav-glyph"></i> Connexion</button></a>
                        <a href="<?= base_url()?>index.php/users/register/"><button type="button" class="btn btn-default navbar-btn navbar-right" ><i class="glyphicon glyphicon-chevron-right nav-glyph"></i> Inscription</button></a>
                    <?php } ?>
                    </div>
                    <div class="col-lg-3">
                        
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control search-bar" placeholder="Rechercher"/>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right text-uppercase">
                                <li class="active"><a href="<?= base_url()?>index.php/blog/">Accueil</a></li>
                                <li><a href="<?= base_url()?>index.php/blog/campus/">Campus</a></li>
                                <li><a href="<?= base_url()?>index.php/blog/home_co/">Annonces</a></li>
                                <li><a href="<?= base_url()?>index.php/blog/offres/">Offres</a></li>
                                <li><a href="<?= base_url()?>index.php/blog/contact/">Contact</a></li>
                            </ul>

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <div class="col-lg-3">
                        <ul class="nav navbar-nav navbar-right glyph">
                                <li id="fa-facebook"><a href="https://www.facebook.com/StudentHood-574539246048240/"><i class="fa fa-facebook"></i></a></li>
                                <li id="fa-twitter"><a href="https://twitter.com/Student_Hood?lang=fr"><i class="fa fa-twitter"></i></a></li>
                                <li id="fa-instagram"><a href="https://www.instagram.com/student_hood/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
</nav>