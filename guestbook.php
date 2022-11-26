<?php
//guestbook.php

require('header.php');
require('../conf.php');
require('utilities/Database.php');

$myDB = new Database();
$db = $myDB->getdb();


?>


<div class="container-fluid">
    <div class="row">
        
        <div class="d-sm-none d-md-block col-2">
            <!--
            <h1>Left Margin</h1>
            -->
        </div>

        <div class="col-8 col-sm-12" >
          
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
                    <input type="text" class= "form-control" id="message" name="message" style="height: 100px;">
                  </div>

                  <div class="col-6">
                    <label for="link" class="rental-head">Link:</label>
                    <input type="text" class= "form-control" id="link" name="link">
                  </div>      
                </div>

            <br>
            <br>
            <div>
                  <input class="btn btn-outline-primary" type="submit" value="submit">
            </div>
            
          </div>
          </div>
          </form>
              
            <br>
            <div class="row"><div class="col-2"></div>
            <div class="col-10">
              
            <br>
            <br>
            <p>The following guests have been here:</p>
            <?php
                  $result = $db->query("SELECT * FROM `guestbook` WHERE approved");
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

        </div>

        <div class="d-sm-none d-md-block col-2">
        <!--
            <h1>Right Margin</h1>
        -->
        </div>

    </div><!-- end row -->
</div><!-- end container -->




<?php
require('footer.php');

?>