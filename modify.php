<?php
extract($_GET); 
if(isset($doc_idx)==false) {
    echo '글번호가 지정되지 않았습니다.';
    exit();
}
$connect = new mysqli("localhost", "testroot", "1234", "test_db");
$q = "SELECT * FROM board WHERE doc_idx = '$doc_idx'";
$result = mysqli_query($connect,$q);
$data = mysqli_fetch_array($result);
?>
글수정하기<br />
<form name ="modify_form" method = "POST" action = "./modify_check.php">
<input type="hidden" name="doc_idx" value="<?php echo $doc_idx ?>">
<table>
    <tr>
        <td>
    제목
    </td>
    <td>
            <input type ="text" name = "sub" size ="90" value="<?php echo $data['sub'];?>">
    </td>
    </tr>
    <tr>
        <td>
            내용
    </td>
    <td>
            <textarea name="content" cols="100" rows="10" ><?php echo $data['content'];?></textarea>
    </td>
    </tr>
</table>
<div>
    <input type = "submit" value = "저장">
</div>
   
</form>
<div>
    <?php
    echo '<a href="http://192.168.42.128/list.php" class="btn" >목록</a>';
    ?>
</div>
