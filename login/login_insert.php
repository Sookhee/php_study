<?php
$conn = mysqli_connect('localhost', 'test', '1111', 'testdb');
if($conn){
    echo "연결되었습니다"."<br/>";
}

//post 방식으로 넘어온 사용자 입력값을 받는 변수
$id = $_POST['user_id'];
$pw = $_POST['user_passwd'];

echo "사용자의 아이디는 ".$id."<br/>";
echo "사용자의 비밀번호는 ".$pw."<br/>";

$query = "insert into login (user_id, password) values ('$id', '$pw')";
mysqli_query($conn, $query);
mysqli_close($conn);

echo "등록 성공!"."<br/>";

if($id == 'test' && $pw == '1111'){
    echo "로그인 성공!";
}
else if($id == 'test' && !($pw == '1111')){
    echo "비밀번호가 다릅니다";
}
else if(!($id == 'test')){
    echo "아이디가 존재하지 않습니다";
}
?>