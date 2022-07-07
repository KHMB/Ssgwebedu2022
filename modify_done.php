<?php
session_start();
$modify_status = $_SESSION['modify_status'];
if($modify_status=='YES') {
    $message = '글이 수정되었습니다.';
}
else {
    $message = '수정 실패했습니다.';
}
?>
        게시판 글 수정 완료 페이지<br />
        <hr />
        <a href="./list.php">게시판</a><br />
<?php
    echo $message;
?>
