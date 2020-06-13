



 <!-- <!-- <?php
$h="localhost";
$u="root";
$p='';
$db_name="myonlinetrading";

$con = mysqli_connect($h,$u,$p,$db_name);

if(mysqli_connect_errno()){
    die("your error come".mysqli_connect_error());
    
    
  }
  
  else {
  echo "success";

}
?>
-->

                                  <!-- create database -->
                                  <!-- <?php
$h="localhost";
$user="root";
$pas='';


$con=mysqli_connect($h,$user,$pas);




// Create database
$sql = "CREATE DATABASE myphp";
if (mysqli_query($con, $sql)) {
  echo "Database created successfully";
} else {
    die("Error creating database: " . mysqli_error($con));
  }

mysqli_close($con);


?> -->



-->


<!-- crete table in database 


<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "myphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE My(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> -->





<!--                                     insert one and multiple data in database -->
<!-- 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myphp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO my(firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
  -->



<!--                              selcet value in database     -->
<!-- 
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname , email FROM my";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>" .$row["email"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> -->






<!--                               select database where -->
<!--  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, email FROM my WHERE lastname='Doe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> -->

<!-- select order by 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM my ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
  -->



               <!-- delete data in database   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM my WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>


  -->


                          <!-- where update select
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myphp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE my SET lastname='jjjj' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?> -->
