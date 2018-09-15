<?php
include("includes/link.php");
$current_link = "contact";

(isset($_POST["messageType"])) ? $messageType = $_POST["messageType"] : $messageType="Work Request";

$option = array("Work Request", 'Question', 'Feedback');

$options = array(
  'work_request' == 'Work Request',
  'question' == 'Question',
  'feedback' == 'Feedback',
);

function returnTypes($value){
  foreach ($option as $value){
    echo($value);
  }
}

function returnType($a){
  foreach ($options as $key => $value){
    if ($a == $key[0]){
      echo($value[0]);
  }
}
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset = "UTF-8">
  <title> CONTACT - Shivani Patel </title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/clientvalidation.js" type="text/javascript"></script>
</head>
<body>
  <?php
  include("includes/navigation.php");
  ?>
  <p class="comment1"> Feel free to contact me with any question, comments or inquiries!</p>
  <div class="conhalf1">
    <p class="comment2a"> Phone: </p>
    <p class="comment2c"> Email: </p>
  </div>
  <div class="conhalf2">
    <p class="comment2b"> (518) 221-9552 </p>
    <p class="comment2d"> ssp225@cornell.edu </p>
  </div>
  <div id="sendit">
    <p class="comment1">Send a Message:</p><br>
    <p id="fillin"> * = required </p><br><br>
    <form method="post" action="submitted.php" id="mainForm" >
      <!-- maybe add enctype="multipart/form-data" -->
      <div class="nameAndEmail">
        <div class="conhalf1">
          <div class="comment3a">
            <label for="fullName">Name:*</label>
            <input type="text" name="fullName" class="fullName" placeholder="Full Name" required><br><br>
          </div>
        </div>
        <div class="conhalf2">
          <div class="comment3b">
            <label for="email">Email:*</label>
            <input type="email" name="email" class="email" placeholder="name@domain.com" required><br><br>
          </div>
        </div>
      </div>
      <div class="conhalf1">
        <div class="comment3a">
          <label for="tel">Phone Number:*</label>
          <input name="tel" id="tel" placeholder="xxx-xxx-xxxx" required><br>
          <span class="errorContainer" id="telError">
            Phone Number not inputed in correct format!
          </span><br><br>
        </div>
      </div>
      <div class="conhal2">
        <div class="comment3b">
          <label for="message">Message:*</label>
          <select name="messageType" id="messageType" required>

            <option value="Work Request"> <?php returnType($a); ?>:
            </option>

            <option value="Question"> <?php echo($option[1]);?>:
            </option>

            <option value="Feedback"> <?php echo($option[2]);?>:
            </option>

          </select><br><br>
        </div>
      </div>
      <div class="labelAndInputHolder">
        <div class="inputHolder">
          <textarea name="message" class="message" placeholder="Write your message here!" rows="20" cols="115" required></textarea><br><br>
        </div>
      </div>
      <div class="inputHolder">
        <input type="submit" name="submit" class="submit"><br><br>
      </div>
    </form>
  </div>
</body>

</html>
