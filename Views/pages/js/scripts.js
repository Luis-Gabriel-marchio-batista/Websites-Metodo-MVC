$(function(){

    $('.icon').click(function(){
        $('.mobile').find('ul').slideToggle();
    });

    $('.box-wraper').slick({
		centerMode: true,
		slidesToShow:1,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1200,
        prevArrow: false,
        nextArrow: false,
        dots: true,
        variableWidth: true,
        infinite: true
    });


})
    /** Scroll **/

    jQuery(document).ready(function($) { 
        $(".scroll").click(function(event){        
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
        });
    });