<?PHP
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);

// Is someone logged in?
if ($user->data['user_id'] != ANONYMOUS && isset($_GET['sid']) && !is_array($_GET['sid']) && $_GET['sid'] === $user->session_id)
{
	$logged = true;
}

// Basic parameter data
$id 	= request_var('i', '');
$view	= request_var('view', '');
$result = '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<form name="login" action="/handler.php?mode=login" method="post">
        <center>Username:</center>
        <center><input name="username" id="username" size="14" /></center>
        <center>Password:</center>
        <center><input name="password" type="password" id="password" size="14" /></center>
        <center><input type="submit" name="login" value="Login" /></center>
        <input type="hidden" name="redirect" value="www.vicsterscafe.com/index.php" />
</form>
<center><p class="more"><a href="javascript:login('hide');">close</a></p></center> <!-- Closes the box-->
</div> 
<!--End login box-->

<!-- topPan-->
<div id="topPan">
	<h1>Vicster's Cafe</h1>
	<a href="index.html"><img src="images/logo.gif" title="Vicster's Cafe" alt="Vicster's Cafe" width="372" height="91" border="0" /></a>
	<ul>
		<li><? if($view=='')echo'<span>'; ?><a href="<? echo(append_sid("index.php?")); ?>">Home</a><? if($view=='')echo'</span>';?></li>
		<li><?  if($view=='updates')echo'<span>'; ?><a href="<? echo(append_sid("index.php?view=news"));?>">News</a><? if($view=='news')echo'</span>';?></li>
		<li><?  if($view=='links')echo'<span>'; ?><a href="<? echo(append_sid("index.php?view=links"));?>">Links</a><? if($view=='links')echo'</span>';?></li>
		<li><a href="<? echo(append_sid("/forums")); ?>">Forums</a></li>
		<li><? if($view=='contact')echo'<span>'; ?><a href="<? echo(append_sid("index.php?view=contact"));?>">Contact</a><? if($view=='contact')echo'</span>';?></li>
        <? if ($logged){?> 
        	<li class="contact"><a href="/handler.php?sid=<? echo($_GET['sid']);?>&mode=logout&redirect=www.vicsterscafe.com/index.php" class="contact"><? echo($user->data['username']); ?> 
			<? }else{ ?> 
			<li class="contact"><a href="javascript:login('show');" class="contact"> Login 
		<? } ?> 
        </li></a>
	</ul>
</div>
<!--topPan close-->