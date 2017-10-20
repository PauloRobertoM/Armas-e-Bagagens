<?php include 'components/header.php'; ?>

    <header class="produtos-interna head-interna">
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
                        <a class="navbar-brand" href="index.php"><img class="logo" src="assets/images/logo.png" alt="Logo - Armas e Bagagens" /></a>
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

    <section class="topo2">
        <div class="container">
            <h1>Produtos</h1>

            <ol class="breadcrumb">
                <li><a href="#">Produto</a></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Armas</a></li>
                <li><a href="#">Nome Armas</a></li>
            </ol>
        </div><!-- .container -->
    </section><!-- .topo2 -->

    <section class="interna listagem">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="sidebar-menu">
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

                        <div id='category-menu'>
                            <ul class='ul-category'>
                                <li>
                                    <a>Categoria</a>
                                    <ul class='ul-subcategory'>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a>Categoria</a>
                                    <ul class='ul-subcategory'>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                        <li><a>Cantil Nautika Xepa Em Alumínio 0,9 Litros</a></li>
                                    </ul>
                                </li>
                                <li><a>Categoria</a></li>
                                <li><a>Categoria</a></li>
                            </ul>
                            </div>
                    </div><!-- sidebar-menu -->
                </div><!-- md-3 -->
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="produtos">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="item">
                                    <img src="assets/images/tag.png" class="novo" alt="">
                                    <img src="assets/images/prod.jpg" alt="">
                                    <div class="content">
                                        <h3>Pulseira Paracord Survival Guepardo</h3>
                                        <a class="botao" href="">Tenho Interesse</a>
                                    </div><!-- content -->
                                </div><!-- item -->
                            </div><!-- md-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="item">
                                    <img src="assets/images/prod.jpg" alt="">
                                    <div class="content">
                                        <h3>Pulseira Paracord Survival Guepardo</h3>
                                        <a class="botao" href="">Tenho Interesse</a>
                                    </div><!-- content -->
                                </div><!-- item -->
                            </div><!-- md-4 -->
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="item">
                                    <img src="assets/images/prod.jpg" alt="">
                                    <div class="content">
                                        <h3>Pulseira Paracord Survival Guepardo</h3>
                                        <a class="botao" href="">Tenho Interesse</a>
                                    </div><!-- content -->
                                </div><!-- item -->
                            </div><!-- md-4 -->
                        </div><!-- row -->
                    </div><!-- md-9 -->
                </div><!-- row -->
            </div><!-- produtos -->
        </div><!-- .container -->
    </section><!-- .interna-blog -->

<?php include 'components/footer.php'; ?>