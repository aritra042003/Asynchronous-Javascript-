<?php
$state=$_GET['state'];
$c1=array('Patna');
$c2=array('Kolkata','Durgapur','Basirhat');
$c3=array('Bhopal','Indore','Jabalpur');
$c4=array('Kanpur','Agra','Lucknow');
if($state=="Bihar"){
    foreach($c1 as $c)
    echo "<option>$c</option>";

}
elseif($state=="West Bengal"){
    foreach($c2 as $c)
    echo "<option>$c</option>";
}
elseif($state=="Madhya Pradesh"){
    foreach($c3 as $c)
    echo "<option>$c</option>";
}
elseif($state=="Uttar Pradesh"){
    foreach($c4 as $c)
    echo "<option>$c</option>";
}
else
  echo "<option>First Select State</option>"
?>