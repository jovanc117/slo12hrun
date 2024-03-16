<?php

mysql_connect('localhost', 'pariza57_slo12', 'r!4Zd4rnwF4U');
mysql_select_db('pariza57_slo12run');
$result = mysql_query('SELECT * FROM `tekmovalci`');

$Result = "<?xml version='1.0' encoding='utf-8'?>\n<tekmovalci>\n";

while($data = mysql_fetch_assoc($result)) {
  $Result .= " <tekmovalec>\n";
  foreach($data as $key => $value) {

    $Result .=  "  <$key>$value</$key>\n";
  }
    $Result .= " </tekmovalec>\n";
}
$Result .= "</tekmovalci>\n";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Tekmovalci.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
echo  $Result;

?>