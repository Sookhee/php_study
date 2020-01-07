<?php
$conn = mysqli_connect('localhost','test','1111','testdb');

$user_id = $_POST['user-id'];
$user_pw = $_POST['user-pw'];
$user_name = $_POST['user-name'];
$user_gender = $_POST['user-gender'];
$user_phone = $_POST['user-phone'];
$user_email = $_POST['user-email'];
$user_address = $_POST['user-address'];
$user_know = $_POST['user-reason'];

echo $user_id."<br/>";
echo $user_pw."<br/>";
echo $user_name."<br/>";
echo $user_gender."<br/>";
echo $user_phone."<br/>";
echo $user_email."<br/>";
echo $user_address."<br/>";
echo $user_know."<br/>";

$uhobby = "";

for($i = 0; $i < count($_POST['hobby']); $i++){
    $user_hobby = $_POST['hobby'];
    echo $user_hobby[$i];
    $uhobby .= $user_hobby[$i];
}

echo $uhobby."<br/>";

$query = "insert into join_mem(user_id,passwd,name,gender,hp,email,addr,hobby,know) values
('$user_id','$user_pw','$user_name','$user_gender','$user_phone','$user_email', '$user_address', '$uhobby','$user_know')";
mysqli_query($conn, $query);
echo "등록이 완료되었습니다";

?>