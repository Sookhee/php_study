<?php
$file_name = 'newfile.txt';
$fp = fopen($file_name, "w");
fwrite($fp, 'Johe Doe'.chr(13).chr(10));
fwrite($fp, 'Jane Doe');
echo "파일 쓰기 완료!";
fclose($fp);