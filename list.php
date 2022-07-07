<?php
$q = "SELECT * FROM board";
$connect = new mysqli("localhost", "testroot", "1234", "test_db");
$result = mysqli_query($connect, $q);
$total_record = $result->num_rows;

?>
 목록<br />
 <a href="./write.php">글쓰기</a>
 <a href="./main.php">홈</a>
<?php if($total_record==0) :?>
    글이 없습니다.
<?php else :
    if(isset($page)){
        $now_page = $page;
    }
    else{
        $now_page = 1;
    }
    
    $record_per_page = 5;
    $start_record = $record_per_page*($now_page-1);
    $record_to_get = $record_per_page;
    
    if( $start_record+$record_to_get > $total_record) {
    $record_to_get = $total_record - $start_record;
    }


    
    

    




    $ql = "SELECT * FROM board WHERE 1 ORDER BY doc_idx DESC";
    $result = mysqli_query($connect, $ql);
    
    
    ?>

    <table class="table">
        <thead>
            <th>글번호</th>
            <th>제목</th>
            <th>작성자 번호</th>
            <th>등록일시</th>
        </thead>
    <?php while($data = mysqli_fetch_array($result)) :?>
        <tr>
            <td><?php echo $data['doc_idx']?></td>
            <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>./view.php?doc_idx=<?php echo $data['doc_idx']; ?>" ><?php echo $data['sub']?></a></td>
            <td><?php echo $data['member_idx']?></td>
            <td><?php echo $data['reg_date']?></td>
        </tr>
    <?php endwhile ?>
    </table>
    



<?php endif?>


