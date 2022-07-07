<?php
extract($_GET);
session_start();
$connect = new mysqli("localhost", "testroot", "1234", "test_db");

$q = "DELETE FROM board WHERE doc_idx=$doc_idx";
$result = mysqli_query($connect,$q);

if ($result==false) {
    $_SESSION['delete_status'] = 'NO';
}
else {
    $_SESSION['delete_status'] = 'YES';
}
//$result->free();
mysqli_close($result);
//var_dump($url);
header('Location: ./delete_done.php');
exit();
?> 