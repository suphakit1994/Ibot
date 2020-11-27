<?php 

$data= getselect($conn);
$arrlength = count($data);
            for($i=0;$i<$arrlength; $i++){
            
echo $data[$i]["name"]; 
echo $data[$i]["ID"];
echo $data[$i]["user"];
}
?>