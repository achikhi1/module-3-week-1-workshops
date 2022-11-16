
<!DOCTYPE html>
<html lang="en">
<head>

   <link rel="stylesheet" href="bestelpagina.css">
    <title>Document</title>
</head>
<body>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  $email = $_POST['email1'];
  $lname = $_POST['lname'];
  $adres = $_POST['Adres'];
  $housnumber = $_POST['Housnumber'];
  $zipcode = $_POST['zipcode'];
  $phone = $_POST['phone'];
  $product = $_POST['product'];

//   if (empty($name)) {
//     echo "Name is empty";
//   } else {
//     echo "Bedankt " . $name . "<br>";
//     echo "Uw order word verzonden naar het volgende adres:" . "<br>" . $adres . " ". $housnumber . " " . $zipcode;
//   }
}
?>
<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you <?php echo $name ?>!</h1> 
      <h2>For your order <?php echo $product ?>!</h2> 
      <p>Thanks for subscribing to our news letter.  </p>
      <p>you should receive a confirmation email soon  </p>
      <button class="go-home">
      go home
      </button>
    </div>
    <div class="footer-like">
      <p>Email not received?
       <a href="#">Click here to send again</a>
      </p>
    </div>
</div>
</div>




<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">



            

</body>
</html>