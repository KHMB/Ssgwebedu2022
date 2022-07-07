<?php
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['member_idx']);
unset($_SESSION['is_logged']);

header('Location: '.$url['root'].'/main.php');
exit();
?> 

