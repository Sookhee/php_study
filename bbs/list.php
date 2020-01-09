<!doctype html>
<html>
    <head>
        <title></title>
        <style>
            body{
                text-align: center;
            }

            a, a:hover, a:visited, a:active{
                color: black;
                text-decoration: none;
            }

            .join_list{
                position: relative;
                display: inline-block;
            }

            .search{
                position: absolute;
                display: inline-block;
                right: 0;
            }
            table{
                margin-top: 60px;
                border-collapse: collapse;
                text-align: center;
            }
            td{
                padding: 4px 10px;
            }
        </style>
    </head>
    <body>
    <div class="join_list">
        <h1>게시판</h1>
        <div class="search">
            <form method="post" action="search.php">
                <select name="search-option">
                    <option value="all">전체검색</option>
                    <option value="title">제목</option>
                    <option value="writer">작성자</option>
                    <option value="content">내용</option>
                </select>
                <input type="text" name="search-key">
                <button type="submit">검색</button>
            </form>
        </div>
        <table border="2">
            <tr>
                <td>번호</td>
                <td width="200">제목</td>
                <td>글쓴이</td>
                <td>날짜</td>
                <td>조회수</td>
            </tr>

<?php
include('db_conn.php');
$query = "select * from bbs order by id desc";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
for($i = 0; $i < $count; $i++){
    $re = mysqli_fetch_array($result);
    echo "<tr><td>$re[0]</td><td><a href='read.php? idx=$re[0]'>$re[3]</a></td><td>$re[1]</td><td>$re[5]</td><td>$re[6]</td></tr>";
}
mysqli_close($conn);
?>
</table>
<input style="position: absolute; right: 60px; bottom:-30px;" type="button" value="목록" onclick="location.href='list.php'">
<input style="position: absolute; right: 0; bottom:-30px;" type="button" value="글쓰기" onclick="location.href='write.html'">
</div>
</body>
</html>