<?php
     session_start();
     $a = $_POST['fileToUpload'];
     $comp = [];
    //  echo 'fffffff'.$a;
     if (!isset($_SESSION["data"])) {
         $_SESSION["data"] = array(); 
         $_SESSION["id"]  = 100;

     }
    if ($a){
        array_push($_SESSION['data'], ['task'=>$a,'id'=>$_SESSION['id'], 'type'=>'incomplete']);
        $_SESSION['id'] ++;
     }

    else {
         echo "Sorry, there was an error uploading your file.";
     }

    
    if(isset($_POST['test1'])){
        $task = $_POST['id_sp'];
        foreach($_SESSION['data'] as $data){
            // echo $data['id'];
            if($data['id'] == $task){
                if($data['type'] == 'incomplete'){
                    $data['type'] = 'complete';
                    echo $data['id'].'=>'.$data['type'];
                }else{
                    $data['type']= 'incomplete'  ;
                }
            }
        }
  
    }
 
    
?>
<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" rel="stylesheet">
        <srcipt src="script.js"></srcipt:src>
    </head>
    <body>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p>
                <form action="" method="POST">
                <input id="new-task" name='fileToUpload' type="text"><input type="submit" value="ADD"/>
                </form>
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
                <!-- <form method="POST"> -->
                <?php
                    foreach($_SESSION["data"] as  $val){

                        // foreach($val as $task){
                            // echo $val['id'].'<br>';
                        // }
                        
                        if($val['type'] == 'incomplete'){
                            // echo $data['type'];
                            echo ' 
                            <form action="" method="POST">
                            <li>
                            
                            <input type="text" name="id_sp" value="'.$val['id'].' "hidden />
                            <input type="checkbox" name="test1" id="check" value='.$val['task'].' onChange="form.submit()" />
                            
                            <label>'.$val['task'].'</label>
                            <input type="text">
                            <button class="edit">Edit</button>
                            <button class="delete">Delete</button></li></form>';

                    }}
                ?>
                <!-- </form> -->
                <!-- <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->
            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
            <?php
                foreach($_SESSION["data"] as $com){
                    if($com['type'] == 'complete'){

                    echo '<li><input type="checkbox" checked><label>'.$com['task'].'</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>';
                }}
            ?>
                </ul>
        </div>
    
    </body>
</html>