<?PHP
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($phpbb_root_path . 'common.' . $phpEx);
require($phpbb_root_path . 'includes/functions_user.' . $phpEx);
require($phpbb_root_path . 'includes/functions_module.' . $phpEx);

// Basic parameter data
$id 	= request_var('i', '');
$mode	= request_var('mode', '');
$result = '';

if ($mode == 'login' || $mode == 'logout' || $mode == 'confirm')
{
	define('IN_LOGIN', true);
}

// Start session management
$user->session_begin();
$auth->acl($user->data);

// Basic "global" modes
switch ($mode)
{
	case 'login':
		if ($user->data['is_registered'])
		{
			redirect(append_sid("index.$phpEx"));
		}

		$result = login_box_local(request_var('redirect', "index.$phpEx"));
		meta_refresh(3, append_sid("index.$phpEx"));
	break;

	case 'logout':
		if ($user->data['user_id'] != ANONYMOUS && isset($_GET['sid']) && !is_array($_GET['sid']) && $_GET['sid'] === $user->session_id)
		{
			$user->session_kill();
			$user->session_begin();
			$message = $user->lang['LOGOUT_REDIRECT'];
		}
		else
		{
			$message = ($user->data['user_id'] == ANONYMOUS) ? $user->lang['LOGOUT_REDIRECT'] : $user->lang['LOGOUT_FAILED'];
		}
		meta_refresh(3, append_sid("index.$phpEx"));

		$message = $message . '<br /><br />' . sprintf($user->lang['RETURN_INDEX'], '<a href="' . append_sid("index.$phpEx") . '">', '</a> ');
		trigger_error($message);

	break;
}

/**
* Generate login box or verify password
*/
function login_box_local($redirect = '', $l_explain = '', $l_success = '', $admin = false, $s_display = true)
{
	global $db, $user, $template, $auth, $phpEx, $phpbb_root_path, $config;

	$err = '';

	// Make sure user->setup() has been called
	if (empty($user->lang))
	{
		$user->setup();
	}

	if (isset($_POST['login']))
	{
		// Get credential
		$password	= request_var('password', '', true);

		$username	= request_var('username', '', true);
		$autologin	= (!empty($_POST['autologin'])) ? true : false;
		$viewonline = (!empty($_POST['viewonline'])) ? 0 : 1;
		$admin 		= ($admin) ? 1 : 0;
		$viewonline = ($admin) ? $user->data['session_viewonline'] : $viewonline;

		// If authentication is successful we redirect user to previous page
		$result = $auth->login($username, $password, $autologin, $viewonline, $admin);
		// Something failed, determine what...
		if ($result['status'] == LOGIN_BREAK)
		{
			trigger_error($result['error_msg']);
		}

		// Special cases... determine
		switch ($result['status'])
		{
			case LOGIN_ERROR_ATTEMPTS:

				// Show confirm image
				$sql = 'DELETE FROM ' . CONFIRM_TABLE . "
					WHERE session_id = '" . $db->sql_escape($user->session_id) . "'
						AND confirm_type = " . CONFIRM_LOGIN;
				$db->sql_query($sql);

				// Generate code
				$code = gen_rand_string(mt_rand(5, 8));
				$confirm_id = md5(unique_id($user->ip));
				$seed = hexdec(substr(unique_id(), 4, 10));

				// compute $seed % 0x7fffffff
				$seed -= 0x7fffffff * floor($seed / 0x7fffffff);

				$sql = 'INSERT INTO ' . CONFIRM_TABLE . ' ' . $db->sql_build_array('INSERT', array(
					'confirm_id'	=> (string) $confirm_id,
					'session_id'	=> (string) $user->session_id,
					'confirm_type'	=> (int) CONFIRM_LOGIN,
					'code'			=> (string) $code,
					'seed'			=> (int) $seed)
				);
				$db->sql_query($sql);

				$template->assign_vars(array(
					'S_CONFIRM_CODE'			=> true,
					'CONFIRM_ID'				=> $confirm_id,
					'CONFIRM_IMAGE'				=> '<img src="' . append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=confirm&amp;id=' . $confirm_id . '&amp;type=' . CONFIRM_LOGIN) . '" alt="" title="" />',
					'L_LOGIN_CONFIRM_EXPLAIN'	=> sprintf($user->lang['LOGIN_CONFIRM_EXPLAIN'], '<a href="mailto:' . htmlspecialchars($config['board_contact']) . '">', '</a>'),
				));

				$err = $user->lang[$result['error_msg']];

			break;

			case LOGIN_ERROR_PASSWORD_CONVERT:
				$err = sprintf(
					$user->lang[$result['error_msg']],
					($config['email_enable']) ? '<a href="' . append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=sendpassword') . '">' : '',
					($config['email_enable']) ? '</a>' : '',
					($config['board_contact']) ? '<a href="mailto:' . htmlspecialchars($config['board_contact']) . '">' : '',
					($config['board_contact']) ? '</a>' : ''
				);
			break;

			// Username, password, etc...
			default:
				$err = $user->lang[$result['error_msg']];

				// Assign admin contact to some error messages
				if ($result['error_msg'] == 'LOGIN_ERROR_USERNAME' || $result['error_msg'] == 'LOGIN_ERROR_PASSWORD')
				{
					$err = (!$config['board_contact']) ? sprintf($user->lang[$result['error_msg']], '', '') : sprintf($user->lang[$result['error_msg']], '<a href="mailto:' . htmlspecialchars($config['board_contact']) . '">', '</a>');
				}

			break;
		}
	}

	if (!$redirect)
	{
		// We just use what the session code determined...
		// If we are not within the admin directory we use the page dir...
		$redirect = '';
		$redirect .= 'html://www.vicsterscafe.com/index.php';
	}

	// Assign credential for username/password pair
	$credential = ($admin) ? md5(unique_id()) : false;

	$s_hidden_fields = array(
		'redirect'	=> $redirect,
		'sid'		=> $user->session_id,
	);

	$s_hidden_fields = build_hidden_fields($s_hidden_fields);
	
	return $result;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="3;url=http://www.vicsterscafe.com/index.php?sid=<? echo($user->session_id); ?>" />
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
    <p class="paddingtop"><? if($result['status'] == 3){ echo"Login Successful! You are now being redirected to the homepage."; }else{ echo"Login Unsuccessful! Access Denied!"; } ?></p>
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
