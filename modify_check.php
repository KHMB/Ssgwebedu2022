<?php
session_start();
extract($_POST);
$connect = new mysqli("localhost", "testroot", "1234", "test_db");

$q = "UPDATE board SET sub='$sub',content='$content' WHERE doc_idx='$doc_idx'";

$result = mysqli_query($connect,$q);


if ($result==false) {
    $_SESSION['modify_status'] = 'NO';
}
else {
    $_SESSION['modify_status'] = 'YES';
}

//$result->free();
mysqli_close($result);
//var_dump($url);

header('Location: ./modify_done.php');
exit();
?>