<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "mrgain";
$dbname = "webLab";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_POST['name']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$gametype = mysqli_real_escape_string($conn, $_POST['gametype']);
$team = mysqli_real_escape_string($conn, $_POST['team']);
$address= mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$height = mysqli_real_escape_string($conn, $_POST['height']);
$weight = mysqli_real_escape_string($conn, $_POST['weight']);


// attempt insert query execution
$sql = "INSERT INTO playerdb (name,age,sex,gametype,team,address,phone,mobile,country,height,weight) VALUES ('$name', '$age', '$sex','$gametype','$team', '$address', '$phone','$mobile','$country', '$height', '$weight')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "<h4>ERROR: Could not able to execute $sql.</h4>" ;
    
}
 

$sql = "SELECT name,age,sex,gametype,team,address,phone,mobile,country,height,weight  FROM playerdb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<h1>Player information from database</h1><br>";
     while($row = $result->fetch_assoc()) {

         echo 
         "NAME:{$row['name']}  <br> ".
         "AGE : {$row['age']} <br> ".
         "SEX: {$row['sex']} <br> ".
         "GAME TYPE: {$row['gametype']} <br> ".
         "MAJOR TEAM:{$row['team']}  <br> ".
         "ADDRESS : {$row['address']} <br> ".
         "PHONE: {$row['phone']} <br> ".
         "MOBILE: {$row['mobile']} <br> ".
         "COUNTRY:{$row['country']}  <br> ".
         "HEIGHT : {$row['height']} <br> ".
         "WEIGHT: {$row['weight']} <br> ".
         "--------------------------------<br>";
     }
} else {
     echo "0 results";
}



// close connection
mysqli_close($conn);

?>

</body>
</html>