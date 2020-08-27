<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ampla + Benefícios</title>


    <link async href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/navigation.css">

    <!--Theme Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <!--Service Block-->
    <section class="row more-services">
        <div class="container">
            <div class="row sectionTitle">
                <h2 class="this-title">Escolha o plano certo para você!</h2>
            </div>

            <div class="row d-flex-align">
                <div class="col-xs-12 col-md-4 text-center" style="margin-top: 30px;">
                    <div class="row d-flex-align" style="margin: 0;">
                        <div class="col-xs-4 col-md-12">
                            <a class="click-plano" href="contratar.php">
                                <img src="images/plano-familiar.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-12 col-xs-8">
                            <a href="#0!" class="btn btn-primary">Contratar Plano Familiar</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-md-4 text-center" style="margin-top: 30px;">
                    <div class="row d-flex-align" style="margin: 0;">
                        <div class="col-xs-4 col-md-12">
                            <a class="click-plano" href="contratar.php">
                                <img src="images/plano-individual.png" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-12 col-xs-8">
                            <a href="#0!" class="btn btn-primary">Contratar Plano Individual</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="row project-contact-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 text-holder">
                    <h2>Proteger você e sua família é essencial!</h2>
                    <p>Não perca mais tempo e contrate um plano completo que protege você e deixa sua vida mais segura. Você não precisa sair de casa, contrate de forma online.</p>
                </div>
                <div class="col-sm-3 btn-holder text-right">
                    <a href="" class="btn btn-outline white">Contratar Agora!</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Magnific Popup-->
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--Owl Carousel-->
    <script src="vendors/owl.carousel/owl.carousel.min.js"></script>
    <!--CounterUp-->
    <script src="vendors/couterup/jquery.counterup.min.js"></script>
    <!--WayPoints-->
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <!-- RS5.0 Core JS Files -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <!--RS5.0 Extensions-->
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <!--Theme Script-->
    <script src="js/theme.js"></script>
    <script>
        $('.card').click(function(e) {
            $(this).toggleClass('active');
        });
    </script>
</body>

</html>