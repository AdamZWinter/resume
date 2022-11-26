<?php
//portfolio.php

require('header.php');
require('../conf.php');
require('utilities/Database.php');
require('utilities/PWhasher.php');

$myDB = new Database();
$db = $myDB->getdb();

$redirect = '<script>
window.location.href="./";
</script>';

$message = '';  //initialized
$link = '';  //initialized
  
if( !isset($_POST['fname']) ){
    echo $redirect;
  }else{
    $fname = $_POST['fname'];
  }
 
  if( !isset($_POST['lname']) ){
    echo $redirect;
  }else{
    $lname = $_POST['lname'];
  }

  if( !isset($_POST['message']) ){
    //nothing
  }else{
    $message = $_POST['message'];
  }

  if( !isset($_POST['link']) ){
    //nothing
  }else{
    $link = $_POST['link'];
  }

  $stringToHash = $fname.$lname.$message.$link;
  $hash = PWhasher::get64char($stringToHash);

  $query = "INSERT INTO `guestbook`(`fname`, `lname`, `message`, `link`, `approved`, `hash`) VALUES ('".$fname."','".$lname."','".$message."','".$link."',"FALSE",'".$hash."')";
  $db->query($query);


// Multiple recipients
$to = 'gravity.freeze@gmail.com'; // commas between addresses

// Subject
$subject = 'Someone has signed the guestbook.';

// Message
$messageEmail = '
<html>
<head>
  <title>Someon signed your guestbook.</title>
</head>
<body>
  <p>
  Click the following link to approve the post: <a href="https://adamwinter.greenriverdev.com/resume/guestbookApproval.php?hash='.$hash.'&action=approve">Approve</a>
  </p>
  <p>
    <br>First Name:  '.$fname.'
    <br>Last Name:  '.$lname.'
    <br>Message:  '.$message.'
    <br>Link:  '.$link.'
  </p>
  <br>
  <p>
  Click the following link to DELETE this from the database: <a href="https://adamwinter.greenriverdev.com/resume/guestbookApproval.php?hash='.$hash.'&action=delete">Delete</a>
  </p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
//$headers[] = 'To: Adam <gravity.freeze@gmail.com>';
//$headers[] = 'From: Team Orange <teamorange@orange.topsecondhost.com>';
//$headers[] = 'Cc: adam@bootstrapmusic.com';
//$headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
$errorMessage = 'no errors';
$success = mail($to, $subject, $messageEmail, implode("\r\n", $headers));

  if (!$success) {
      $errorMessage = error_get_last()['message'];
      echo 'Error: Failed to send mail -- '.$errorMessage;
  }else{
    $errorMessage = $message;
  }

?>

<br>
<br>
<br>
<div class= "container-fluid">
    <div class="row">
        
        <div class="col-2">

        </div>

        <div class="col-8">
            <h1>Thank you, <?php echo $fname; ?>!</h1>
            <br>
            <p>Your message has been recorded.</p>
            <br>
            <a href="index.php"><button class="button">Done</button></a>
            <br>
            <br>
            <?php echo $errorMessage;?>
        </div>      
        
        
        <div class="col-2">
        </div>   

    </div>
</div>


<?php
require('footer.php');

?>