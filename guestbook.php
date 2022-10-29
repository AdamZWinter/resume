<?php
//guestbook.php

require('header.php');
require('../conf.php');
require('utilities/Database.php');

$myDB = new Database();
$db = $myDB->getdb();


?>


<h1>Guestbook</h1>
<br>
<br>

<form id = "guestbook" action="send.php" method="post">
    <div class= "container-fluid">
      <div class="row">
        
        <div class="col-6">
          <label for="set" class="rental-head">First Name:              </label>
          <input type="text" class= "form-control" id="fname" name="fname">
        </div>
        
        <div class="col-6">
          <label for="set" class="rental-head">Last Name:               </label>
          <input type="text" class= "form-control" id="lname" name="lname">
        </div>        
        </div>
 
      
      <div class="row">       
        
        <div class="col-6">
          <label for="message" class="rental-head">Message:</label>
          <input type="text" class= "form-control" id="message" name="message"></div>

        <div class="col-6">
          <label for="link" class="rental-head">Link:</label>
          <input type="text" class= "form-control" id="link" name="link">
        </div>      
      </div>
   

      </div>
    </div>
    <br>
  <center>
        <input class="btn btn-primary button"  type="submit" value="submit">
  </center>
    
  </form>


  <br>
  <br>
  <br>
  <div class="row"><div class="col-2"></div>
  <div class="col-10">
  <p>The following guests have been here:</p>
  <?php
        $result = $db->query("SELECT * FROM `guestbook` WHERE 1");
        //echo $result->num_rows;
        for($i = 0; $i < $result->num_rows; $i++){
            $result->data_seek($i);
            $row = $result->fetch_assoc();
            echo $row["lname"].', '.$row["fname"];
            echo '<br>';
        }
    ?>
</div></div>
<br>

<?php
require('footer.php');

?>