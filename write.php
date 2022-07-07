글쓰기<br />
<form name ="write_form" method = "POST" action = "./write_check.php">
    
    <table>
        <tr>
            <td>
        제목
        </td>
        <td>
                <input type ="text" name = "sub" size ="90">
        </td>
        </tr>
        <tr>
            <td>
                내용
        </td>
        <td>
                <textarea name="content" cols="100" rows="10"></textarea>
        </td>
        </tr>
    </table>
    <div>
        <input type = "submit" value = "저장">
    </div>
   
</form>
       