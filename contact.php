
<?php

if($_POST["submit"]) {
    $recipient="kirsty.rogers@hotmail.co.uk";
    $subject="Website Query";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $number=$_POST["number"];
    $message=$_POST["text"];

    $mailBody="Name: $sender\nEmail: $senderEmail\nContact: $number\n\n$message";

    mail($recipient, $subject, $number, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent and we will be in contact soon.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Executive Class</title>
  </head>
  <body>


    <?=$thankYou ?>

    
</main>
</body>

</html>


