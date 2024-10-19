<?php
if(!empty($_POST["send"])){
  $first_name = $_POST["first name"];
  $last_name = $_POST["last name"];
  $email = $_POST["email"];
  $mobile_number = $_POST["mobile number"];
  $message = $_POST["message"];
  $toEmail = "sales@nanjinghavo.com";

  $mailHeaders = "Name:" .$first_name., .$last_name.
  "\r\n Email:" .$email.
  "\r\n mobile_number:" .$mobile_number.
  "\r\n Message:" .$message. "\r\n";

  if(mail($toEmail, $first_name, $last_name, $mailHeaders)){
  	$message = "Your Information is Received Successfully.";

  }

}

?>

        <!-- Form -->
        <div class="contact form">
            <h3>Send a Message</h3>
            <form action="form-handler.php" method="post">
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span>First Name</span>
                            <input type="text" name="first name" placeholder="Enter First Name">
                        </div>
                        <div class="inputBox">
                            <span>Last Name</span>
                            <input type="text" name="last name" placeholder="Enter Last Name">
                        </div>
                    </div>

                    <div class="row50">
                        <div class="inputBox">
                            <span>Email</span>
                            <input type="text" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="inputBox">
                            <span>Mobile</span>
                            <input type="text" name="mobile number" placeholder="Enter Your Mobile Number">
                        </div>
                    </div>

                     <div class="row100">
                        <div class="inputBox">
                            <span>Message</span>
                            <textarea name="message" placeholder="Write your message here...."></textarea>
                        </div>
                    </div>

                    <div class="row100">
                        <div class="inputBox">
                            <input type="submit" name="send" value="Send">
                            <?php if(!empty($message)){ ?>
                        </div>
                        <div class="success">
                            <strong><?php echo $message; ?></strong>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </form>
        </div>