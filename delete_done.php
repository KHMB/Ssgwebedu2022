<?php
session_start();
$delete_status = $_SESSION['delete_status'];
if($delete_status=='YES') {
    $message = '글이 삭제되었습니다.';
}
else {
    $message = '삭제 실패했습니다.';
}
?>
        게시판 글 삭제 완료 페이지<br />
        <hr />
        <a href="./list.php">게시판</a><br />
<?php
    echo $message;
?>
