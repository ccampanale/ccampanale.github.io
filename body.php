<?php
// Basic parameter data
$id 	= request_var('i', '');
$view	= request_var('view', '');
$result = '';

switch ($view)
{
	case 'news':
	?>
    <!--bobyPan -->
<div id="bodyPan">
	<!--leftPan -->
	<div id="leftPan">
		<h2>News<br />
		<span>here and now</span></h2>
		<div id="updatesPan">
			<ul>
				<li style="width:235px;"> <img src="images/esoui-logo.png" alt="" style="width:235px;height:95px;" align="top" /><a href="./parser.php">view story</a></li>	
			</ul>
		</div>
	</div>
		<!--leftPan close -->
		<!--rightPan -->
		<div id="rightPan">
			<p class="toppush">
			<span class="bigsize">&ldquo;</span>
				The CSV export parser for my ESO UI Addon Inventory Insight can be found by following the 'view story' link on the left. 
			<span class="bigsize">&quot;</span>	    
			<p class="name">- Vicster</p>
			<p class="dotline">&nbsp;</p>
			<p class="nexttopic"></p>
		</div>
	</div>
</div>
<!--bodyPan close -->
    <?
		break;
		
	case 'construction':
	?>
<!--bobyPan -->
<div id="bodyPan">
<!--leftPan -->
<div id="leftPan">
  <p class="paddingtop">This page is currently under construction.</p>
  <p class="paddingtop">	Pardon our dust.</p>
</div>
  <!--leftPan close -->
  <!--rightPan -->
  <div id="rightPan">
  <p class="paddingtop"><span class="bigsize">&ldquo;</span>Never less idle than when wholly idle, nor less alone than when wholly alone.<span class="bigsize">&quot;</span></p>
	<p class="name">- Cicero 106 - 43 BC</p>
	<p class="dotline">&nbsp;</p>
  </div>
</div>
<!--bodyPan close -->
    <?
		break;
		
	default:
	
	case 'links':
	?>
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
    <?
		break;
		
	case 'contact':
	?>
<!--UNDER CONSTRUCTION-->
<div id="constructionbox">
<center><p>This page is still under major consctuion; components may not work as intended. <br>For support please contact the webmaster: <span class="more"><a href="mailto:vicster@vicsterscafe.com">vicster@vicsterscafe.com</a></span></p></center>
<center><p class="more"><a href="javascript:login('hide');">close</a></p></center> <!-- Closes the box-->
</div> 
<!--END UNDER CONSTRUCTION-->
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
    <?
		break;
		
	default:
		?>
<!--bobyPan -->
<div id="bodyPan">
	<!--leftPan -->
	<div id="leftPan">
		<h4 class="beatport">Beatport<br />
		<span>my latest tracks</span></h4>
		<div id="leftworkPan">
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F35667804&amp;auto_play=false&amp;show_artwork=true&amp;color=ff7700"></iframe>
			<p>&nbsp;</p>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F35510799&amp;auto_play=false&amp;show_artwork=true&amp;color=ff7700"></iframe>
			<p>&nbsp;</p>
			<a class="twitter-timeline" href="https://twitter.com/DJVicster" data-widget-id="471046120404045824" width="275" height="250">Tweets by @DJVicster</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
		</div>
	</div>
	<!--leftPan close -->
	<!--rightPan -->
	<div id="rightPan" style="height:800px;">
		<p class="paddingtop"></p>
			<h2 style="background:url(images/esoui-logo_small.png) 0 0 no-repeat #fff;">ESO Addons<br />
			<span>my addon projects</span></h2>
			<p class="bottompadding">Go check out my addon development projects in my author portal over on ESOUI!</p>
			<p class="more"><a href="http://www.esoui.com/portal.php?&uid=3930" style="width:125px;">Vicster's Portal</a></p>
		<p class="dotline">&nbsp;</p>
			<h2>Forums<br />
			<span>community connection</span></h2>
			<p class="bottompadding">Welcome to Vicster's Cafe! Please feel free to create an account on the forums to become a part of the community!</p>
			<p class="more"><a href="/forums">....Continue</a></p>
	</div>
</div>
<!--bodyPan close -->
        <?
	break;
}


?>
