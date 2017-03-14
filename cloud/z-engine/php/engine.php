<!-- ..................................... -->
<!-- bibliotecas -->
<!-- ..................................... -->

<script src="z-engine/js/jquery-1.11.1/jquery-v1.11.1.min.js"></script>
<script src="z-engine/js/jquery-1.11.1/jquery-ui-v1.12.0.min.js"></script>
<script src="z-engine/js/jquery-1.11.1/wow.min.js"></script>
<script src="z-engine/js/swiper-3.3.1/swiper.jquery.min.js"></script>
<script src="z-engine/js/animsition-4.0.2/js/animsition.min.js"></script>


<script>
    // ....................................
    // swiper config 
    // ....................................
    
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        loop: true, 
        simulateTouch: false, 
        grabCursor: false,
        slidesPerView: 'auto',
        speed: 400,
        autoplay: 8000,
        autoplayDisableOnInteraction: true
    });

    // ....................................
    // page transition
    // ....................................
    
    $(document).ready(function() {
        $('.animsition-overlay').animsition({
            inClass: 'overlay-slide-in-top',
            outClass: 'fade-out',
            inDuration: 800,
            outDuration: 800,
            overlay : true,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'body'
        })

    });

    // ....................................
    // auto scrolling
    // ....................................
    
    jQuery(document).ready(function($) {
        $('a[href^="#"]').bind('click.smoothscroll',function (e) {
            e.preventDefault();
            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate( {
                'scrollTop': $target.offset().top-0
            }, 700, 'swing', function () {
                window.location.hash = target;
            } );
        } );
    } );


    // ....................................
    // WOW.js
    // ....................................
    
    var wow = new WOW(
        {
            boxClass:     'motion',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       200,          // distance to the element when triggering the animation (default is 0)
        }
    );
    wow.init();

</script>