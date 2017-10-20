<?php include 'components/header.php'; ?>
    <header class="contato-interna head-interna">
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
            <h1>Contato</h1>

            <ol class="breadcrumb">
                <li><a href="#">Início</a></li>
                <li class="active">Contato</li>
            </ol>
        </div><!-- .container -->
    </section><!-- .topo2 -->

    <section class="interna contato">
        <div class="container">
            <form>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="" />
                </div><!-- .form-group -->

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" name="email" id="email" class="form-control" value="" />
                        </div><!-- .form-group -->
                    </div><!-- .md-6 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                        </div><!-- .form-group -->
                    </div><!-- .md-6 -->
                </div><!-- .row -->

                <div class="form-group">
                    <label>Assunto</label>
                    <input type="text" name="assunto" id="assunto" class="form-control" value="" />
                </div><!-- .form-group -->

                <div class="form-group">
                    <label>Mensagem</label>
                    <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                </div><!-- .form-group -->

                <button class="enviar">Enviar</button>
            </form>
        </div><!-- .container -->
    </section><!-- .interna-blog -->

<?php include 'components/footer.php'; ?>