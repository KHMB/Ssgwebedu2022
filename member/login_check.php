<?php
session_start();
include_once ('../config.php');
$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}
extract($_POST);

$q = "SELECT * FROM member WHERE id='$user_id'";
$result = $mysqli->query( $q);

if($result->num_rows==1) {

    $row = $result->fetch_array(MYSQLI_ASSOC);
    if( $row['pw'] == $user_pass ) {
        $_SESSION['is_logged'] = 'YES';
        $_SESSION['user_id'] = $user_id;
        $_SESSION['member_idx'] = $row['member_idx'];

        header("Location: http://192.168.42.128/member/login_done.php");
        exit();
    }
    else {
        
        header("Location: http://192.168.42.128/member/login_done.php");

        exit();
        
    }
}
else {

   
}
?>