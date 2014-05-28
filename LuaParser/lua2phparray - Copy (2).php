<?php
include("header.php");

$svfile	= $_FILES['svfile'];
$svdata	= $_POST['svdata'];
#print_r($_POST);
#print_r($_FILES);


if(is_string($svdata))
{
	echo "FoundData:\n";
}
if(is_file($svfile["tmp_name"]))
{
	#echo "FoundFile:"."<br/>";
	#echo $svfile["tmp_name"]."<br/>";
	$file = file_get_contents($svfile['tmp_name']); 
	#echo $file;
	#$luaArray = makePhpArray($file);
	#print_r($luaArray);
	#echo "<br/>";
	#echo $luaArray['Data'];
	#showLuaTable($luaArray);

    $array = split("=", $file);
    #print_r($array);
    $CSVString = getDataFromLua($array);
    #echo "<br/>";
    #echo "<br/>";
    #echo "CSVData:".$CSVString[0];
    echo '<form action="./dlcsv.php" method="POST" id="dlcsvform">';
    echo '<a href="javascript:{}" onclick="document.getElementById(\'dlcsvform\').submit(); return false;">inventoryinsight.csv</a>';
    echo "CollectedDate:".cleanCollectedDate($CSVString[1]);
    echo "<br/>";
    echo "<br/>";
    $CSVString = processCSVVar($CSVString[0]);
    echo "<br/>";
    echo "<br/>";
    echo '<input name="CSVData" type="hidden" value="'.$CSVString.'">';
    echo '</form>';
}


include("footer.php");

function getDataFromLua($array){
    $found = false;
    if(is_array($array)){
        foreach ($array as $key => $value) {
            #echo "Key:".$key."Value:".$value."<br/>";
            if(strpos($value, '["CSVData"]') !== FALSE){ 
                $found = true;
                $data = $array[$key+2];
                $date = $array[$key+3];
                return array( $data, $date );
            }
        }
    }
    return $found;   
}

function processCSVVar($var){
    $newCSV = "";
    if(is_string($var)){
        echo '<center><table style="width:1200px;border:1px solid black;font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;font-size: 12px;text-align: left;border-collapse: collapse;margin: 20px;">';
        $array = split("\n", $var);
        foreach ($array as $key => $value) {
            if(strpos($value, ']]') == FALSE){ 
                if(strpos($value, '[[') !== FALSE){ 
                    $line = str_replace("[[","",$value);
                    $newCSV = $newCSV.$line."\n";
                    echo '<tr>';
                    $line = split(',', $line);
                    foreach ($line as $key2 => $value2) {
                        echo '<th>'.$value2.'</th>';
                    }
                    echo '</tr>';
                }else{
                    $newCSV = $newCSV.$value."\n";
                    echo '<tr>';
                    $line = split(',', $value);
                    foreach ($line as $key2 => $value2) {
                        echo '<td>'.$value2.'</td>';
                    }
                }
            }else{
                $removeme = substr($value, strpos($value, ']]'));
                $line = str_replace($removeme,"",$value);
                $newCSV = $newCSV.$line."\n";
                echo '<tr>';
                $line = split(',', $line);
                foreach ($line as $key2 => $value2) {
                    echo '<td>'.$value2.'</td>';
                }
                echo '</tr>';
                echo '</table></center>';
                return $newCSV;
            }
        }  
    }
    return $newCSV;
}

function cleanCollectedDate($var){
    if(is_string($var)){
        $var = split(',', $var);
        return $var[0];  
    }
    return false;
}

?>