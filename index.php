<?php
//How to convert string into array
$data="My name is suman kumar"; 
$my=explode(" ", $data);
print_r($my);
echo "<br>";
echo $my[1];
?>

<hr>

<?php
//How to convert array into string
$data=array("neha","Dolly","Micku","Juhi","Kishu");
$my2=implode(",", $data);
echo $my2;
?>
