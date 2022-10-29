<?php
//portfolio.php

require('header.php');
require('../conf.php');
require('utilities/Database.php');

$myDB = new Database();
$db = $myDB->getdb();
?>


<h1>Projects</h1>
<br>
<br>

<div class="container">
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

<br>
<br>

<?php
require('footer.php');

?>