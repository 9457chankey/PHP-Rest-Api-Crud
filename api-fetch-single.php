<?php
header('Content-Type:application/json');
header('Acess-Control-Allow_Origin:*');

include "config.php";
$data = json_decode(file_get_contents("php://input"),true);

$student_id = $data['sid'];

$sql = "select * from admin where id = {$student_id}";
$result = mysqli_query($conn,$sql) or die("sql query failed");


if(mysqli_num_rows($result)>0){

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

}else{
    echo json_encode(array('message' => 'no recoed found','status'=> false ));

}


?>