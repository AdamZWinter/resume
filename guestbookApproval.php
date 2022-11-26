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
  
if( !isset($_GET['hash']) ){
    echo $redirect;
}else{
    $hash = $_GET['hash'];
}

if( !isset($_GET['action']) ){
    echo $redirect;
}else{
    $action = $_GET['action'];
}

if($action == "approve"){
    $query = "UPDATE `guestbook` SET `approved`= 1 WHERE `hash` =".$hash;
    echo 'action is approve';
}

if($action == "delete"){
    $query = "DELETE FROM `guestbook` WHERE `hash` =".$hash;
    echo 'action is delete';
}

  $result = $db->query($query);
  echo 'row affected: '.$result->num_rows;
  echo '<br>';
  var_dump($result);

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