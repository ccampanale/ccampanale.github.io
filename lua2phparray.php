<?php
include("header.php");

$svfile	= $_FILES['svfile'];

if(is_file($svfile["tmp_name"]))
{
	$file = file_get_contents($svfile['tmp_name']); 
    if(strpos($file, 'InventoryInsight_Settings') !== FALSE){
        $array = split("=", $file);
        $CSVString = getDataFromLua($file);
        echo '<div id="in2">';
        echo '<form action="./dlcsv.php" method="POST" id="dlcsvform">';
        echo "CollectedDate:".cleanCollectedDate($CSVString[1])."<br/>";
        echo '<a href="javascript:{}" onclick="document.getElementById(\'dlcsvform\').submit(); return false;">inventoryinsight.csv</a>';
        echo "<br/>";
        echo "<br/>";
        $CSVString = processCSVVar($CSVString[0]);
        echo "<br/>";
        echo "<br/>";
        echo '<input name="CSVData" type="hidden" value="'.$CSVString.'">';
        echo '</form>';
        echo '</div>';
    }else{
        echo '<div id="midpane">';
        echo '<center>';
        echo '<span>Invalid file... Please go back and upload your InventoryInsight.lua file.</span>';
        echo '<a href="./parser.php"><--BACK</a>';
        echo '</center>';
        echo '</div>';
    }
}

include("footer.php");

function getDataFromLua($string){
    $foundData = false;
    $foundDate = false;
    $data = "";
    $date = "";
    if(is_string($string)){
        $dataStartPos = strpos($string, '["Data"]'); 
        $dataEndPos = strpos($string, ']]');
        $dataLength = $dataEndPos - $dataStartPos;
        $data = substr($string, $dataStartPos, $dataLength);
        $dataInPos = strpos($data, '[[');     
        $data = substr($data, $dataInPos);
        $foundData = true;

        $datePos = strpos($string, '["CollectedDate"]');
        $date = substr($string, $datePos+20, 8);
        $foundDate = true;

        return array( $data, $date ); 
    }
    return false;   
}

function processCSVVar($var){
    $newCSV = "";
    if(is_string($var)){
        echo '<center><table class="in2" style="width:1200px;">';
        $array = split("\n", $var);
        foreach ($array as $key => $value) {
            if(strpos($value, ']]') == FALSE){ 
                if(strpos($value, '[[') !== FALSE){ 
                    $line = str_replace("[[","",$value);
                    $newCSV = $newCSV.$line."\n";
                    echo '<thead>';
                    echo '<tr>';
                    $line = split(',', $line);
                    foreach ($line as $key2 => $value2) {
                        echo '<th>'.$value2.'</th>';
                    }
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                }else{
                    $newCSV = $newCSV.$value."\n";
                    echo '<tr>';
                    $line = split(',', $value);
                    foreach ($line as $key2 => $value2) {
                        echo '<td>'.$value2.'</td>';
                    }
                    echo '</tr>';
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
    echo '</tbody>';
    echo '</table></center>';
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