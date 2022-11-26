<?php
//portfolio.php

require('header.php');
require('../conf.php');
require('utilities/Database.php');

$myDB = new Database();
$db = $myDB->getdb();

$redirect = '<script>
window.location.href="./";
</script>';

$message = '';  //initialized
$link = '';  //initialized
  
if( !isset($_POST['hash']) ){
    echo $redirect;
}else{
    $hash = $_POST['hash'];
}

if( !isset($_POST['action']) ){
    echo $redirect;
}else{
    $action = $_POST['action'];
}

if($action == "approve"){
    $query = "UPDATE `guestbook` SET `approved`= 1 WHERE `hash` =".$hash;
}

if($action == "delete"){
    $query = "DELETE FROM `guestbook` WHERE `hash` =".$hash;
}

  $db->query($query);

?>

<br>
<br>
<br>
<div class= "container-fluid">
    <div class="row">
        
        <div class="col-2">

        </div>

        <div class="col-8">
            <br>
            <a href="index.php"><button class="button">Done</button></a>
            <br>
        </div>      
        
        
        <div class="col-2">
        </div>   

    </div>
</div>


<?php
require('footer.php');

?>