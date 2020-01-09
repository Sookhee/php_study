<!DOCTYPE HTML>
<html>
    <head>
        <style>
            body{
                text-align: center;
            }
            .read{
                position: relative;
            }
            table{
                width: 800px;
            }
            a, a:hover, a:visited, a:active{
                color: black;
                text-decoration: none;
            }
            span{
                padding: 2px 4px;
            }
            td{
                padding: 4px 20px 5px;
                border-bottom: 1px solid rgb(0, 0, 0);
            }
            .read-option{
                position: absolute;
                right: 0;
            }
            .read-title{
                border-top: 1px solid rgb(0, 0, 0);
                background: #ddd;
            }
            .read{
                display: inline-block;
            }
            .read-content{
                height: 200px;
            }
        </style>
    </head>
    <body>
        <div class="read">
        <table>

<?php
include('db_conn.php');
$idx = $_GET['idx'];
$query = "select * from bbs where id=$idx";
$result = mysqli_query($conn, $query);
$ip = $_SERVER['REMOTE_ADDR'];
if(!(mysqli_num_rows($result)==0)){
    $re = mysqli_fetch_row($result);
    $hit = $re[6] + 1;
    $query_update = "update bbs set hit=$hit where id=$re[0]";
    mysqli_query($conn, $query_update);
}
echo "<tr><td class='read-title' colspan='3'>$re[3]</td></tr>";
echo "<tr><td>글쓴이 : $re[1]</td><td>날짜 : $re[5]</td><td>조회수 : $re[6]</td></tr>";
echo "<tr><td colspan='3' class='read-content'>$re[4]</td></tr>";
echo "<tr><td></td><td></td><td>IP$ip</td></tr>";
?>

        </table>
        <div class="read-option">
            <span><a href="update_form.php?idx=<?=$re[0]?>">수정</a></span>
            <span><a href="delete_check.php?idx=<?=$re[0]?>">삭제</a></span>
            <span><a href="list.php">목록</a></span>
        </div>
        </div>
    </body>
</html>