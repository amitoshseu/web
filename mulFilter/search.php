<?php
$pdo = new PDO('mysql:host=localhost;dbname=web_ajaxDb', 'root', 'mrgain');
$select = 'SELECT *';
$from = ' FROM products';
$where = ' WHERE TRUE';
$opts = isset($_POST['filterOpts'])? $_POST['filterOpts'] : array('');
if (in_array("hp", $opts)){
$where .= " AND brands = 'hp'";
}
if (in_array("lenovo", $opts)){
$where .= " AND brands = 'lenovo'";
}
if (in_array("apple", $opts)){
$where .= " AND brands = 'Apple'";
}
if (in_array("Computer", $opts)){
$where .= " AND products = 'Computer'";
}
if (in_array("Laptop", $opts)){
$where .= " AND products = 'Laptop'";
}
if (in_array("pendrive", $opts)){
$where .= " AND products = 'pendrive'";
}
if (in_array("price1", $opts)){
$where .= " AND price = '10000'";
}
if (in_array("price2", $opts)){
$where .= " AND price = '20000'";
}
if (in_array("price3", $opts)){
$where .= " AND price = '30000'";
}
$sql = $select . $from . $where;
$statement = $pdo->prepare($sql);
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo($json);
?>