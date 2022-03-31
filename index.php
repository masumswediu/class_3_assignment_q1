<?php
/*************qua 1(a)************/
$subA = 75;
$subB = 80;
$subC = 65;
$subD = 90;

$totalSub = 4;

$totalMark = $subA + $subB + $subC + $subD ;
$argvMark = $totalMark / $totalSub;

echo $argvMark;



echo "<br>";
echo "<br>";



/****************qus 1(b)************/

$mark = 88;

if($mark >= 80 && $mark <=100 ){
    echo "You got A+";
}elseif($mark >= 70 && $mark <=79){
    echo "You got A";
}elseif($mark >= 60 && $mark <=69){
    echo "You got A-";
}elseif($mark >= 50 && $mark <=59){
    echo "You got B";
}elseif($mark >= 40 && $mark <=49){
    echo "You got C";
}elseif($mark >= 01 && $mark <=39){
    echo "You got F";
}else{
    echo "You need more study";
}

echo "<br>";
echo "<br>";

/************* qus 2 **************/

$power = "start";

switch($power){
    case "start":
        echo " bike start";
        break;
    case "stop":
        echo "bike stop";
        break;
    case "break":
        echo "bike takes break";
        break;
    case "gear":
        echo "bike move faster";
        break;
    case "signals":
        echo "shows signal lights";
        break;
    case "headlignt batton":
        echo "headlight power on";
        break;

    default:
    echo "You have no idea in bike switchs,pls knows about the switches then you press the switch";
}















?>