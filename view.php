<?php
    session_start();

    $connect = new mysqli("localhost", "testroot", "1234", "test_db");

    extract($_GET); 
    $q = "SELECT * FROM board WHERE doc_idx = '$doc_idx'";
    $result = mysqli_query($connect, $q);
    $data = mysqli_fetch_array($result);
?>
<table>
    <tr>
        <td>
    제목
    </td>
    <td>
            <?php echo $data['sub']; ?>
    </td>
    </tr>
    <tr>
        <td>
    작성자
    </td>
    <td>
            <?php echo $data['member_idx']; ?>
    </td>
    </tr>
    <tr>
        <td>
            내용
    </td>
    <td>
            <?php echo $data['content']; ?>
    </td>
    </tr>
    <tr>
    <td>
        <?php
        if( $_SESSION['member_idx']==$data['member_idx']) {
            echo '<a href="http://192.168.42.128/modify.php?doc_idx='.$doc_idx.'">수정</a>';
        }
        ?>
    </td>
    </tr>
    <tr><td>
        <?php
        if( $_SESSION['member_idx']==$data['member_idx']) {
            echo '<a href="http://192.168.42.128/delete.php?doc_idx='.$doc_idx.'">삭제</a>';
        }
        ?>
    </td></tr>
</table> 

<?php
    echo '<a href = "http://192.168.42.128/list.php" class="btn">목록</a>';
?>