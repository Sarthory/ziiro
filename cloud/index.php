<html>
    <!-- ..................................... -->
    <!-- inclui engine -->
    <!-- ..................................... -->

    <?php require('z.php'); ?>

    <!-- ..................................... -->
    <!-- conteúdo -->
    <!-- ..................................... -->

    <body class="bg-init">

        <div class="animsition-overlay">

            <!-- ..................................... -->
            <!-- section 01 -->
            <!-- ..................................... -->
            <section class="hero is-fullheight" id="home">
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <h1 class="title is-1">Hello World</h1>
                        <h1 class="subtitle is-5">Desça a barra de rolagem ou <a href="#docs" class="alpha">clique aqui</a>.</h1>
                    </div>
                </div>
            </section>

            <!-- ..................................... -->
            <!-- section 02 -->
            <!-- ..................................... -->
            <section class="hero is-fullheight is-primary is-bold" id="docs">
                <div class="hero-body">
                    <div class="container has-text-centered motion fadeInRight">
                        <i class="fa fa-code fa-5x" aria-hidden="true"></i>
                        <h1 class="title is-1">Documentação</h1>
                        <h1 class="subtitle is-5">
                            <a href="z-docs/index.html">Clique e entenda o funcionamento do Framework.</a>
                        </h1>
                    </div>
                </div>

                <div class="hero-footer">
                    <div class="container has-text-centered">
                        <i class="fa fa-arrow-up fa-1x" aria-hidden="true"></i>
                        <a href="#home" class="light alpha">Voltar ao Topo</a>
                    </div>
                </div>
            </section>
        </div>

        <!-- ..................................... -->
        <!-- footer -->
        <!-- ..................................... -->

        <?php require ('footer.php'); ?>

    </body>
</html>