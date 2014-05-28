
<?PHP
include("header.php");
?>
<body>
<center>
<p>Upload your InventoryInsight.lua file to pull the exported CSV data:

</p><form action="./lua2phparray.php" method="POST" enctype="multipart/form-data">

<p><table cellpadding="4" cellspacing="0" width="600">

<tbody><tr>
<td>either&nbsp;upload&nbsp;a&nbsp;file:</td>
<td width="100%"><input type="file" name="svfile" style="width: 100%;"></td>
<td><input type="submit" value="upload">
</td></tr>

</tbody></table>

</p></form>

</center>
</body>
<?PHP
include("footer.php");
?>
