<!DOCTYPE html>
<html>
	<head>

		<title>cv akkad</title>

        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="./asset/css/contacts.css">
        <link rel="stylesheet" href="jquery-3.2.1.js" />
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
				<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
				<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">


	</head>
	<body>

<!-- navigateur -->


			<div class="overlay-navigation">
			<nav role="navigation">
				<ul>
					<li><a href="index.php" data-content="L'esencielle" title="HOME">Home</a></li>
					<li><a href="portfolio.php" data-content="Qualiter 1" title="Skills">Skills</a></li>
					<li><a href="contacts.php" data-content="Appel moi" title="About">About</a></li>
					<li><a href="#" data-content="#">Works</a></li>
					<li><a href="#" data-content="#">Contact</a></li>
				</ul>
			</nav>
			</div>

<!-- menu BG -->

			<div class="open-overlay">
				<span class="bar-top"></span>
				<span class="bar-middle"></span>
				<span class="bar-bottom"></span>
			</div>



<!-- content-section3 -->

        <div class="content-section3">

					<h1>Me contacter</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget aliquam massa.</p></br>
					<p>Donec feugiat, tortor ac feugiat auctor, purus augue rhoncus neque, at tristique tortor urna at velit.</p></br>
					<p>Nullam in maximus quam. Suspendisse aliquam enim nibh, ac scelerisque justo sollicitudin eget. In sed lacinia quam, a viverra diam.</p>

					<!-- formuler aller voir la 
					 https://www.phpformbuilder.pro/templates/index.php 
					 https://1stwebdesigner.com/php-contact-form-html/ -->

					<div class="formulair">

						<?php

							$action=$_REQUEST['action'];
								if ($action=="")    /* afficher le formulaire de contact*/
   								 {
								if(isset($_POST['submit'])){
   								 $to = "saritasabdulkadir@gmail.com"; // ceci est votre adresse e-mail
   								 $from = $_POST['email']; // c'est l'adresse e-mail de l'expéditeur
    							 $full_name = $_POST['name'];
    							 $subject = "Domain For Sale";
    							 $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    						$headers = "From:" . $from;
    					mail($to,$subject,$message,$headers);
   					    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

  						}  }
  									?>

			<h1><div id="header" style="background-color:#0099ff">Contacter moi</div></h1>



						<p>
						  <h3>
						    <form  action="" method="POST" enctype="multipart/form-data">
						    <input type="hidden" name="action" value="submit">
						    Your full name:<br>
						    <input name="name" type="text" value="" size="30"/><br>
						    Your email address:<br>
						    <input name="email" type="text" value="" size="30"/><br>
						    Your message:<br>
						    <textarea name="message" rows="7" cols="35"></textarea><br>
						    <input type="submit" name="submit" value="Send Email"/>
						    </form>
						    <?php //}?>
						</p>

  					</div>

		</div>




<!-- footer -->

<footer class="footer" ><a href="http://akkadwebdesigner.16mb.com/" target="_blank">AKKAD Web Deigner & Web Devlopeur  </a></footer>

        <script src="jquery-3.2.1.js"></script>



				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>

			<script  src="asset/js/index.js"></script>
			<script  src="js/index.js"></script>



	</body>
</html>
