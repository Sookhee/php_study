<?php
$a = $_POST['list'];
for($i = 0; $i < count($_POST['list']); $i++){
    echo $a[$i]."<br/>";
}
?>