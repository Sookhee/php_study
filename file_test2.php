<?php
$file_name = 'data.txt';
$fp = fopen($file_name, "r");
echo "fgetc()<br/>";
while ($char = fgetc($fp)) {
    echo $char."<br>";
}
echo "파일 읽기 완료!";
fclose($fp);

echo "<br/><hr/>fgets()<br/>";
$fp = fopen($file_name, "r");
while ($str = fgets($fp, 4096)) {
    echo $str."<br/>";
}
echo "파일 읽기 완료!";
fclose($fp);

echo "<br/><hr/>fread()<br/>";
$fp = fopen($file_name, "r");
$contents = fread($fp, filesize($file_name));
echo $contents."<br/>";
echo "파일 읽기 완료!";

fclose($fp);


echo "<br/><hr/>file_get_contents()<br/>";
echo file_get_contents($file_name);
echo "파일 읽기 완료!";
