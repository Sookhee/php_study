<!doctype html>
<html>
    <head>
        <title></title>
        <style>
            table{
                border-collapse: collapse;
                text-align: center;
            }
            td{
                width: 80px;
            }
        </style>
    </head>
    <body>
        <h1>로그인 목록</h1>
        <table border="2" width="400">
            <tr>
                <td>번호</td>
                <td>아이디</td>
                <td>비밀번호</td>
            </tr>

<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'testdb');
$query = "select * from login order by id desc";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
for($i = 0; $i < $count; $i++){
    $re = mysqli_fetch_array($result);
    echo "<tr><td>$re[0]</td><td>$re[1]</td><td>$re[2]</td></tr>";
}
mysqli_close($conn);
?>

</table>
</body>
</html>