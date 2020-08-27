<?php

$pagina = $_GET['tipo'];

if ($pagina == "orientacao-medica") {
    $imagem = 'orientacao-medica';
    $titulo = 'Orientação 24 horas.';
    $subtitulo = 'Sempre com você, não importa a hora, nem o lugar!';
    $texto = '<p>
    Obter soluções de problemas relacionados a saúde pelo telefone? Antigamente podia parecer loucura, mas com a constante evolução da tecnologia no meio da saúde agora é possível! Nós da Ampla Mais possuímos um serviço que esta disponível 24 horas por dia, 7 dias por semana, com especialistas qualificados das mais diversas áreas, preparados para tirar suas dúvidas, e se for necessária uma consulta, ele vai lhe direcionar ao profissional mais habilitado.
    </p><br>
    <p>Dentre as vantagens de nosso benefícios estão a:</p>
    <ul>
        <li><p>Identificação de doenças</p></li>
        <li><p>Sugestão de medicamentos</p></li>
        <li><p>Duvidas sobre receituários, etc.</p></li>
    </ul>
    <br><p>As ligações poderão ser feitas através de telefones fixos ou celulares, na nossa Central de atendimento pelo número: 0800 024 4262 (ligação gratuita).
    Sua Familia Protegida com o plano que cabe no seu bolso.</p>';
} else if ($pagina == "assistencia-medica") {
    $imagem = 'assistencia-medica';
    $titulo = 'Assistência Médica';
    $subtitulo = 'Os melhores médicos, com os preços de consultas mais baixas do mercado!';
    $texto = '<p>Consultas médicas a partir de R$50,00 reais e sem demora para o atendimento, um leque completo de especialidades com profissionais altamente qualificados.</p>
    <br>
    <p>O atendimento humanizado, sem filas, tudo monitorado pela AMPLA MAIS, para assim manter o padrão de qualidade. As consultas são marcadas pela nossa central de agendamento basta ligar no nosso 0800 (ligação gratuita).
    A equipe da Ampla Mais faz todo o serviço para você !
    Sua Familia Protegida com o plano que cabe no seu bolso.</p>';
} else if ($pagina == "assistencia-laboratorial") {
    $imagem = 'assistencia-laboratorial"';
    $titulo = 'Assistência Laboratorial';
    $subtitulo = 'Os melhores e mais seguros laboratórios credenciados, com o preço que somente a Ampla Mais tem !!';
    $texto = '<p>Os melhores laboratórios credenciados, tanto de análises clínicas como de imagem. Rapidez no atendimento e na realização dos exames com a qualidade que a AMPLA MAIS exige de seus parceiros e com descontos que chegam a até 80%. É tudo muito fácil, você faz a sua reserva pela nossa central de agendamento e logo após é direcionado ao laboratório mais próximo ou de sua preferência.</p>
    <br>
    <p>Sua Familia Protegida com o plano que cabe no seu bolso.</p>';
} else if ($pagina == 'assistencia-odontologica') {
    $imagem = 'assistencia-odontologica';
    $titulo = 'Assistência Odontológica';
    $subtitulo = 'Procedimentos odontológicos com até 80% de desconto, mais um motivo para fazer você sorrir';
    $texto = '<p>Cuidar do seu sorriso nunca foi tão fácil! Contamos com assistência odontológica especializada, nossas clínicas são escolhidas a dedo, sempre visando o melhor atendimento, e o principal com profissionais altamente qualificados, que estão em constante treinamento, para assim oferecer os procedimentos mais avançados em tratamento bucal.</p>
    <br>
    <p>Com até 80% de desconto no Tratamento Odontológico e o mais fácil é que todo o agendamento será feito através do 0800 024 4262. ASSISTÊNCIA ODONTOLÓGICA (Procedimentos odontológicos com até 80% de desconto).
    Cuidar do seu sorriso nunca foi tão fácil! Contamos com assistência odontológica especializada, nossas clínicas são escolhidas a dedo, sempre visando o melhor atendimento, e o principal com profissionais altamente qualificados, que estão em constante treinamento, para assim oferecer os procedimentos mais avançados em tratamento bucal.</p>
    <br>
    <p>Com até 80% de desconto no Tratamento Odontológico e o mais fácil é que todo o agendamento será feito através do 0800 024 4262.
    Sua Familia protegida com o plano que cabe no seu bolso.</p>';
} else if ($pagina == 'assistencia-funeral') {
    $imagem = 'assistencia-funeral';
    $titulo = 'Assistência Funeral';
    $subtitulo = 'Estamos com você em todos os momentos';
    $texto = '<p>Nós da AMPLA MAIS estamos do seu lado até nos piores momentos que a sua família venha passar! Sempre é bom estar precavido e possuir o suporte que a Ampla Mais tem a oferecer, nosso translado cobre todo o território nacional alem de possuir uma cobertura no valor de 5 mil reais para os custos relacionados ao funeral.Nosso benefício te acolhe quando você mais precisa, basta ligar no nosso 0800, estamos prontos para te ajudar 24 horas por dia, 7 dias por semana!</p>
    <br>
    <p>Sua Familia protegida com o plano que cabe no seu bolso.</p>';
} else if ($pagina == 'seguro-de-vida') {
    $imagem = 'seguro-de-vida';
    $titulo = 'Seguro de Vida';
    $subtitulo = 'Te amparamos no momento que você mais precisa';
    $texto = '
    <p>Hoje em dia, é fundamental estar preparado para qualquer situação que venha acontecer com você ou sua família! Nosso plano esta sempre do seu lado, nesses momentos juntamente com nossa assistência funeral, o seguro de vida Ampla Mais em caso de morte acidental do titular do plano possui uma cobertura no valor de 10 mil reais, além de possuir um auxílio alimentação no valor de 250 reais que sera destinado durante os próximos 6 meses.</p>
    <br>
    <p>Sua Familia protegida com o plano que cabe no seu bolso.</p>';
} else if ($pagina == 'descontos-em-medicamento') {
    $imagem = 'descontos-em-medicamento';
    $titulo = 'Desconto em medicamentos';
    $subtitulo = 'O melhor custo x benefício para o seu bolso';
    $texto = '
    <p>Medicamentos com o preço bem reduzido, são até 70% de desconto nas grandes redes de farmácia credenciadas a Ampla Mais. Recentemente firmamos um acordo com o grupo UNIVERS detentora das marcas Drogasil e Droga Raia, são mais de 1800 farmácias distribuídas por todo o Brasil, com estrutura de primeira, ampla lista de medicamentos e o atendimento que você merece!</p>
    <br>
    <p>Sua Familia protegida com o plano que cabe no seu bolso.</p>';
}
?>

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
    <style>
        .back {
            height: 230px;
        }
    </style>

</head>

<body>

    <?php include 'header.php'; ?>

    <!--Page Cover-->
    <section class="row page-cover" data-bgimage="images/servicos/<?php echo $imagem ?>.jpg">
        <div class="row m0">
            <div class="container">
                <h2 class="page-title"><?php echo $titulo ?></h2>
            </div>
        </div>
    </section>

    <!--Service Description-->
    <section class="row about-briefs">
        <div class="container">
            <div class="row about-brief">
                <div class="col-sm-8 text-block">
                    <div class="row sectionTitle text-left">
                        <h2 class="this-title"><?php echo $subtitulo ?></h2>
                    </div>
                    <?php echo $texto ?>
                </div>
                <div class="col-sm-4 form-block">
                    <h3 class="this-title">Solicite seu cartão Ampla +</h3>
                    <div class="card">
                        <div class="conteudo">
                            <div class="back">
                                <a href="planos.php" class="btn btn-primary">Quero contratar.</a>
                            </div>
                            <div class="front">
                                <img src="images/icons/servicos/Card1.png" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->

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
    <!--Isotope-->
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.min.js"></script>
    <!--Theme Script-->
    <script src="js/theme.js"></script>
    <script>
        $('.card').mouseover(function(e) {
            $(this).toggleClass('active');
        });
        $('.card').mouseout(function(e) {
            $(this).toggleClass('active');
        });
    </script>
</body>

</html>