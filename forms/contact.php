
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  



<?php 
$servername='localhost';
$username='root';
$password='';
$databasename='MyDb';

$connection = mysqli_connect($servername,$username,$password);

if (!$connection) {
die("Connection failed: " . $conn->connect_error);
}

/*mysqli_query($connection, "DROP DATABASE if exists MyDb;");

if(!mysqli_query($connection, "CREATE DATABASE MyDb;")){
echo "Error creating database: " . $connection->error;
}

mysqli_query($connection, "use MyDb;");
mysqli_query($connection, "DROP TABLE if exists employee;");

$table="CREATE TABLE employee (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)"; 
$value="INSERT INTO employee (firstname,lastname,email) VALUES ('john', 'steve', 'johnsteve@yahoo.com')";
if(!mysqli_query($connection, $table)){echo "Error creating table: " . $connection->error;}
if(!mysqli_query($connection, $value)){echo "Error inserting values: " . $connection->error;}*/
?>