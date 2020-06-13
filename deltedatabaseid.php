<?php
$servername = "localhost";
$user  = "root";
$password = "";
$dbname = "blogera";

// Create connection
$conn = mysqli_connect($servername, $user, $password,$dbname);

// Check connection
if ($conn) {
if (isset($_POST['delete'])) {
    $id=$_POST['id'];
    $sql="DELETE FROM demo
    WHERE id = $id ";
$result = mysqli_query($conn,$sql);    
if ($result) {
    echo "delete successfuul";
}
else {
    echo "not delte wrong";
}

}
// if (mysqli_num_rows($result)>0) {

// // print_r(mysqli_fetch_assoc($result));
// $x=mysqli_fetch_assoc($result);
// echo $x["id"];
// echo $x["username"];
// echo $x["password"] .'has joined on'. ('date');
// echo "<br>";

// }
// }

}
?>