                                  <!-- funtion 


1 inbuilt function
2  built function


1 inbuilt function=  to reduce complecity of code and this method is called modulerity ,  too reuses of code,  bettinga in managing a code.

example
print();
print_r(); //human readable format


2 built funtion  =  

1 take nothing ,return nothing
2 take nothing return something
3 take something return nothing
4 take something return something

Syntax  1-->
<?php
function hello(){
echo "hello world ";

}

hello();
?>



<!-- 2 -->

<?php

function hell(){
echo "hello wrold ";
echo "5";
return 10;

}

$x=hell();
echo $x;


?>



<!-- 3 -->

<?php

function hel($x){
echo "hello wrold $x";
echo "5";
}

hell("vivek");



?>



<!-- 4 -->

<?php

function he($x){
echo "hello wrold $x";
echo "5";
return $x."roy";
}

$x=hel("vivek");
echo $x;


?>