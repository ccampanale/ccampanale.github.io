<?
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="inventoryinsight.csv"');
$CSV	= $_POST['CSVData'];
echo $CSV;
?>