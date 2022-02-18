<?php
    session_start();
    include 'index.php';
    $check = isset($_POST['test1']) ? "checked" : "unchecked";
    echo $check."<br>";
    $dis = $_REQUEST['test1'];
    echo $dis;
    // if(isset($_POST['test1'])){
    //     echo "checked value1"."<br>";
    // }
    // $check = isset($_POST['test1']) ? "checked" : "unchecked";
    // echo $check."<br>";
    // $dis = $_REQUEST['test1'];
    // echo $dis;
    array_push($comp,$dis);
    print_r($comp)
    // foreach($comp as $key => $value){
    //     echo 'ruuu<br>'.$value;

    // }
?>

