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
		<li><a href="index.html">Home</a></li>
		<li><a href="updates.html">Updates</a></li>
		<li><a href="underconstruction.html">TF2</a></li>
		<li><span>Links</span></li>
		<li><a href="/forums">Forums</a></li>
		<li><a href="contact.html">Contact</a></li>
		<li class="contact"><a href="javascript:login('show');" class="contact">Login</a></li>
	</ul>
</div>
<!--topPan close-->
<!--bobyPan -->
<div id="bodyPan">
<!--leftPan -->
<div id="leftPan" style="height:600px;">
	<h4>Links<br />
	<span>sites of interest</span></h4>
	<div id="leftworkPan">
		<ul>
			<li class="push">&nbsp;</li>
			<li> <img src="images/links_steam.jpg" alt="" width="109" height="105" align="top" /><a href="http://www.steampowered.com" target="_blank">visit site</a></li>	
			<li class="push">&nbsp;</li>			
			<li> <img src="images/links_toms.jpg" alt="" width="109" height="105" align="top" /><a href="http://www.tomshardware.com" target="_blank">visit site</a></li>
			<li class="push">&nbsp;</li>
			<li><img src="images/links_di.jpg" alt="" width="109" height="105" align="top" /><a href="http://www.di.fm" target="_blank">visit site</a></li>
			<li class="push">&nbsp;</li>
			<li> <img src="images/links_newegg.jpg" alt="" width="109" height="105" align="top" /><a href="http://www.newegg.com" target="_blank">visit site</a></li>
		</ul>
	</div>
  </div>
  <!--leftPan close -->
  <!--rightPan -->
  <div id="rightPan" style="height:775px;"> <!--use a multiplyer to determine the correct height with php based on the number of links to display-->
    <p class="toppush">
	<span class="bigsize">&ldquo;</span>Steam is a pc game distribution program in which game accounts are stored online and can be accessed and installed on any computer.<span class="bigsize">&quot;</span>
	<p class="name">- Vicster</p>
	<p class="dotline">&nbsp;</p>
	<p class="nexttopic">
	<span class="bigsize">&ldquo;</span>Tom's Hardware is the one stop shop for previews, reviews, and benchmarks for all of your lastest and greatest computer hardware.<span class="bigsize">&quot;</span>
	<p class="name">- Vicster</p>
	<p class="dotline">&nbsp;</p>
	<p class="nexttopic">
	<span class="bigsize">&ldquo;</span>DI.fm is a great source of internet radio for many different tastes of music. Playing some of the best music from multiple generes of music.<span class="bigsize">&quot;</span>
	<p class="name">- Vicster</p>
	<p class="dotline">&nbsp;</p>
	<p class="nexttopic">
	<span class="bigsize">&ldquo;</span>Newegg is in my opinion the best priced, quickest to process, and highest quality internet technology store with the biggest selection.<span class="bigsize">&quot;</span>
	<p class="name">- Vicster</p>
	<p class="dotline">&nbsp;</p>
	<p class="nexttopic">
	</p>
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
  <p>� vicsters cafe all right reaserved</p>
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
