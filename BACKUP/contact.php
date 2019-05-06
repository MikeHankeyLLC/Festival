<?php

  
  require '/PHPMailer/src/Exception.php';
  require '/PHPMailer/src/PHPMailer.php';
  require '/PHPMailer/src/SMTP.php';

  

	$error = false; 
	$sent = false;

if(isset($_POST['submit'])) {
	
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
		!isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
  			$error = true;
	} else {
		
		$values = array(
			"first_name" 	=> $_POST['first_name'],
			"last_name" 	=> $_POST['last_name'],
			"email" 		=> $_POST['email'],
			"telephone" 	=> $_POST['telephone'],
			"comments" 		=> $_POST['comments'],
			"object" 		=> $_POST['object']
		);
  
 	   $error_message = array();
 	  
	   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	   if(!preg_match($email_exp,$values['email'])) {
			$error_message['email'] = 'The Email Address you entered does not appear to be valid.';
 	   }
	   $string_exp = "/^[A-Za-z .'-]+$/";
	   if(!preg_match($string_exp,$values['first_name'])) {
			$error_message['first_name'] = 'The First Name you entered does not appear to be valid.';
	   }
	   if(!preg_match($string_exp,$values['last_name'])) {
			$error_message['last_name'] = 'The Last Name you entered does not appear to be valid.';
	   }
	  
	   if(strlen($values['comments']) < 2) {
			$error_message['comments'] = 'The Message you entered does not appear to be valid.';
	   }
	  
	   
	   if(count($error_message) > 0) {
			$error = true;
  	   } else {
			
			function clean_string($string) {
			  $bad = array("content-type","bcc:","to:","cc:","href");
			  return str_replace($bad,"",$string);
			}
			
			// EDIT THE 2 LINES BELOW AS REQUIRED
			$email_to = "mike.hankey@gmail.com";
			$email_subject = "*" . $object . "* The Meteor Music Festival and Barn Dance";
		
			$email_message .= "First Name: ".clean_string($values['first_name'])."\n";
			$email_message .= "Last Name: ".clean_string($values['last_name'])."\n";
			$email_message .= "Email: ".clean_string($values['email'])."\n";
			$email_message .= "Telephone: ".clean_string($values['telephone'])."\n";
			$email_message .= "Message: ".clean_string($values['comments'])."\n";
			 
			// create email headers
			$headers = 'From: '.$values['email']."\r\n".
			$headers .= 'Cc: vperlerin@gmail.com' . "\r\n";
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);  

			$sent = true;
		
	  }
	}
}
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Vincent Perlerin for Mike Hankey and Associates"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="shortcut icon" href="ico/favicon.png">

  	<title>Starlight Farm, Monkton, MD</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <link rel="shortcut icon" href="img/ico/favicon.png">

    <!--[if lt IE 9]>
      <script src="js/ie/html5shiv.js"></script>
      <script src="js/ie/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Brawler' rel='stylesheet' type='text/css'>
    <link href="css/starlight-farm.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar-wrapper" id="top">
        <div class="navbar navbar-inverse" id="header">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"><img class="brand" data-src-desktop="img/starlightfarm.png" data-src-mobile="img/starlightfarm_mobile.png" src="img/starlightfarm.png" alt="Starlight Farm" />
              </a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
			  	<? /*
                <li><a href="/#meteor-barn-festival" title="Meteor Barn Dance Festival">Join Now</a></li>
                <li><a href="/#the-bands"  title="The Bands">The Bands</a></li>
                <li><a href="/#vip"  title="VIP Barn Stalls">VIP Barn Stalls</a></li>
                <li><a href="/#on-site"  title="On site">Infos</a></li>
				*/ ?>
                <li  class="active"><a href="contact.php"   title="contact"><span class="glyphicon glyphicon-send"></span> Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
    
    <div id="top" class="page-title-holder">
       <div class="container">
          	<h1 class="page-title">Contact</h1>
       </div>
    </div>

	<div class="container one-page-container" style="padding-top:30px">
     	<?php if($error) : ?>
        	<div class="alert alert-danger">
            	<strong>Error</strong>
                <ul>
					<? foreach($error_message as $msg): ?>
                    	<li><?= $msg; ?></li>
                    <? endforeach; ?>
				</ul>
            </div>
        <? endif ;?>
        
        <?php if($sent) : ?>
        	<div class="alert alert-success">
            	<strong>Thank you!</strong> I will contact you asap.<br/>
                - Mike
            </div>
       	<? else: ?>
        
        
        
       
        <form class="form-horizontal" role="form" method="post" action="contact.php">
          <input type="hidden" name="submit"/>
          <div class="form-group <? if(!empty($error_message['first_name'])): ?>has-error <? endif; ?>">
            <label for="first_name" class="col-lg-2 control-label">First Name</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?=$values['first_name'];?>">
            </div>
          </div>
          <div class="form-group <? if(!empty($error_message['last_name'])): ?>has-error <? endif; ?>">
            <label for="last_name" class="col-lg-2 control-label">Last Name</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"  value="<?=$values['last_name'];?>">
            </div>
          </div>
          <div class="form-group <? if(!empty($error_message['telephone'])): ?>has-error <? endif; ?>">
            <label for="telephone" class="col-lg-2 control-label">Phone</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Phone"  value="<?=$values['telephone'];?>">
            </div>
          </div>
          <div class="form-group <? if(!empty($error_message['email'])): ?>has-error <? endif; ?>">
            <label for="email" class="col-lg-2 control-label" >Email</label>
            <div class="col-lg-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$values['email'];?>">
            </div>
          </div>
          <div class="form-group <? if(!empty($error_message['object'])): ?>has-error <? endif; ?>">
            <label for="object" class="col-lg-2 control-label">Object</label>
            <div class="col-lg-10">
              <select id="object" class="form-control" name="object" onchange="if($(this).val()=='vip_stalls') $('#vip').show(); else $('#vip').hide(); ">
					<option value="question" <? if($values['object']=='question'):?>selected="selected"<?endif;?>>Question</option>              
                    <option value="volunteer" <? if($values['object']=='volunteer'):?>selected="selected"<?endif;?>>Volunteer</option>   
              		<option value="vip_stalls" <? if($values['object']=='vip_stalls'):?>selected="selected"<?endif;?>>VIP Stalls</option>   
              </select>
              
              <p id="vip" class="alert alert-info" style="margin-top:10px; <? if($object=='vip_stalls'):?>display:block<?else:?>display:none<?endif;?>">Please, email your donation receipt of $500 or more to <a href="mailto:mike.hankey@gmail.com"><strong>Mike Hankey</strong></a> to lock in your VIP Barn Stalls at the Meteor Music Festival &amp; Barn Dance</p>
            </div>
             
          </div>
		  <div class="form-group <? if(!empty($error_message['comments'])): ?>has-error <? endif; ?>">
            <label for="comments" class="col-lg-2 control-label">Message</label>
            <div class="col-lg-10">
              <textarea id="comments" class="form-control" rows="8" name="comments"><?=$$values['comments'];?></textarea>
            </div>
          </div>          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button type="submit" class="btn btn-default">Send</button>
            </div>
          </div>
        </form>
       <? endif; ?>
    </div>
        
        <div class="salmon-container">
    		<div class="one-page-container " >
      			
                <div class="container">
                  <ul class="list-inline list-unstyled row">
                    <li class="col-xs-4	col-sm-4 col-md-4	 col-lg-4">
                      <div class="thumbnail">
                       <img src="img/farm/horses.jpg"  class="img-responsive" title="Horses at Starlight Farm, Monkton, MD"/>
                       </div>  
                    </li>
                    <li class="col-xs-4	col-sm-4 col-md-4	 col-lg-4">
                      <div class="thumbnail">
                       <img src="img/farm/butterflies.jpg"  class="img-responsive" title="Butterflies at Starlight Farm, Monkton, MD"/>
                       </div>  
                    </li>
                    <li class="col-xs-4	col-sm-4 col-md-4	 col-lg-4">
                      <div class="thumbnail">
                       <img src="img/farm/table.jpg"  class="img-responsive" title="Table at Starlight Farm, Monkton, MD"/>
                       </div>  
                    </li>
                  </ul>
                </div>
          
    		</div>
        </div>
    
    <div class="blue-container">
        <div class="container">
          <!-- FOOTER -->
          <footer>
             <p>&copy; 2013 Starlight Farm, Monkton, MD</p>
          </footer>
        </div>
    </div>
    
    <script src="js/framework/jquery.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/scripts/shared.js"></script>
    <script>
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
    </script>
    
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-43892900-1', 'starlightfarm.com');
	  ga('send', 'pageview');
	
	</script>
</body>
</html>



 
