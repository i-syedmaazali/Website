<?php
$first_name = $_POST['first name'];
$last_name = $_POST['last name'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile number'];
$message = $_POST['message'];

$mailheader = "From:" .$name."<".$email.">\r\n";

$recipient = "sales@nanjinghavo.com";

mail($recipient, $subject, $message, $mobile_number, $mailheader) or die("Error!");

echo '

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NANJING HAVO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Rubik&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<!--=============== Thank Message ===============-->
<div class="thank-bg"> 
<div class="thank-you">
    <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
    </div>
</div>

      
</header>
</header>

</body>
</html>



';

?>