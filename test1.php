<?php
$total = 0;
for($num = 1; $num <= 10; $num++){
    $total += $num;
}
echo $total."<br/>";

for($count = 1; $count <= 100; $count++){
    if($count % 2 == 0){
        echo $count."  ";
    }
}
echo "<br/>";

$score = 85;
switch(floor($score/10)){
    case 10 : case 9 : echo "수"; break;
    case 8 : echo "우"; break;
    case 7 : echo "미"; break;
    case 6 : echo "양"; break;
    default : echo "가";
}
echo "<br/>";

$total2 = 0;
$num2 = 1;
while($num2 <= 100){
    if($num2 % 2 == 1){
        $total2 += $num2;
    }
    $num2++;
}
echo $total2;

?>