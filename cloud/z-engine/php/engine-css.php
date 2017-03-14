<!-- ..................................... -->
<!-- css -->
<!-- ..................................... -->
<link rel="stylesheet" href="z-engine/css/animate-3.5.1/animate.min.css">
<link rel="stylesheet" href="z-engine/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="z-engine/js/animsition-4.0.2/css/animsition.min.css">
<link rel="stylesheet" href="z-engine/js/swiper-3.3.1/swiper.min.css">


<style>
    /* ---------------------------------------------------
    - padrões & correções de bug
    --------------------------------------------------- */
    .no-flick{ -webkit-transform:translate3d(0,0,0); }
    .inline li { display: inline !important; padding: 18px; }

    /* ---------------------------------------------------
    - velocidade das animações
    --------------------------------------------------- */
    .animated {
        -webkit-animation-duration: <?php echo $motion ?> !important;
        animation-duration: <?php echo $motion ?> !important;
    }

    /* ---------------------------------------------------
    - swiper.js
    --------------------------------------------------- */
    .swiper-slide-active{ border: none !important;}
    .swiper-pagination-bullet{ height: 14px !important; width: 14px !important; opacity: 1 !important;}
    .swiper-pagination-bullet-active { height: 17px !important; width: 17px !important; }
    .swiper-button-next{ background-image: none !important; }
    .swiper-button-prev{ background-image: none !important; }

    /* ---------------------------------------------------
    - cores
    --------------------------------------------------- */
    .light{ color: aliceblue !important; }
    .greenshock{ color: greenyellow !important;}
    .indigo{ color: indigo !important;}

    /* ---------------------------------------------------
    - efeitos em miniaturas
    --------------------------------------------------- */
    .blur{ -webkit-filter: blur(5px); filter: blur(5px); }

    .alpha{ opacity: 1; -webkit-transition: opacity .5s linear; transition: opacity .5s linear; }
    .alpha:hover{ opacity: .5; -webkit-transition: opacity .5s linear; transition: opacity .5s linear; }

    /* ---------------------------------------------------
    - mobile
    --------------------------------------------------- */
    @media all and (orientation:portrait) {

    }

    @media all and (orientation:landscape) {

    }

    /* ---------------------------------------------------
    - Timeline
    --------------------------------------------------- */
    .frame-1 { -webkit-animation-delay: 1s; }
    .frame-2 { -webkit-animation-delay: 2s; }
    .frame-3 { -webkit-animation-delay: 3s; }
    .frame-4 { -webkit-animation-delay: 4s; }
    .frame-5 { -webkit-animation-delay: 5s; }
    .frame-6 { -webkit-animation-delay: 6s; }
    .frame-7 { -webkit-animation-delay: 7s; }
    .frame-8 { -webkit-animation-delay: 8s; }
    .frame-9 { -webkit-animation-delay: 9s; }
    .frame-10 { -webkit-animation-delay: 10s; }

    .frame-x { -webkit-animation-delay: .5s; }
    .frame-1x { -webkit-animation-delay: 1.5s; }
    .frame-2x { -webkit-animation-delay: 2.5s; }
    .frame-3x { -webkit-animation-delay: 3.5s; }
    .frame-4x { -webkit-animation-delay: 4.5s; }
    .frame-5x { -webkit-animation-delay: 5.5s; }
    .frame-6x { -webkit-animation-delay: 6.5s; }
    .frame-7x { -webkit-animation-delay: 7.5s; }
    .frame-8x { -webkit-animation-delay: 8.5s; }
    .frame-9x { -webkit-animation-delay: 9.5s; }
    .frame-10x { -webkit-animation-delay: 10.5s; }

    .fastframe-1 { -webkit-animation-delay: .2s; }
    .fastframe-2 { -webkit-animation-delay: .4s; }
    .fastframe-3 { -webkit-animation-delay: .6s; }
    .fastframe-4 { -webkit-animation-delay: .8s; }
    .fastframe-5 { -webkit-animation-delay: .10s; }
    .fastframe-6 { -webkit-animation-delay: .12s; }
    .fastframe-7 { -webkit-animation-delay: .14s; }
    .fastframe-8 { -webkit-animation-delay: .16s; }
    .fastframe-9 { -webkit-animation-delay: .18s; }
    .fastframe-10 { -webkit-animation-delay: .20s; }
</style>