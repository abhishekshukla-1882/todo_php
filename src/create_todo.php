<?php
    $a = $_POST['fileToUpload'];
   
    if (!isset($_SESSION["data"])) {
        $_SESSION["data"] = array(); 
        $_SESSION['id'] = 100;

    }
   if ($a){
       array_push($_SESSION['data'], ['task'=>$a,'id'=>$_SESSION['id'], 'type'=>'incomplete']);

    }
    header('Location : index.php');
?>