<html>
    <!-- ..................................... -->
    <!-- inclui engine -->
    <!-- ..................................... -->

    <?php require('z.php'); ?>

    <!-- ..................................... -->
    <!-- conteúdo -->
    <!-- ..................................... -->

    <body>

        <!-- ..................................... --> 
        <!-- conteúdo --> 
        <!-- ..................................... --> 

        <div class="swiper-container animated fadeInDown">    
            <div class="swiper-wrapper"> 

                <!-- 01 --> 
                <div class="swiper-slide hero is-fullheight index-bg"> 
                    <div class="hero-body"> 
                        <div class="container has-text-centered animated fadeIn frame-1"> 
                            <img src="z-imagens/logo.png" id="logo"> 
                            <p>Toque na tela, deslize para lateral e navegue.</p> 
                        </div> 
                    </div> 
                </div> 

                <!-- ..................................... --> 

                <!-- 02 --> 
                <div class="swiper-slide hero is-fullheight index-bg"> 
                    <div class="hero-body"> 
                        <div class="container has-text-centered"> 
                            <a  
                               href="z-docs/index.html"   
                               > 
                                <h1 class="title is-1">Documentação</h1> 
                                <h1 class="subtitle is-5">Entenda como o framework funciona.</h1> 
                            </a> 
                        </div> 
                    </div> 
                </div> 

                <!-- ..................................... --> 

            </div> 

            <!-- Paginação --> 
            <div class="swiper-pagination"></div> 
            <!-- ..................................... --> 
        </div>


        <!-- ..................................... -->
        <!-- footer -->
        <!-- ..................................... -->

        <?php require ('footer.php'); ?>

    </body>
</html>