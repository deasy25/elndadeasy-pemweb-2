<!DOCTYPE html>
<html>
<body>


<?php

//Fungsi Sort ($array)
echo "<h3> Fungsi Sort Array </h3>";
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';
sort($ar_buah);
echo '<hr/>';
echo '<ol>';
foreach($ar_buah as $k =>$v){
echo '<li>'.$k.' - ' . $v .'</li>';
}
echo '</ol>';

//Fungsi Array Pop
echo "<h3> Fungsi Array Pop </h3>";
$tims = ["Erwin","Heru","Ali","Zaki"];
array_pop($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}

//Fungsi Array push
echo "<h3> Fungsi Array Push </h3>";
$tims = ["Erwin","Heru","Ali","Zaki"];
array_push($tims,"Wati");
foreach($tims as $person){
    echo $person. '<br/>';
}

//Fungsi Array Shift
echo "<h3> Fungsi Array Shift </h3>";
$tims = ["Erwin","Heru","Ali","Zaki"];
array_shift($tims,);
foreach($tims as $person){
    echo $person. '<br/>';
}

//Fungsi Array Unshift 
echo "<h3> Fungsi Array Unshift </h3>";
$tims = ["Erwin","Heru","Ali","Zaki"];
array_unshift($tims,"Joko","Wati");
foreach($tims as $person){
    echo $person. '<br/>';
}

?>
</body>
</html>