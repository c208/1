<?php
header("Access-Control-Allow-Origin : http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials : true");
header('Access-Control-Allow-Headers : Content-Type');

//echo '{"userName":"123"}';
$data=array("userName"=>"123");
echo json_encode($data);
?>