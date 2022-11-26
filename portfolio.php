<?php
//portfolio.php

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

            <h1>Projects</h1>
            <br>
            <br>

            <?php
                $result = $db->query("SELECT * FROM `portfolio` WHERE 1");
                //echo $result->num_rows;
                for($i = 0; $i < $result->num_rows; $i++){
                    $result->data_seek($i);
                    $row = $result->fetch_assoc();
                    echo '<div class="row"><div class="col-3 col-sm-12">';
                    echo '<img class="fit-img img-fluid" src="'.$row["image"].'">';
                    echo '</div><div class="col-9 col-sm-12">';
                    echo '<h2>'.$row["title"].'</h2><br><ul>';
                    echo $row["content"];
                    echo '</ul></div></div>';
                    echo '<br><br>';

                }
            ?>
        </div>

        <div class="d-sm-none d-md-block col-2">
        <!--
            <h1>Right Margin</h1>
        -->
        </div>

    </div><!-- end row -->
</div><!-- end container -->

<br>
<br>

<?php
require('footer.php');

?>