<html>
    <head>
        <title>회원가입 페이지</title>
        <meta charset="utf-8" >
    </head>
    <body>
        <br>회원 가입</br>
        <hr />
         <form name="signup_form" method="post" action="./signup_check.php" >
            <strong>아이디</strong> : <input type="text" name="user_id" /><br />
            <strong>비밀번호</strong> : <input type="password" name="user_pass" /><br />
            <strong>이메일주소</strong> : <input type="text" name="user_email" /><br />
            <input type="submit" value="회원가입" />
        </form>   
    </body>
</html>
