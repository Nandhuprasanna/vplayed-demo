<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.js'></script>
<script  src="assets/js/script.js"></script>
<script type="text/javascript">               
        $(function() {
        var header = $(".header");
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();
        
            if (scroll >= 500) {
                $(".header").addClass("fixed");
                $(".header .responsive-header .respo-header").addClass("fixed");
            } else {
                $(".header .responsive-header .respo-header").removeClass("fixed");
                $(".header").removeClass("fixed");
            }
        });
    });  
    
    $(document).ready(function() { 
        var catgrsowl = $('#top-categories .owl-carousel');
        catgrsowl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            navigation: true,       
            navClass: ['owl-prev', 'owl-next'],
            navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
            autoplay: true,                    
            autoplayTimeout:1000,
            autoplayHoverPause: true
        });
        $('.play').on('click',function(){
            catgrsowl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            catgrsowl.trigger('stop.owl.autoplay')
        })     
        /*learnercarousel*/                                                                                                         
        var learnerowl = $('#learners-slider .owl-carousel');
        learnerowl.owlCarousel({
            items:4,
            loop:true,
            margin:10,
            navigation: true,       
            navClass: ['owl-prev', 'owl-next'],
            navigationText : ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
            autoplay: true,                    
            autoplayTimeout:1000,
            autoplayHoverPause: true
        });
        $('.play').on('click',function(){
            learnerowl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            learnerowl.trigger('stop.owl.autoplay')
        })          
    });
    $('#header-3').on('click', '.search-toggle', function(e) {
        var selector = $(this).data('selector');
        $(selector).toggleClass('show').find('.search-input').focus();
        $(this).toggleClass('active');
        e.preventDefault();
     });
</script>
