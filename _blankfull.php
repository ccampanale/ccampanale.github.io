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

<!-- topPan-->
<div id="topPan">
	<h1>Vicster's Cafe</h1>
	<a href="index.html"><img src="images/logo.gif" title="Vicster's Cafe" alt="Vicster's Cafe" width="372" height="91" border="0" /></a>
	<ul>
		<li><span>Home</span></li>
		<li><a href="updates.html">Updates</a></li>
		<li><a href="underconstruction.html">TF2</a></li>
		<li><a href="links.html">Links</a></li>
		<li><a href="/forums">Forums</a></li>
		<li><a href="contact.html">Contact</a></li>
		<li class="contact"><a href="javascript:login('show');" class="contact">Login</a></li>
	</ul>
</div>
<!--topPan close-->
<!--bobyPan -->
<div id="bodyPan">
<!--leftPan -->
<!--leftPan close -->
  <!--rightPan -->
  <div id="rightPan" style=" width:700px; ">
    <p class="paddingtop">&nbsp;</p>
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
