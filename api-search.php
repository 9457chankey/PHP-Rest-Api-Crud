<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

include "config.php";

$search_value = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM admin WHERE name LIKE '%$search_value%'";
$result = mysqli_query($conn, $sql) or die("SQL query failed");

if(mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No search found', 'status' => false));
}
?>
