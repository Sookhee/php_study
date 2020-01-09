<?php
include('db_conn.php');
$idx = $_GET['idx'];
$query = "delete from bbs where id=$idx";
mysqli_query($conn, $query);
echo "삭제되었습니다";
echo "<meta http-equiv='refresh' content='0;url=list.php'/>";
?>