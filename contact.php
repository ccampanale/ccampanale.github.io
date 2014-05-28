<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>|- Vicster's Cafe -></title>
<link href="style.css" rel="stylesheet" type="text/css" />
  <script language="JavaScript" type="text/javascript">
  function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.visibility="visible"; /* If the function is called with the variable 'show', show the login box */
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.visibility="hidden"; /* If the function is called with the variable 'hide', hide the login box */
		document.getElementById('constructionbox').style.visibility="hidden"; /* If the function is called with the variable 'hide', hide the login box */
    }
  }
  </script>
</head>

<body>
 <!--Start login box-->
<div id="popupbox">
<form name="login" action="" method="post">
<center>Username:</center>
<center><input name="username" size="14" /></center>
<center>Password:</center>
<center><input name="password" type="password" size="14" /></center>
<center><input type="submit" name="submit" value="login" /></center>
</form>
<br />
<center><p class="more"><a href="javascript:login('hide');">close</a></p></center> <!-- Closes the box-->
</div> 
<!--End login box-->

<!--UNDER CONSTRUCTION-->
<div id="constructionbox">
<center><p>This page is still under major consctuion; components may not work as intended. <br>For support please contact the webmaster: <span class="more"><a href="mailto:vicster@vicsterscafe.com">vicster@vicsterscafe.com</a></span></p></center>
<center><p class="more"><a href="javascript:login('hide');">close</a></p></center> <!-- Closes the box-->
</div> 
<!--END UNDER CONSTRUCTION-->

<!-- topPan-->
<div id="topPan">
	<h1>Vicster's Cafe</h1>
	<a href="index.html"><img src="images/logo.gif" title="Vicster's Cafe" alt="Vicster's Cafe" width="372" height="91" border="0" /></a>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="updates.html">Updates</a></li>
		<li><a href="underconstruction.html">TF2</a></li>
		<li><a href="links.html">Links</a></li>
		<li><a href="/forums">Forums</a></li>
		<li><span>Contact</span></li>
		<li class="contact"><a href="javascript:login('show');" class="contact">Login</a></li>
	</ul>
</div>
<!--topPan close-->
<!--bobyPan -->
<div id="bodyPan">
<!--leftPan -->
<div id="leftPan" style="height:600px;">
	<h3>Contact Form</h3>
	<p>Welcome to the contact page. Please feel free to send me suggestions and/or questions via the provided form to the right. Remember to include the asterisked fields in order for your comment to be processed correctly.</p>
	<p>You can also send me an email by clicking on the provided link below. Please refrain from sending comments via the form and an email at the same time as it may be filtered as spam and your email/ip adress banned from connecting to the parts of the site. NOTE:If you get mistakenly banned but still have access to the forums, contact me there and I will fix the problem. Thanks!</p>
	<p class="more" style="margin:0 0 13px 90px;"><a href="mailto:vicster@vicsterscafe.com">vicster@vicsterscafe.com</a></p>
  </div>
  <!--leftPan close -->
  <!--rightPan -->
  <div id="rightPan" style="height:675px;">
	<form name="login" action="" method="post" style="padding:25px 63px 22px 52px;">
		<br>Name:<input name="name" size="29" style="text-align: right;"/>
		<br>Email:<input name="email" size="29" />
		<br>Subject:<input name="subject" size="27" />
		<br>Code:<input name="code" size="29" />
		<br>Comment:<textarea name="email" rows="15" cols="30"></textarea>
		<br><input type="submit" name="submit" value="Submit" />
	</form>
  </div>
</div>
<!--bodyPan close -->
<!--mainfooter body-->
<div id="mainfooterbody">
  <div id="footerPan">
  	<div id="footerPanleft">
    <a href="index.html"><img src="images/logo2.jpg" title="Vicster's Cafe" alt="Vicster's Cafe" width="260" height="35" border="0" /></a></div>
	<ul>
  <li><a href="index.html">Home </a>| </li>
  <li><a href="updates.html">Updates</a> | </li>
  <li><a href="underconstruction.html">TF2</a> | </li>
  <li><a href="links.html">Links </a>| </li>
  <li><a href="/forums">Forums</a> | </li>
  <li><a href="contact.html">Contact </a> </li>
  </ul>	
  <p>© vicsters cafe all right reaserved</p>
  <ul class="templateworld">
  	<li>Design By:</li>
	<li><a href="http://www.templateworld.com" target="_blank">Template World</a></li>
	<li>Modified By:</li>
	<li><a href="http://www.vicsterscafe.net" target="_blank">Vicster</a></li>
  </ul>
  </div>
</div>
</body>
</html>
