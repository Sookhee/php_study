<?php
include('db_conn.php');
$user_id = $_POST['id'];
$passwd = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$hit = 0;

$query = "insert into bbs(user_id, passwd, title, content, reg_date, hit) values ('$user_id', '$passwd', '$title', '$content', now(), '$hit')";
mysqli_query($conn, $query);
mysqli_close($conn);
echo "<script>alert('등록완료');</script>";
?>
<meta http-equiv='refresh' content="0;url='list.php'"/>