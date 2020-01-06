<?php
//post 방식으로 넘어온 사용자 입력값을 받는 변수
$id = $_POST['user_id'];
$pw = $_POST['user_passwd'];
$id_com = 'test';
$pw_com = '1234';
echo "사용자의 아이디는 ".$id."<br/>";
echo "사용자의 비밀번호는 ".$pw."<br/>";

if($id == $id_com && $pw == $pw_com){
    echo "로그인 성공!";
}
else if($id == $id_com && !($pw == $pw_com)){
    echo "비밀번호가 다릅니다";
}
else if(!($id == $id_com)){
    echo "아이디가 존재하지 않습니다";
}
?>