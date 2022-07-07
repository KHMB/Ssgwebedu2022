<?php

session_start();
$reg_date = date('Y-m-d');
$member_idx = $_SESSION['member_idx'];
$content = $_POST['content'];
$sub = $_POST['sub'];

echo $member_idx."/".$sub."/".$content."reg_date: ".$reg_date;
?>
<br></br>
<?php
// $q = "INSERT INTO board (member_idx,sub,content,reg_date) VALUES($member_idx, \"$sub\", \"$content\", \"$reg_date\");";
// echo $q;
$connect = new mysqli("localhost", "testroot", "1234", "test_db");
$stmt = $connect->prepare("INSERT INTO board(member_idx,sub,content,reg_date) values(?,?,?,?)");
$stmt->bind_param("isss",$member_idx,$sub,$content,$reg_date);
$stmt->execute();
$stmt->close();

// mysqli_query($connect, $q);

// mysqli_close($connect);
header("Location: http://192.168.42.128/write_done.php");

?> 