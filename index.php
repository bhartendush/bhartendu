<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$service = $_POST['service'];
$budget = $_POST['budget'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'bhartendu7285@gmail.com';//<== update the email address
$email_subject = "Project Details";
$email_body = "You have received a new message from the user $name.\n".
              "Email: $visitor_email.\n".
              "Service: $service.\n".
              "BUdget: $budget.\n".
    "Here is the message:\n $message".
    
$to = "bhartendu7285@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: index.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 

<!DOCTYPE html>
<html>
<head>

	<title>Frontend Developer and Wordpress Developer</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/styles/main.min.css" />
	<meta charset="UTF-8">
	<meta name="description" content="Bhartendu is a Full stack developer having expertise in HTML5, Css3, Sass, MDL, BEM, Nodejs, Expressjs, Mongodb, Mongoose, Gulp, Woordpress">
    <meta name="keywords" content="Wordpress developer, Nodejs developer, Angularjs developer, PSD to HTML, PSD to Wordpress developer, BEM developer, MDL developer, MONGODB developer">
    <meta name="author" content="Bhartendu Sharma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="noodp"/>
<link rel="canonical" href="http://www.bhartendu.me/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Web Software Designing, SEO and Mobile App Development Services Company" />
<meta property="og:description" content="Bhartendu designs is a leading Software development company helping clients all over the globe to make there internet presence." />
<meta property="og:url" content="http://www.bhartendu.me/" />
<meta property="og:site_name" content="Bhartendu Designs" />
</head>
<body>
<header>
<div class="container">
<a href="#" id="logo"><img src="dist/images/logo.png" align="Frontend Developer and Wordpress Developer"></a>
<nav>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="#professional">Professional</a></li>
		<li><a href="#experience">Experience</a></li>
		<li><a href="#portfolio">Portfolio</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</nav>
</div>
</header>

<section id="hero">
<div class="container">
<h2>I<span class="pink">'</span>m<br /> Bhartendu<span class="pink">.</span></h2>
	<h1>Frontend &amp; Wordpress Developer</h1>
	<img src="dist/images/me.png" alt="Frontend Developer and Wordpress Developer">
	</div>
</section>

<section id="professional">
<div class="container">
   <div id="prof-top-bx">
      <img src="dist/images/logo.png" alt="Best Frontend developer and Wordpress Developer" />
	  <h3>I am a frontend &amp; wordpress developer having more than 5 year experience. I have worked with industries top brands.</h3>
	</div>
	<div id="prof-ot">
	<h2><span>01</span> Professional</h2>
	
	 <div id="techn-lst">
	  <div class="techn-lst-in">
	    <div class="techn-nm">HTML5</div>
	    <div class="techn-bar"><span style="width: 90%"></span></div>
	  </div>
		<div class="techn-lst-in">
	    <div class="techn-nm">BEM</div>
	    <div class="techn-bar"><span style="width: 95%"></span></div>
	  </div>		
	  <div class="techn-lst-in">
	    <div class="techn-nm">CSS3</div>
	    <div class="techn-bar"><span style="width: 95%"></span></div>
	  </div>
	  <div class="techn-lst-in">
	    <div class="techn-nm">SASS</div>
	    <div class="techn-bar"><span style="width: 80%"></span></div>
	  </div>
		<div class="techn-lst-in">
	    <div class="techn-nm">MATERIAL DESIGN LITE</div>
	    <div class="techn-bar"><span style="width: 95%"></span></div>
	  </div>
	  <div class="techn-lst-in">
	    <div class="techn-nm">JAVASCRIPT</div>
	    <div class="techn-bar"><span style="width: 60%"></span></div>
	  </div>  
	  <div class="techn-lst-in">
	    <div class="techn-nm">JQUERY</div>
	    <div class="techn-bar"><span style="width: 75%"></span></div>
	  </div>
	  <div class="techn-lst-in">
	    <div class="techn-nm">NODEJS</div>
	    <div class="techn-bar"><span style="width: 75%"></span></div>
	  </div>
	  <div class="techn-lst-in">
	    <div class="techn-nm">EXPRESSJS</div>
	    <div class="techn-bar"><span style="width: 80%"></span></div>
	  </div>
	  <div class="techn-lst-in">
	    <div class="techn-nm">MONGODB</div>
	    <div class="techn-bar"><span style="width: 85%"></span></div>
	  </div>
	  <div class="techn-lst-in">
	    <div class="techn-nm">SCROLLMAGIC</div>
	    <div class="techn-bar"><span style="width: 90%"></span></div>
	  </div>
	 </div>  <!-- techn-lst  -->
	</div>
	</div> <!-- prof-ot -->
</section>
<section id="portfolio">
<div class="container">
	<h2><span>02</span> Portfolio</h2>
	<h3>My latest work</h3>
	<div id="port-ot">
	  <a href="#">
	  	<img src="dist/images/cloud.png" alt="" />
	  </a>
	  <a href="#">
	  	<img src="dist/images/cloud.png" alt="" />
	  </a>
	  <a href="#">
	  	<img src="dist/images/cloud.png" alt="" />
	  </a>
	  <a href="#">
	  	<img src="dist/images/cloud.png" alt="" />
	  </a>
	  <a href="#">
	  	<img src="dist/images/cloud.png" alt="" />
	  </a>
	  <a href="#">
	  	<img src="dist/images/cloud.png" alt="" />
	  </a>
	</div>
	<div id="portf-btn">
	<a href="#">see all</a>
	</div>
</section>
<section id="process">
   <div class="container">
	<h2><span>03</span> Process</h2>
	<ul>
	 <li>
		<div class="prc-cnt left">
		  <h3>observe</h3>
		  <h4>we observe requirements</h4>
		  <p>we observe requirements before proceeding with the projects. we have a process of having detailed discussion with the clients regarding the project and observe their views</p>
		</div>
     </li>
     <li>
		<div class="prc-cnt right">
		  <h3>wireframing</h3>
		  <h4>we observe requirements</h4>
		  <p>We wireframe based on the requirements. We make sure to follow clients guiedelines to get the humna centered designs. Our expertise designers wireframes according to the client requirements. </p>
		</div>
     </li>
     <li>
		<div class="prc-cnt left">
		  <h3>Development</h3>
		  <h4>We go with development</h4>
		  <p>We have highly experienced developer t build applications based on clients requirements. Out highly expereinced developers make sure to provide high qualoty code and use latest industry standards, so that we build an aswesome product for your business.</p>
		</div>
     </li>
     <li>
		<div class="prc-cnt right">
		  <h3>Testing</h3>
		  <h4>We do QA</h4>
		  <p>Our QA team do the unit testing and automated testing of the whole project and make sure that there are no bugs or errors on the project. Out testing phase process is three stage, which ensure us to deliver an awesome product to our client.</p>
		</div>
     </li>
     <li>
		<div class="prc-cnt left">
		  <h3>Deploy</h3>
		  <h4>Deploy the project</h4>
		  <p>After thorougly testing the application we go with the deployment process. We make sure that application is deployed successfully on the server. Our whole team make sure that everything is working fine on live server.</p>
		</div>
	</li>
	</ul>
</div>
</section>

<section id="contact">
  <div class="container">
   <div class="contc-ot">
   <div class="cont-lt">
	 <h4>Contact</h4>
	 <p>Ph No: +91-835-102-5668 </p>
	 <p>sales@bhartendu.me</p>
	</div>
   <div class="cont-rt">
	   <form method="POST" name="myform" action="form.php">
	   	  <input type="text" name="name" placeholder="Name" />
	   	  <input type="email" name="email" placeholder="Email" />
	   	  <select name="service">
	   	  	<option value="webdesign">Websdesign</option>
	   	  	<option value="websitedevelopment">Website development</option>
	   	  	<option value="wordpressdevelopment">Wordpress Development</option>
	   	  	<option value="nodejs">Nodejs Development</option>
	   	  </select>
	   	  <select name="budget">
	   	  	<option value="$500">Less than $500</option>
	   	  	<option value="$500-$1000">$500 - $1000</option>
	   	  	<option value="$1000-$2000">$1000 - $2000</option>
	   	  	<option value="$2000-$3000">$2000 - $3000</option>
	   	  	<option value="above $3000">Above $3000</option>
	   	  </select>
	   	  <textarea name="message" placeholder="Message"></textarea>
	   	  <input type="submit" name="" value="Submit" />
	   </form>
	</div>
	</div>
  </div>
</section>
</div>  <!-- container -->
<footer>
	<copy>&copy; 2017 bhartendu.me</copy>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="src/scripts/gen_validatorv31.js" ></script>
<script type="text/javascript" src="src/scripts/script.js" ></script>
<script type="text/javascript">
var frmvalidator  = new Validator("myform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>

<!-- Google analytics  -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62309348-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>