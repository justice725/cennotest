<?php

include $_SERVER['DOCUMENT_ROOT']."/homepage/data/dbconfig.php";

$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
$folder = "./no_file/".$filename;
move_uploaded_file($tmpfile,$folder);

$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
$mqq = mq("alter table board auto_increment =1"); //auto_increment 값 초기화
if($username && $userpw && $title && $content){
    $sql = mq("insert into board(name,pw,title,content,date,file) values('".$username."','".$userpw."','".$title."','".$content."','".$date."','".$o_name."')"); 
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='./board.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>