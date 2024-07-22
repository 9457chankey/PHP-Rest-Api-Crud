<?php
header('Content-Type:application/json');
header('Acess-Control-Allow_Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods Authorization,X-Requested-With');

include "config.php";
$data = json_decode(file_get_contents("php://input"),true);

$name = $data['sname'];
$city = $data['scity'];
$age = $data['sage'];

$sql = "insert into admin(name,city,age) VALUES ('{$name}','{$city}',{$age})";



if(mysqli_query($conn,$sql)){

    echo json_encode(array('message' => 'Record inserted','status'=> true ));


}else{
    echo json_encode(array('message' => 'no recoed inserted','status'=> false ));

}


?>