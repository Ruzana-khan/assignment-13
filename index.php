<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Form</title>

</head>

<body>
 <h1>User Data</h1>

 <form action="index.php" method="POST" autocomplete="off">
  <input type="text" placeholder="First Name" name="fname" /><br />
  <input type="text" placeholder="Last Name" name="lname" /><br />
  <input type="email" placeholder="Email" name="email" /><br />
  <input type="password" placeholder="Password" name="passcode" /><br />
  <input type="submit" value="Submit" />
 </form>

 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['fname']) ||
   empty($_POST['lname']) ||
   empty($_POST['email']) ||
   empty($_POST['passcode'])) 
   {echo "<div class='failed_message'>Some of Your Data Missing, Please Try Again.</div>";}
    else {echo "<div class='success_container'>";
    echo "<div class='success_message'>Thanks for Submitting.</div>";
    echo "<div class='success_details'>";
    echo "First Name: " . $_POST['fname'] . "</br>";
    echo "Last Name: " . $_POST['lname'] . "</br>";
    echo "Full Name: " . $_POST['fname']. " " . $_POST['lname']. "</br>";
    echo "Email: " . $_POST['email'] . "</br>";
    echo "Password: [HIDDEN] "</br>";
    echo "</div>";
   echo "</div>";}}
?>
</body></html>