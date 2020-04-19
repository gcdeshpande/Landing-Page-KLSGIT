/*

  Author: DeMustang
  Template: Massketing
  Version: 2.0
  URL: http://themeforest.net/user/demustang


*/
	
	
	$(document).ready(function() { // Document ready
	"use strict";
	
	/* ==========================
	   PRE-LOADER
	=============================*/
	
	$(window).load(function() {
		// will fade loading animation
		$("#object").delay(600).fadeOut(300);
		// will fade loading background					
		$("#loading").delay(1000).fadeOut(500);
	})  
    
	/* ==========================
	   Anchor Scroll
	=============================*/  
     $(function() {
            $('a.scroll').on('click', function(event) {
              var $anchor = $(this);
              $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
              }, 2000, 'easeInOutExpo');
              event.preventDefault();
            });
          });


	/* ==========================
	   Owl-Carousel
	=============================*/
	
	/*---------------------------
		TRAINING
	----------------------------*/
	
	$(document).ready(function() {
     
      $("#owl-demo-training").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     
    });	
	
	/*---------------------------
		CLIENT
	----------------------------*/
		$(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 3,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     
    });	

	/* =====================================
	   SUBSCRIBE ( NEWSLETTER SUBSCRIPTION )
	========================================*/

        
        
        $('#subscribe').validate({
             
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"inc/subscribe.php",
                success: function() {
                   // alert('success');
                   $('#newsletter-error').slideUp();
                   $('#newsletter-success').slideDown();
                },
                error: function() {
                    //alert('error');
                    $('#newsletter-success').slideUp();
                    $('#newsletter-error').slideDown();
                }
            });
        },
        invalidHandler: function() {
            $('#newsletter-success').slideUp();
            $("#newsletter-error").slideDown();
        },
        errorPlacement: function(error, element) { 
            $('#subscribe_error').html(error.text());                
         }
              
    });   

        
	/* =====================================
	   SIGNUP ( FORM SUBMISSION )
	========================================*/
        
        
        $('#signup').validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"inc/signup.php",
                success: function() {
                   // alert('success');
                   $('#signup-error').slideUp();
                   $('#signup-success').slideDown();
                },
                error: function() {
                    //alert('error');
                    $('#signup-success').slideUp();
                    $('#signup-error').slideDown();
                }
            });
        }, 
        invalidHandler: function() {
            $('#signup-success').slideUp();
            $("#signup-error").slideDown();
        },
        errorPlacement: function(error, element) { 
            $('#signup_error').html(error.text());                
         }
    });          
        
        
	/* =====================================
	   SCROLL REVEAL ANIMATIONS
	========================================*/
        
      window.sr = ScrollReveal();

      sr.reveal('.reveal-bottom', {
        origin: 'bottom',
        distance: '20px',
        duration: 800,
        delay: 400,
        opacity: 1,
        scale: 0,
        easing: 'linear',
        reset: true
      });

      sr.reveal('.reveal-top', {
        origin: 'top',
        distance: '20px',
        duration: 800,
        delay: 400,
        opacity: 1,
        scale: 0,
        easing: 'linear',
        reset: true
      });

      sr.reveal('.reveal-left', {
        origin: 'left',
        distance: '20px',
        duration: 800,
        delay: 400,
        opacity: 1,
        scale: 0,
        easing: 'linear',
        reset: true
      });

      sr.reveal('.reveal-right', {
        origin: 'right',
        distance: '20px',
        duration: 800,
        delay: 400,
        opacity: 1,
        scale: 0,
        easing: 'linear',
        reset: true
      });
        
      sr.reveal('.reveal-left-fade', {
        origin: 'left',
        distance: '20px',
        duration: 800,
        delay: 0,
        opacity: 0,
        scale: 0,
        easing: 'linear',
        mobile: false
      });

      sr.reveal('.reveal-right-fade', {
        origin: 'right',
        distance: '20px',
        duration: 800,
        delay: 0,
        opacity: 0,
        scale: 0,
        easing: 'linear',
        mobile: false
      });
        
      sr.reveal('.reveal-right-delay', {
        origin: 'right',
        distance: '20px',
        duration: 1000,
        delay: 0,
        opacity: 0,
        scale: 0,
        easing: 'linear',
        mobile: false
      }, 500);
        
      sr.reveal('.reveal-bottom-fade', {
        origin: 'bottom',
        distance: '20px',
        duration: 800,
        delay: 0,
        opacity: 0,
        scale: 0,
        easing: 'linear',
        mobile: false
      });
      
	
}); // End document ready