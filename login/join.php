<?php
$user_id = $_POST['user-id'];
$user_pw = $_POST['user-pw'];
$user_pw_re = $_POST['user-pw-re'];
$user_name = $_POST['user-name'];
$user_gender = $_POST['user-gender'];
$user_home_phone = $_POST['user-home-phone'];
$user_phone = $_POST['user-phone'];
$user_email = $_POST['user-email'];
$user_address = $_POST['user-address'];
$user_address1 = $_POST['user-address-1'];
$user_address2 = $_POST['user-address-2'];
$user_address3 = $_POST['user-address-3'];
$user_reason = $_POST['user-reason'];

echo $user_id."<br/>";
echo $user_pw."<br/>";
echo $user_pw_re."<br/>";
echo $user_name."<br/>";
echo $user_gender."<br/>";
echo $user_home_phone."<br/>";
echo $user_phone."<br/>";
echo $user_email."<br/>";
echo $user_address."<br/>";
echo $user_address1."<br/>";
echo $user_address2."<br/>";
echo $user_address3."<br/>";
echo $user_reason."<br/>";

for($i = 0; $i < count($_POST['hobby']); $i++){
    $user_hobby = $_POST['hobby'];
    echo $user_hobby[$i];
}

