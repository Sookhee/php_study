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
    <div class="join_list">
        <h1>회원가입 목록</h1>
        <table border="2">
            <tr>
                <td>번호</td>
                <td>아이디</td>
                <td>비밀번호</td>
                <td>이름</td>
                <td>성별</td>
                <td>전화번호</td>
                <td>이메일</td>
                <td>주소</td>
                <td>취미</td>
                <td>알게된 계기</td>
            </tr>

<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'testdb');
$query = "select * from join_mem order by id desc";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
for($i = 0; $i < $count; $i++){
    $re = mysqli_fetch_array($result);
    echo "<tr><td>$re[0]</td><td>$re[1]</td><td>$re[2]</td><td>$re[3]</td><td>$re[4]</td><td>$re[5]</td><td>$re[6]</td><td>$re[7]</td><td>$re[8]</td><td>$re[9]</td></tr>";
}
mysqli_close($conn);
?>

</table>
</div>
</body>
</html>