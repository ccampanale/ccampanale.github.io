<?PHP

if(isset($_post)){
	$sql = 'INSERT INTO `vicsters_vicsterscafe`.`hondata` (`sid`, `data`) VALUES (NULL, $_post);';
	$result = mysql_query($sql);
	echo($result);
}
?>