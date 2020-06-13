<?php


echo time();
print_r(date(time()));
echo "<br>";
?>
<?php
 echo "this is da";
$date=date('M\n',time());
echo "this is data ".$date;
$date=getdate();
print_r($date);
echo $date['month']."<br>";
echo $date['weekday']."<br>";
echo $date['year']."<br>";
echo $date['month']."<br>";
echo $date['mday']."<br>";
echo $date['hours']."<br>";
echo $date['minutes']."<br>";
echo $date['seconds']."<br>";

?>