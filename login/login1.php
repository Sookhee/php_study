<?php
$id = $_GET['user_id'];
$pw = $_GET['user_passwd'];
echo $id."<br/>";
echo $pw."<br/>";
// $conn = mysqli_connect('localhost', 'test', '1111', 'testdb');
// if($conn){
//     $query = "select * from login where user_id='$id'";
//     $result = mysqli_query($conn, $query);
//     if(mysqli_num_rows($result)==0){
//         echo "가입되어있지 않은 회원입니다";
//         echo "<br/><a href='#'>회원가입</a>";
//     }
//     else{
//         $re = mysqli_fetch_row($result);
//         if($pw == $re[2]){
//             echo "로그인 성공";
//         }
//         else{
//             echo "비밀번호 불일치";
//         }
//     }
// }
?>