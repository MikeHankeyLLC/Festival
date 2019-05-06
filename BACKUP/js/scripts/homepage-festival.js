   		function get_highest_band() {
			var t=0; 
			$('.band').each(function () {
				$this = $(this);
				if ( $this.outerHeight() > t ) {
					t = $this.outerHeight();
				}
			});   
			return t;
	   }
	
	  
	   function band_resize() {
			  $('.band').height(get_highest_band()); 
	   }
	  


		/*
		 * Full screen background
		 */
   		function fullScreenBg() {
			var m_top;
			if($(window).width()>700) {
				if($(window).height()<1100) {
					// Large Screens
					if($('#illus img').width()>800) $('#illus img').css({'width':800+'px'});
					$('#illus').css({'height':$(window).height()-$('#header').outerHeight(), 'padding':0});	
					
				} else {
					// Extra-large screens	
					$('#illus img').css({'width':100+'%'});
					$('#illus').css({'height':$(window).height()-$('#header').height()-$('#first-divider').outerHeight(), 'padding':0});
				}
				

			} else {
				$('#illus').css('height','auto');	
				
			}
			m_top =  ($('#illus').outerHeight()-$('#illus img').height())/2-$('#illus p').height();
			m_top = m_top>0?m_top:5;
			if(m_top>0) $('#illus img').css({'margin-top':m_top});
		}
		
		/**
		 * Back to top 
		 */
		function backToTop() {
			$(window).scroll(function() {
				if($(this).scrollTop() >= 200) {
					$('#back-to-top').fadeIn();	
				} else {
					$('#back-to-top').fadeOut();
				}
			});
			
		}
		

		
		
		
		$(function() {
			fullScreenBg();
		  
 			
			  // Gallery
			$('.gal').click(function(e) {
				var options = {index:$('.gal').index($(this)), event:e}, links = $('.gal');
				blueimp.Gallery(links, options);
			}); 
			
		   // Bands
		   $( window ).resize(function() {
			 
			   setTimeout(band_resize,500);
			});	
			
 			$(window).resize(function() {
			  fullScreenBg();
			});
			backToTop();
			 setTimeout(fullScreenBg,500);
			
			/* Smooth Scroll */
			$(".scroll").click(function(event){
			 event.preventDefault();
			 //calculate destination place
			 var dest=0;
			 if($(this.hash).offset().top > $(document).height()-$(window).height()){
				  dest=$(document).height()-$(window).height();
			 }else{
				  dest=$(this.hash).offset().top;
			 }
			 //go to destination
			 $('html,body').animate({scrollTop:dest}, 800);
			 });
		});
		
		
		$(window).load(function() {
				  band_resize();
		});
		
		// Windows devices
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			  var msViewportStyle = document.createElement("style")
			  msViewportStyle.appendChild(
				document.createTextNode(
				  "@-ms-viewport{width:auto!important}"
				)
			  )
			  document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
		}