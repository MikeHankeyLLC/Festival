
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Starlight Farm, Monkton, MD - METEOR MUSIC FESTIVAL &amp; BARN DANCE</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="./images/ico/favicon.png">

    <style>
        @font-face {
            font-family: 'Bellybeans FG';
            src: url('./fonts/BellybeansFG.eot');
            src: url('./fonts/BellybeansFG.eot?#iefix') format('embedded-opentype'),
                url('./fonts/BellybeansFG.woff2') format('woff2'),
                url('./fonts/BellybeansFG.woff') format('woff'),
                url('./fonts/BellybeansFG.ttf') format('truetype'),
                url('./fonts/BellybeansFG.svg#BellybeansFG') format('svg');
            font-weight: normal;
            font-style: normal;
        }

    </style>
    <?
        $iphone = false;
        if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'iphone') ):
            $iphone = true;
        endif;
 
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($){
	'use strict';
      	jQuery('body').backstretch([
	        "./images/main_bg.jpg", 
	    ], {duration: 5000, fade: 500});
 
    });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top opaqued" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><img src="./images/starlightfarm.svg" class="bounce-in" style=""/> Starlight Farm</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#about-us">About</a></li>
                    <li><a href="#bands">Bands</a></li>
                   
                    <li><a href="#contact">Contact</a></li> 
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered"> 
                                    <h3 class="animation animated-item-1 bounce-in">Righteous Ramblers Present</h3>

                                    <img src="./images/title.svg" title="Meteor Fest - RambleStock" class="animation animated-item-1 fade-down main"/>

                                    <!--<h2 class="animation animated-item-1 fade-down main">Meteor Fest - RambleStock</h2>
                                    <h4 class="animation animated-item-1 bounce-in">June 29<sup>th</sup> and 30<sup>th</sup> 2019</h4>-->
                                    <p class=" animation animated-item-2 fade-up"><strong>A 50th anniversary celebration and 
                                            musical recreation of the historic 
                                            Woodstock Music Festival of 1969</strong></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper" style="overflow-x:hidden;">
            <section id="about-us" class="white">
                    <div class="container">
                        <div class="gap"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">A Little About Us</h2>
                                    <hr>
                                    <p>Music &amp; Fun for a Great Cause</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 fade-up row">
                                    <div class="col-md-8">
                                                                            <p>Meteor Fest Ramblestock is a mini-festival recreation of the original Woodstock concert of 1969 setup as a charity fundraising event.</p> 

                                    <p>We are raising money for  <a href="https://www.umms.org/uch/health-services/cancer" target="_blank">University of Maryland Upper Chesapeake Health Kaufman Cancer Center</a> in Harford County. Funds raised from this event will directly benefit people in our community fighting cancer. </p>
                                    
                                    <p>This is our 6th year hosting this party and to date we have raised more than $90,000! With a little help from our friends we will get by the $100k mark and have our best year ever!</p>
                                    
                                    <p>To celebrate the spirit of 1969, local Annapolis and Baltimore musicians have come together to recreate and represent most of the acts from the original concert: Santana, Sly & The Family Stone, The Grateful Dead, The Who, Jimi Hendrix, Janis Joplin, Jefferson Airplane, Joe Cocker, CCR, CSNY, etc. 
                                    There will be dozens of musicians jamming and sitting-in throughout the day. All for a great cause.</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="./images/poster.jpg" class="img-responsive" style="margin:0 auto"/>
                                </div>

                            
                            </div>
                            <div class="col-md-4 fade-up">
        
                            </div>
                        </div>
                       <div class="gap"></div>
 
        
                        <div class="gap"></div>
                        <div class="center gap fade-down section-heading" style="overflow: hidden">
                            <h2 class="main-title">The BANDS</h2>
                            <hr>
                            <p>11 Bands for 2 days of music</p>
                        </div>
                        <div class="gap"></div>
        
                        <div id="bands" class="row">
                            <div class="col-md-4 col-xs-6">
                                <div class="center team-member">
                                    <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/bluemiracle.jpg" alt="Blue Miracle">
                                    <div class="team-content fade-up">
                                        <h5>Blue Miracle</h5>
                                        <p>Blues Rock.</p>
                                     </div>
                                </div>
                            </div>
        
                            <div class="col-md-4 col-xs-6">
                                <div class="center team-member">
                                    <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/AllMightySenators.jpg" alt="All Mighty Senators">
                                    <div class="team-content fade-up">
                                        <h5>All Mighty Senators</h5>
                                        <p>Rhythm and Blues.</p>
                                    </div>
                                </div>
                            </div>
                            <span class="clearfix visible-xs-block"></span>
                            <div class="col-md-4 col-xs-6">
                                <div class="center team-member">
                                    <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/jelloboys.jpg" alt="Jello Boys">
                                    <div class="team-content fade-up">
                                        <h5>Jello Boys</h5>
                                        <p>Rock</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                    <div class="center team-member">
                                        <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/Righteous-Ramblers.jpg" alt="Righteous Ramblers">
                                        <div class="team-content fade-up">
                                            <h5>Righteous Ramblers</h5>
                                            <p>Americana</p>
                                        </div>
                                    </div>
                            </div>
                            <span class="clearfix visible-xs-block"></span>
                            <div class="col-md-4 col-xs-6">
                                <div class="center team-member">
                                    <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/Wide-Eyed-Lounge-Cats.jpg" alt="Wide-Eyed Lounge Cats">
                                    <div class="team-content fade-up">
                                        <h5>Wide-Eyed Lounge Cats</h5>
                                        <p>American Jazz </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-6">
                                    <div class="center team-member">
                                        <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/katie-bowers-band.jpg" alt="katie bowers band">
                                        <div class="team-content fade-up">
                                            <h5>Katie Bowers Band</h5>
                                            <p>Rock &amp; Blues</p>
                                        </div>
                                    </div>
                            </div>
                            <span class="clearfix visible-xs-block"></span>
                            <div class="col-md-4 col-xs-6">
                                    <div class="center team-member">
                                        <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/Alan-Marcus-Band.jpg" alt="Alan Marcus Band">
                                        <div class="team-content fade-up">
                                            <h5>Alan Marcus Band</h5>
                                            <p>Old School Blues-Rock</p>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-md-4 col-xs-6">
                                    <div class="center team-member">
                                        <img class="img-responsive img-thumbnail <? if(!$iphone):?>bounce-in<?endif;?>" src="./images/bands/Josie.jpg" alt="Josie & Landis Expandis">
                                        <div class="team-content fade-up">
                                            <h5>Wake up Woodstock w/ Josie &amp; Landis Expandis</h5>
                                            <p>Rock</p>
                                        </div>
                                    </div>
                            </div>
                            <span class="clearfix visible-xs-block"></span>
                            <div class="col-md-4 col-xs-6">
                                    <div class="center team-member">
                                        <img class="img-responsive img-thumbnail bounce-in" src="./images/bands/Ruben.jpg" alt="Ruben Dobbs Band of Hendrix">
                                        <div class="team-content fade-up">
                                            <h5>Ruben Dobbs Band of Hendrix</h5>
                                            <p>Rock</p>
                                        </div>
                                    </div>
                            </div>

                           

                            
                        </div><!--/#meet-the-team-->
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </section>

 

            <section id="contact" class="white">
                <div class="container">
                	<div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Get In Touch</h2>
                        
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                         

                        <div class="col-md-12 fade-up">
                            <h3>Drop Us A Message</h3>
                            <br>
                            <br>
                            <div id="message_info"></div>
                            <form method="post" action="sendemail.php" id="contactform">
                                <input type="text" name="name" id="name" placeholder="Name" />
                                <input type="text" name="email" id="email" placeholder="Email" />
                                <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                                <input id="submit" class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="gap"></div>
                </div>
            </section>
        </div>

    <div id="footer-wrapper">
 
        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        &copy; 2019 StarLight Farm. All Rights Reserved.
                    </div>
                    <div class="col-sm-4">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>


    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
     <script src="js/init.js"></script>
     <? if(!$iphone):?>
     <script>
     jQuery(document).ready(function($){
'use strict';
  jQuery('.fade-up, .fade-down, .bounce-in, .flip-in').addClass('no-display');
  jQuery('.bounce-in').one('inview', function() { 
    jQuery(this).addClass('animated bounceIn appear');
  });
  jQuery('.flip-in').one('inview', function() { 
    jQuery(this).addClass('animated flipInY appear');
  });
  jQuery('.counter').counterUp({
    delay: 10,
    time: 1000
  });
  jQuery('.fade-up').one('inview', function() {
    jQuery(this).addClass('animated fadeInUp appear');
  });
  jQuery('.fade-down').one('inview', function() {
    jQuery(this).addClass('animated fadeInDown appear');
  });

});
</script>
<? endif; ?>
</body>
</html>
