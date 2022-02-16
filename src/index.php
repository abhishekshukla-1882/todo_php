<?php
     session_start();
     $a = $_POST['fileToUpload'];
    //  echo 'fffffff'.$a;
     if (!isset($_SESSION["data"])) {
         $_SESSION["data"] = array();  
     }
    if ($a){
        array_push($_SESSION['data'], $a);

     }
    //  if ( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $_FILES["fileToUpload"]["name"])) {
    //      echo "The file has been uploaded.";
    else {
         echo "Sorry, there was an error uploading your file.";
     }
?>
<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" rel="stylesheet">
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
                <?php
                    foreach($_SESSION["data"] as $key => $val){
                        echo '<li><input type="checkbox"><label>'.$val.'</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>';

                    }
                ?>
                <!-- <li><input type="checkbox"><label>Pay Bills</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->
            </ul>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
        </div>
    
    </body>
</html>