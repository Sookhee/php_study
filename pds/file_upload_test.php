<?php
$user_file = $_FILES['user_file']['name'];
$upload_dir = 'files/';
$upload_files = $upload_dir.basename($_FILES['user_file']['name']);

if(move_uploaded_file($_FILES['user_file']['tmp_name'], $upload_files));
echo "등록되었습니다";
?>