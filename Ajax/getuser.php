<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','mrgain','ajaxDb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

?>

<table>
    <tr>
        <th width="20%">First Name</th>
        <th width="20%">Last Name</th>
        <th width="10%">Age</th>
        <th width="30%">Home Town</th>
        <th width="30%">Job</th>
    </tr>
    <?php 
         while($row = mysqli_fetch_array($result)) { 
    ?>
        <tr>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['homeTown']; ?></td>
            <td><?php echo $row['job']; ?></td>
        </tr>
    <?php } ?>
</table>


</body>
</html>




