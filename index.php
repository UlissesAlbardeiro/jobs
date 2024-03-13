<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ENGETEG | CONTRUTORA</title>
</head>
<body>

<?php include_once ("header.php") ?>    

    <!-- carousel pc -->
        
    <div id="carouselExampleIndicators" class="carousel slide carousel-pc" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/banner1.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/banner2.png" alt="Segundo Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <!-- Carousel-Mobile -->

    <div id="carouselExampleIndicators" class="carousel slide carousel-mobile" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/banner1-mobile.png" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/banner2-mobile.png" alt="Segundo Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

   
    <section style="background-image: url(assets/img/sobre-nos.png)">
        <div class="sobre">
            <h2>Quem somos</h2>
            <p>A Engeteg construtora é uma empresa que atua no ramo da construção civil, oferecendo soluções completas e integradas para os seus clientes.<br>A contrutora também se preocupa com o meio ambiente e a responsabilidade social, adotando práticas sistentáveis e apoiando projetos sociais nas comunidades onde atua. A Engeteg construtora é uma empresa que constrói mais do que obras, constrói sonhos</p>
            <p>
               <a href="q-somos.php"><button class="btn-sobre">SAIBA MAIS</button></a>
            </p>
        </div>
    </section>

    <article class="cards">
        
        <div class="card-img">
            <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiUlZrH0-2EAxUWqpUCHfhoC7AQFnoECAcQAQ&url=https%3A%2F%2Fwww.caixa.gov.br%2Fvoce%2Fhabitacao%2Fminha-casa-minha-vida%2FPaginas%2Fdefault.aspx&usg=AOvVaw3Lu6cNuWKx-8-avrtV4hzb&opi=89978449"><img src="assets/img/1.png" alt=""></a>
        </div>
        <div class="card-img">
            <a href="residenciais.php"><img src="assets/img/2.png" alt=""></a>
        </div>
        <div class="card-img">
            <a href="http://"><img src="assets/img/3.png" alt=""></a>
        </div>
        <div class="card-img">
            <a href="http://"><img src="assets/img/4.png" alt=""></a>
        </div>
        
</article>

<?php include_once("footer.php") ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>