<?php
header('Content-Type:application/json');
header('Acess-Control-Allow_Origin:*');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods Authorization,X-Requested-With');

include "config.php";
$data = json_decode(file_get_contents("php://input"),true);

$student_id = $data['sid'];

$sql = "delete from admin where id = {$student_id}";



if(mysqli_query($conn,$sql)){

    echo json_encode(array('message' => ' record deleted','status'=> true ));

}else{
    echo json_encode(array('message' => 'no recoed deleted','status'=> false ));

}


?>