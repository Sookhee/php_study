<?php
$file_name = 'data.txt';
$new_file_name = 'copy.txt';
if(copy($file_name, $new_file_name)){
    echo "복사 성공";
}
else{
    echo "복사 실패";
}

unlink($new_file_name);