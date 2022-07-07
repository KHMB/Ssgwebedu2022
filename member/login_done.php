<?php
session_start();
$is_logged = $_SESSION['is_logged'];
if($is_logged=='YES') {
    $user_id = $_SESSION['user_id'];
    $message = $user_id . ' 님, 로그인 했습니다.';
}
else {
    $message = '로그인이 실패했습니다.';
}
?>
<html>
    <head>
        <title>로그인 완료 페이지</title>
        <meta charset="utf-8" >
    </head>
    <body>
        로그인 완료<br />
        <hr />
<?php
    echo $message;
?>
    <a href="../main.php">확인</a>
    </body>
</html> 