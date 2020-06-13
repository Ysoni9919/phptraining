<?php

$pass="password";
$x=password_hash($pass,PASSWORD_BCRYPT);
echo $x;
// echo strlen($x);
if (password_verify('password',$x)) {
 echo "<br>";
    echo "password correct";
}



?>