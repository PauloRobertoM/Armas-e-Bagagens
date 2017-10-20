<?php
  $bg = array('vitrine-armas-01.jpg', 'vitrine-armas-02.jpg', 'vitrine-armas-03.jpg', 'vitrine-armas-04.jpg', 'vitrine-armas-05.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<style type="text/css">
.index{
    background: url(assets/images/<?php echo $selectedBg; ?>) no-repeat center top;
}
</style>

<?php include 'components/header.php'; ?>

    <header class="index">
        <div class="nav">
            <nav class="navbar navbar-default" id="meuMenu">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img class="logo" src="assets/images/logo-armas-bagagens.png" alt="Logo - Armas e Bagagens" /></a>
                    </div><!-- .navbar-header -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="">HOME</a></li>
                            <li><a href="">QUEM SOMOS</a></li>
                            <li><a href="">PRODUTOS</a></li>
                            <li><a href="">BLOG</a></li>
                            <li><a href="">CONTATO</a></li>
                        </ul><!-- .nav -->
                    </div><!-- .navbar-collapse -->
                </div><!-- .container -->
            </nav><!-- .navbar -->
        </div><!-- .nav -->
        <div class="scroll-downs">
            <div class="mousey">
                <div class="scroller"></div>
            </div><!-- mousey -->
        </div><!-- scroll-downs -->
    </header>
    
    <section class="produtos">
        <div class="container">
            <div class="divisor">
                <h2>Produtos</h2>
            </div><!-- divisor -->
            <div class="busca">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                       <input type="text" class="form-control" placeholder="Buscar produto" name="srch-term" id="srch-term">
                       <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                       </div><!-- .input-group-btn -->
                    </div><!-- .input-group -->
                </form>
            </div><!-- busca -->

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="item">
                        <img src="assets/images/tag.png" class="novo" alt="">
                        <img src="assets/images/prod.jpg" alt="">
                        <div class="content">
                            <h3>Pulseira Paracord Survival Guepardo</h3>
                            <a class="botao" href="">Tenho Interesse</a>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="item">
                        <img src="assets/images/prod.jpg" alt="">
                        <div class="content">
                            <h3>Pulseira Paracord Survival Guepardo</h3>
                            <a class="botao" href="">Tenho Interesse</a>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="item">
                        <img src="assets/images/prod.jpg" alt="">
                        <div class="content">
                            <h3>Pulseira Paracord Survival Guepardo</h3>
                            <a class="botao" href="">Tenho Interesse</a>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="item">
                        <img src="assets/images/prod.jpg" alt="">
                        <div class="content">
                            <h3>Pulseira Paracord Survival Guepardo</h3>
                            <a class="botao" href="">Tenho Interesse</a>
                        </div><!-- content -->
                    </div><!-- item -->
                </div><!-- md-3 -->
            </div><!-- row -->
            <a class="mais" href="">Veja mais</a>
        </div><!-- container -->
    </section><!-- produtos -->
    
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme" id="owl-blog">
                    <div class="item">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="content content2">
                                <h2>Blog<br />Aventura</h2>
                                <h4>É simplesmente uma simulação de texto da indústria tipográfica</h4>
                                <p>É simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica...</p>
                                <a class="mais" href="">Leia mais</a>
                            </div><!-- content -->
                        </div><!-- md-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="content">
                                <img src="assets/images/blog2.jpg" alt="">
                            </div><!-- content -->
                        </div><!-- md-6 -->
                    </div><!-- .item -->
                    <div class="item">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="content content2">
                                <h2>Blog<br />Aventura</h2>
                                <h4>É simplesmente uma simulação de texto da indústria tipográfica</h4>
                                <p>É simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica...</p>
                                <a class="mais" href="">Leia mais</a>
                            </div><!-- content -->
                        </div><!-- md-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="content">
                                <img src="assets/images/blog2.jpg" alt="">
                            </div><!-- content -->
                        </div><!-- md-6 -->
                    </div><!-- .item -->
                </div><!-- . owl-carousel -->
            </div><!-- row -->
        </div><!-- container -->
        <img src="assets/images/barco2.png" class="barco hidden-xs" alt="">
    </section><!-- blog -->

    <section class="dicas">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8">
                    <div class="divisor">
                        <h2>Dicas</h2>
                    </div><!-- divisor -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="">
                                <img src="assets/images/dica.jpg" alt=""> 
                                <h4>5 Melhores destinos para acampar no Brasil</h4>
                            </a>
                        </div><!-- md-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="">
                                <img src="assets/images/dica.jpg" alt=""> 
                                <h4>5 Melhores destinos para acampar no Brasil</h4>
                            </a>
                        </div><!-- md-6 -->
                    </div><!-- row -->
                </div><!-- md-9 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="content">
                        <h3>receba nossas<br /><span>novidades</span></h3>
                        <form class="navbar-form" role="search">
                            <input type="text" class="form-control" placeholder="Nome">
                            <input type="text" class="form-control" placeholder="E-mail">
                            <input type="submit" class="enviar" value="Enviar">
                        </form>
                    </div><!-- content -->
                </div><!-- md-3 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- dicas -->

<?php include 'components/footer.php'; ?>   