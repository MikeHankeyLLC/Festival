	
	   function logo_resize() {
		    if($(window).width()<1024) { 
				  $('img.brand').attr('src',$('img.brand').attr('data-src-mobile'));
			  } else {
				  $('img.brand').attr('src',$('img.brand').attr('data-src-desktop'));
			  }
	   }
	   
	
	   logo_resize();
	
	   $(function() {
		   
		   
		    logo_resize();
		   
		   
			
		   // Logo
		   $( window ).resize(function() {
			   logo_resize();
			});	
		});	