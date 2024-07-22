<?php
header('Content-Type:application/json');
header('Access-Control-Allow_Origin:*');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods Authorization,X-Requested-With');

include "config.php";
$data = json_decode(file_get_contents("php://input"),true);

$id = $data['sid'];
$name = $data['sname'];
$city = $data['scity'];
$age = $data['sage'];

$sql = "update admin set name = '{$name}',age = {$age}, city = '{$city}' where id = {$id}";



if(mysqli_query($conn,$sql)){

    echo json_encode(array('message' => 'Updated succesfully','status'=> true ));


}else{
    echo json_encode(array('message' => 'NOT updated','status'=> false ));

}


?>