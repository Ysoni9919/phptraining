<?php

$servername = "localhost";
$user  = "root";
$password = "";
$dbname = "blogera";

// Create connection
$conn = mysqli_connect($servername, $user, $password,$dbname);
// Check connection
if ($conn) {
if (isset($_POST['login'])) {
    $user=$_POST['username'];
    $password=$_POST['password'];
$sql="SELECT 'password' FROM demo";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)) {
    $x=mysqli_fetch_assoc($result);
    if ($x['password']===$password) {
    echo "you have successful";
    }else{
        echo "you wron";
    }}
    else {
        echo "you want wrong";
    }
}
}


// $conn = mysqli_connect($servername, $user, $password,$dbname);
// // Check connection
// if ($conn) {
// if (isset($_POST['submit'])) {
//     $user=$_POST['username'];
//     $password=$_POST['password'];
//     $gmail=$_POST['email'];
//     $sql="INSERT INTO demo (username,password,gmail)
//     VALUES ('$user','$password','$gmail')";
// $result = mysqli_query($conn,$sql);    
// if ($result) {
//     echo "you enter a successfuul";
// }
// else {
//     echo "something weint wrong";
// }
// }
// }

// // Check DELETE
// if ($conn) {
//     if(isset($_POST['delete'])) {
//            $id=$_POST["id"];
//            $sql="DELETE FROM demo
//            WHERE id = $id ";
//        $result = mysqli_query($conn,$sql);    
//        if ($result) {
//            echo "delete successfuul";
//        }
//        else {
// echo "you enter wrong";
// include "hello.php";

//         //    header("Location:view.php");
//        }
//    }
//    }
  

// // Check DELETE
// if ($conn) {
//     if(isset($_POST['update'])) {
//         $id=$_POST["id"];
//         $user=$_POST["username"];
//         $password=$_POST['password'];
//            $gmail=$_POST["email"];
//            $sql="UPDATE demo SET username='$user',password='$password',gmail='$gmail' WHERE id ='$id'";
//        $result = mysqli_query($conn,$sql);    
//        if ($result) {
//            echo "update successfuul";
//        }
//        else {
// echo "you enter wrong";
// include "hello.php";

//         //    header("Location:view.php");
//        }
//    }   }
// // Check DELETE
//     if(isset($_POST['upload'])) {
//         $x=$_FILES['image'];
//         print_r($x);


// }
?>