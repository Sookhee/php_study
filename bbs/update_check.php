<?php
include('db_conn.php');
$idx = $_POST['idx'];
$user_id = $_POST['id'];
$passwd = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];

if($conn){
    $query = "select * from bbs where user_id='$user_id'";
    $result = mysqli_query($conn, $query);
    $re = mysqli_fetch_row($result);
    if($passwd == $re[2]){
        $query_update_title = "update bbs set title='$title' where id=$idx";
        $query_update_content = "update bbs set content='$content' where id=$idx";
        mysqli_query($conn, $query_update_title);
        mysqli_query($conn, $query_update_content);
        echo "수정 완료";
        echo "<meta http-equiv='refresh' content='0;url=list.php'/>";
    }
    else{
        echo "<script>alert('비밀번호 불일치');history.go(-1);</script>";       
    }
}
?>
