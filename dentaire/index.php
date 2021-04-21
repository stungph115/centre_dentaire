<?php
	require_once("fonction.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title> site cabinet dentaire</title>
	<meta charset="utf-8">
	<style type="text/css">
		html {scroll-behavior: smooth;}
	html, body { height: auto }
		body{
		background: #2F4F4F;
		color :#FFF8DC;
		font-family: arial;
		}

		h1 {color: #DAA520;
		font-family: verdana;	
		 -webkit-text-stroke-width: 1px;
 		 -webkit-text-stroke-color: black;}
		
		h4{transform: scale(2.2);} 
		h4 {color:#DAA520;
		font-family: verdana;}

		header
		{
		background-image: url("images/header.png");
		background-repeat: no-repeat;
		background-size: auto;
		background-position: center;
		}

		button[type=submit]:hover
		{transform: scale(1.2);}
		button[type=reset]:hover
		{transform: scale(1.2);}
		
		img:hover
		{transform: scale(1.2);}


		div.menu:hover
		{transform: scale(1.3);}

		/*button on top*/
		#myBtn
		{
 		display: none; 
 		position: fixed; 
 		bottom: 10px;
 		right: 10px; 
  	   	z-index: 99; 
 		border: none;
 		outline: none; 
 		background-color: transparent;
  		cursor: pointer; 
 	 	padding: 15px; 
 	 	border-radius: 10px; 
 		}
 		#show1 {
 	
  	   	z-index: 99; 
 		border: none;
 		outline: none; 
 		background-color: transparent;
  		cursor: pointer; 
 	 	padding: 15px; 
 	 	border-radius: 10px;}
 		#show2 {
 	
  	   	z-index: 99; 
 		border: none;
 		outline: none; 
 		background-color: transparent;
  		cursor: pointer; 
 	 	padding: 15px; 
 	 	border-radius: 10px;}
		/*hint*/
		


		.dropdown 
		{
 		position: relative;
 		display: inline-block;
		margin: 1rem;
		}

		.dropdown-content 
		{
 		display: none;
 		position: absolute;
		background-color: transparent ;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		 text-decoration-color: white;
		 color:white;			
		}

		.dropdown:hover .dropdown-content
		{
 		display: block;
		}

		footer
		{
		background-image: url("images/footer.png");
		background-repeat: no-repeat;
		background-size: auto;
		background-position: center;
		display: flow-root;
		}

		div.left_footer{
 		position: relative;
 		margin-top: 20px;
 		margin-left: 60px;

 		}
		div.footer_titre{color: #DAA520;
		font-family: verdana;	
		 -webkit-text-stroke-width: 1px;
 		 -webkit-text-stroke-color: black;
 		 font-size: 30px;}

 		* {
  			box-sizing: border-box;
		}

/* Create three equal columns that floats next to each other */
		.column {
 		 float: left;
 		 width: 25%;
 		 padding: 10px;
 		 height: 300px; /* Should be removed. Only for demonstration */
			}

	    .menu{
			display: inline-flex;
			
		}
		#footer{
			margin-top: 5rem;
		}
		.col{
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.info{
			display: flex; 
			align-items:center;
		}
	</style>
</head>
<body>
<center>
<header>
	<br><h1> Gestion de cabinet dentaire La dent d'or</h1> <br>  
<marquee> Le nouveau maquillage pour votre sourire !																			 Un sourire, ça change tout  !</marquee>  <br> <br/>
<float><img class="a" src="images/logo.png" width="250" height="200" onclick="scrollTo()" > <br><br> </float> 
</header>


<h4>Le menu</h4>
<div class="menu">	

	<div class="dropdown" > <a href="index.php?page=1" onclick="bodyfunction()"> 
	<div id="dropdown1" onmouseover="bigImg(this)" onmouseout="smallImg(this)">
	<img src="images/medecin.png" width="100" height="100"> 
 <div class="dropdown-content">
 		 <p>Entrer le gestion des médecins</p>
 		 </div>
		  </div>
		  </a> 
	</div>

<div class="dropdown">
<a href="index.php?page=2">
<div id="dropdown2" onmouseover="bigImg(this)" onmouseout="smallImg(this)">
	<img src="images/asisstant.png" width="100" height="100" > 
	<div class="dropdown-content">
	<p>Entrer le gestion des assisstant</p>
 	</div>
 </div>
 </a>
</div>

<div class="dropdown">
<a href="index.php?page=3"> 
<div id="dropdown3" onmouseover="bigImg(this)" onmouseout="smallImg(this)">
<img src="images/patient.png" width="100" height="100">

 <div class="dropdown-content"><p>Entrer le gestion des patients</p>
 		 </div>
		  </div>
		  </a>
	</div>

<div class="dropdown">
<a href="index.php?page=4"> 
	<div id="dropdown4" onmouseover="bigImg(this)" onmouseout="smallImg(this)">
	<img src="images/salle.png" width="100" height="100">
 	<div class="dropdown-content"><p>Entrer le gestion des salles</p>
 		 </div>

		  </div>
		  </a>
	</div>

<div class="dropdown">
<a href="index.php?page=5"> 
<div id="dropdown5" onmouseover="bigImg(this)" onmouseout="smallImg(this)">
<img src="images/consultation.png" width="100" height="100">
<div class="dropdown-content">
	<p>Entrer le gestion des consultations</p>
 		 </div>
		  </div>
		  </a>
	</div>

</div>

<?php
if (isset($_GET['page'])) 
{
	$page = $_GET['page'];

}
else {$page=0;}

switch ($page) 
{
	
	case 1: require_once("medecin.php");break;
	case 2: require_once("asisstant.php");break;
	case 3: require_once("patient.php");break;
	case 4: require_once("salle.php");break;
	case 5: require_once("consultation.php");break;
}
?>
<br></br>
</center>

<button onclick="topFunction()" id="myBtn" title="Cliquer pour retourner au debut"> <img src="images/top.png" width="50" height="50"> </button>
<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction()
{
	if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) 
	  	{
    		mybutton.style.display = "block";
  		} 
  	else 
  		{
    		mybutton.style.display = "none";
  		}
}

function topFunction() 
{
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

var clickdown = document.getElementById("clickdown");	
window.onscroll = function() {scrollFunction()};
function bodyfunction()
{
	document.body.scrollTop = 500;
document.documentElement.scrollTop = 500;
}

function showEmail() {
  document.getElementById("mailshown").innerHTML = "rominage.115@gmail.com";
}
function showTel() {
  document.getElementById("telshown").innerHTML = "+33 7-58-09-98-98";
}

function bigImg(text) {
	if(text){
	var firstElement= text.childNodes[1];
	firstElement.style.transform = "scale(1.2)";
	var drop= text.childNodes[3];
	drop.style.visibility="visible";}
}


function smallImg(text) {
	if(text){
	var firstElement= text.childNodes[1];
	firstElement.style.transform = "scale(1)";
	var drop= text.childNodes[3];
	drop.style.visibility = "hidden";
	}
}
</script>



<footer id="footer">
	<div class="row">
		 	<div class="column" style=>
   				 <div class="left_footer">
						<div class="footer_titre">La dent d'or</div> <br>
							<div class="logo_footer"><img src="images/logo.png" width="100" height="100"></div> <br><br>
							<div class="adresse_footer"><div> 39 rue de Camille et Damien </div> <br>
														<div> 75016 Paris </div> <br> <br>
							</div>
 				</div>
 			</div>

 			<div class="column">
    			<h2>Nos slogans:</h2>
   				 <p>Dentistry dedicated to excellence. <br>
					Dentistry for people who love to smile. <br>
					Dentistry for today’s lifestyle. <br>
					Dentistry is our profession, but people are our focus. <br>
					Dentistry that makes you smile! <br>
					Dentistry with a personal touch. <br>
					Dentistry with family in mind. <br>
					Dentistry with heart.</p>
  			</div>

				<div class="column">
    			<h2>Contactez-nous:</h2>
				<div class="col">
   				<div>
				   <div class="info">
   				 	 	<a href="https://www.facebook.com/Yellow.Pig.95/" target="_blank"> <img src="images/footer/facebook.png" width="30" height="30" title="Entrer notre page Facebook" style="margin-right:8px;"></a> Facebook <br>
					</div>
					<div class="info"> 
						<a href="https://www.instagram.com/phamsontung05111995leslilas/" target="_blank"><img src="images/footer/instagram.png" width="30" height="30" title="Entrer notre page Instagram" style="margin-right:8px;"></a> Instagram<br>
					</div>
					<div class="info">
						<a href="https://twitter.com/realdonaldtrump" target="_blank"><img src="images/footer/twitter.png" width="30" height="30" title="Entrer notre page Twitter" style="margin-right:8px;"></a> Twitter<br>
   				 	</div>
					<div class="info"> 	
						<a href="https://www.whatsapp.com/download" target="_blank"><img src="images/footer/whatsapp.png" width="30" height="30" title="Connecter avec notre Whatsapp" style="margin-right:8px;"></a> Whatsapp<br> 
					</div>
				   </div>				 

   				 <div>
					<div class="info">
   				 	 	 <img src="images/footer/gmail.png" width="30" height="30" title="Voir notre Email" style="margin-right:8px;"> Email <br>
					</div> <br> rominage.115@gmail.com<br><br>
					<div class="info">
   				 	     <img src="images/footer/phone.png" width="30" height="30" title="Vore notre numéro téléphone"style="margin-right:8px;"> <span>Numéro téléphone</span> <br> 
					 </div> <br>+33 7-58-09-98-98

 		    	</div>	 	
 		    	 </div>
 		    </div>			
			<div class="column">

   			<iframe align="right" id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.597344242108!2d2.2911667152085475!3d48.88495207929011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f91aa85bfb1%3A0xca6c403c8e457b76!2sSchool%20Iris!5e0!3m2!1svi!2sfr!4v1582714615209!5m2!1svi!2sfr" width="250" height="250" frameborder="1" style="border:0" allowfullscreen></iframe> 
 			</div>
	</div>
	
</footer> 
<br>
<center>Copyright © 2020 | PHAM Son Tung - école IRIS | All rights reserved</center> 
</body>


</html>
