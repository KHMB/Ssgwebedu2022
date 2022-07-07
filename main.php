
<?php
session_start();
$is_logged = $_SESSION['is_logged'];

$user_id = $_SESSION['user_id'];
$message = $user_id . ' 님.';

?>

<html>
    <head>
        <title>첫페이지</title>
        <meta charset="utf-8" >
    </head>
    <body>
<?php
echo $message;
?>
        첫 페이지
        <hr />
        <a href="./member/signup.php">회원가입</a>
        <a href="./list.php">게시판</a>

<?php
if($_SESSION['is_logged']!='YES'){
    echo '<a href="./member/login.php">로그인</a>';
}
else{   
}

if($_SESSION['is_logged']=='YES'){
    echo '<a href="./member/logout.php">로그아웃</a>';
}
else{   
}
?>
        
        <a href="./write.php">글쓰기</a>


    </body>
</html> 