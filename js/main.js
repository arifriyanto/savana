(function($) {

    'use strict';  


    $(window).load(function() {

      	$('.article-list').masonry({
            itemSelector:'.post-grid',
            percentPosition: true
        });                    
        
    });  

    jQuery(document).ready(function($) {  

        $('.search-form input').focus(function () {
            $(this).data('placeholder', $(this).attr('placeholder'))
                   .attr('placeholder', 'Search');
        }).blur(function () {
            $(this).attr('placeholder', $(this).data('placeholder'));
        }); 

        $("#home-slider").owlCarousel({
            navigation : false,
            slideSpeed : 500,
            pagination : false,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay: true,
        });

        var owl = $("#home-slider");

        $(".slide-next").click(function(){
            owl.trigger('owl.next');
        })

        $(".slide-prev").click(function(){
            owl.trigger('owl.prev');
        });

        $(".slide-next-mobile").click(function(){
            owl.trigger('owl.next');
        })

        $(".slide-prev-mobile").click(function(){
            owl.trigger('owl.prev');
        });       

       $(".search-button button").click(function() {
            $("body").toggleClass("overlay-search-open");
            $(".overlay-search").toggle(300);
            $(".overlay-menu").hide(500);
            $('body').toggleClass('overflow-hidden');
            $('.overlay-full').toggleClass('overlay-full-show');
        });

        $(".navbar-toggle").click(function() {
            $(".overlay-menu").toggleClass("overlay-menu-open");
            // $(".overlay-menu").toggle(300);
            $('body').toggleClass('overflow-hidden');
            $('.overlay-full').toggleClass('overlay-full-show');
        });

        $('#showcomment').click(function(){
            $('.komentar').slideToggle();
        }); 

        $('[data-toggle="tooltip"]').tooltip(); 


        // Navigation Scripts to Show Header on Scroll-Up
        var MQL = 0;

        //primary navigation slide-in effect
        if ($(window).width() > MQL) {
            var headerHeight = $('.site-header').height();
            $(window).on('scroll', {
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                //check if user is scrolling up
                if (currentTop < this.previousTop) {
                    //if scrolling up...
                    if (currentTop > 30 && $('.site-header').hasClass('is-fixed')) {
                        $('.site-header').addClass('is-visible');
                    } else {
                        $('.site-header').removeClass('is-visible is-fixed');
                        $('#page').css('margin-top','0');
                    }
                } else {
                    //if scrolling down...
                    $('.site-header').removeClass('is-visible');                
                    if (currentTop > headerHeight && !$('.site-header').hasClass('is-fixed')) {
                        $('.site-header').addClass('is-fixed');
                        $('#page').css('margin-top','80px');
                    }
                }
                this.previousTop = currentTop;
            });
        }     
       
    });         

})( jQuery );


