<?php

setcookie('username','akash@122',time()+600);
setcookie('password','12345',time()+600);
if ($_COOKIE['user']) {
    echo "thankyou for restun my site";
}
setcookie('username','akash@122',time()-600);
setcookie('password','12345',time()-600);

// go to inspect applicatioon and storage and cookies
?>