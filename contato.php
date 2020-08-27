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

    <!--Page Cover-->
    <section class="row page-cover" data-bgimage="images/contato.jpg">
        <div class="row m0">
            <div class="container">
                <h2 class="page-title">Entre em contato</h2>
            </div>
        </div>
    </section>

    <!--Contact Form Area-->
    <section class="row contact-form-area">
        <div class="container">
            <div class="row sectionTitle text-left">
                <h2 class="this-title">Como podemos ajudar você?</h2>
                <p>Caso tenha alguma dúvida, entre em contato para que possamos te ajudar.</p>
            </div>
            <div class="row contact-form-box">
                <form action="contact_process.php" id="contactForm" class="row contact-form">
                    <div class="col-sm-6 form-group"><input type="text" id="name" name="name" placeholder="Nome completo" required class="form-control"></div>
                    <div class="col-sm-6 form-group"><input type="email" id="email" name="email" placeholder="E-mail" required class="form-control"></div>
                    <div class="col-sm-6 form-group"><input type="text" id="subject" name="subject" placeholder="Assunto" required class="form-control"></div>
                    <div class="col-sm-6 form-group"><input type="tel" id="phone" name="phone" placeholder="Telefone" class="form-control"></div>
                    <div class="col-sm-12 form-group"><textarea name="message" id="message" class="form-control" placeholder="Mensagem"></textarea></div>
                    <div class="col-sm-12"><input type="submit" value="Enviar" class="btn btn-primary"></div>
                </form>
                <div id="success">Sua mensagem foi enviada com sucesso</div>
                <div id="error">Algo deu errado, tente novamente</div>
            </div>
        </div>
    </section>

    <!--Contact Infos-->
    <section class="row contact-infos">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 contact-info">
                    <div class="media">
                        <div class="media-left"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body">
                            <h3 class="this-title">Endereço</h3>
                            <ul class="list-unstyled">
                                <li>R. Ribeirão Preto, nº 900 - Catanduva</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 contact-info">
                    <div class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body">
                            <h3 class="this-title">Telefone</h3>
                            <ul class="list-unstyled">
                                <li>0800 0244 262</li>
                                <li><a href="mailto:contato@amplamaisbeneficios.com.br">contato@amplamaisbeneficios.com.br</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 contact-info">
                    <div class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body">
                            <h3 class="this-title">Contratar meu plano Ampla +</h3>
                            <ul class="list-unstyled">
                                <li><a class="btn btn-primary" href="planos.php">CONTRATAR MEU PLANO</a></li>
                            </ul>
                        </div>
                    </div>
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