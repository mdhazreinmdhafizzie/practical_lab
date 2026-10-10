<?php

$firstkwh = "";
$secondkwh = "";
$thirdkwh = "";
$fourthkwh = "";
$fifthkwh = "";

$error = "";
$showbill = false;

if (isset($_POST['calculate'])) {
    //echo "<h1>The input for the first kwh is: " . $_POST['first'] . "</h1>";
$firstkwh = $_POST['first'];
$secondkwh = $_POST['second'];
$thirdkwh = $_POST['third'];
$fourthkwh = $_POST['fourth'];
$fifthkwh = $_POST['fifth'];

//$charge1 = $_POST['first'] * 0.218;


if ($firstkwh == "") {
    $firstkwh = 0;
}
if ($secondkwh == "") {
    $secondkwh = 0;
}
if ($thirdkwh == "") {
    $thirdkwh = 0;
}
if ($fourthkwh == "") {
    $fourthkwh = 0;
}
if ($fifthkwh == "") {
    $fifthkwh = 0;
}

// if ($firstkwh < 0) {
//     $firstkwh = 0;
// }
// if ($secondkwh < 0) {
//     $secondkwh = 0;
// }
// if ($thirdkwh < 0) {
//     $thirdkwh = 0;
// }
// if ($fourthkwh < 0) {
//     $fourthkwh = 0;
// }
// if ($fifthkwh < 0) {
//     $fifthkwh = 0;
// }
if ($firstkwh < 0 || $secondkwh < 0 || $thirdkwh < 0 || $fourthkwh < 0 || $fifthkwh < 0) {
    $error = "Please enter a valid number for kWh.";
} 


else if ($firstkwh > 200) {
    $error = "Please enter a valid value (0-200) for the first kWh.";
}
else if ($secondkwh > 100) {
    $error = "Please enter a valid value (0-100) for the second kWh.";
}
else if ($thirdkwh > 300) {
    $error = "Please enter a valid value (0-300) for the third kWh.";
}
else if ($fourthkwh > 300) {
    $error = "Please enter a valid value (0-300) for the fourth kWh.";
}


else if ($firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh == 0) {
    $error = "Please enter a valid value (0 or more) for atleast one kwh.";
    } else {

$charge1 = $firstkwh * 0.218;
$charge2 = $secondkwh * 0.344;
$charge3 = $thirdkwh * 0.516;
$charge4 = $fourthkwh * 0.688;
$charge5 = $fifthkwh * 0.571;

$totalkwh = $firstkwh + $secondkwh + $thirdkwh + $fourthkwh + $fifthkwh;
$totalcharge = $charge1 + $charge2 + $charge3 + $charge4 + $charge5;

if ($totalcharge < 3) {
    $totalcharge = 3;
}

if ($totalkwh > 600) {
    $totalsst = $totalcharge * 0.06;
    $totalcharge = $totalcharge + $totalsst;

    $totalcharge = $totalcharge * 1.06;
}

$showbill = true;


}
}
?>