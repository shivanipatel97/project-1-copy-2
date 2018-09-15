<?php
session_start();

include("includes/link.php");
$current_link = "contact";

if(isset($_POST["submit"])); {
  $fullName = $_POST["fullName"];
  $fullName = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_STRING);
  $fullName = filter_var($fullName, FILTER_SANITIZE_STRING);

  $email = $_POST["email"];
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);

$tel = $_POST["tel"];
  function telValidation($tel){
    $tel =$_POST["tel"];
    if (preg_match("^[0-9]{3}\W[0-9]{3}\W[0-9]{4}$^", $tel)) {
      echo($tel);
  } else {
    header("Location: contact7.php");
  }
}


  $messageType = $_POST["messageType"];
  $messageType = filter_input(INPUT_POST, 'messageType', FILTER_SANITIZE_STRING);
  $messageType = filter_var($messageType, FILTER_SANITIZE_STRING);

  $message = $_POST["message"];
  $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
  $message = filter_var($message, FILTER_SANITIZE_STRING);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset = "UTF-8">
  <title> CONTACT - Shivani Patel </title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>
<body>
  <?php
  include("includes/navigation.php");
  ?>

  <p class="echoedMessage">
    Thank you, <?php echo(htmlspecialchars($fullName));?>, for sending me a
    <?php echo(htmlspecialchars($messageType));?>
    message that reads "<?php echo(($message));?>"
  </p>
  <p class="echoedMessage">
    I will get back to you at <?php echo(htmlspecialchars($email));?> or <?php telValidation($tel);?> as soon as possible!
  </p>
</body>
</html>
