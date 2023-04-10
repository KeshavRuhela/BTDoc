<?php
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Method:POST');
    header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');
    // $data = json_decode(file_get_contents("php://input"),true);
    require "dbconnect.php";
    // $branch = $data['branch'];
    $query = "select * from branch;";
    $result = mysqli_query($conn, $query);

    if($result){
        $arr = mysqli_fetch_all($result);
        $decode_arr = json_encode($arr);
        echo $decode_arr;
    }    else{
        $default_arr = array("message"=>"Data is not Exists","status"=>false);
        $default_json_msg = json_encode($default_arr);
        echo $default_json_msg;
    }
?>