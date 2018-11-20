<?php require 'class/class.phpmailer.php';
if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $reference = $_POST['reference'];
    $writer = $_POST['writer'];
    $deadline = $_POST['deadline'];
    $remarks = $_POST['remarks'];

    $bodyContent = "Hello $title has been assigned to you. Complete before $deadline";
    $mail = new PHPMailer;
    $mail->CharSet = "UTF-8";
    $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for gmail
    $mail->Port = '587';
    //Sets the default SMTP server port
    $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'skaranjit24@gmail.com';                    //Sets SMTP username
    $mail->Password = 'uiop123qwerty';                    //Sets SMTP password
    $mail->SMTPSecure = 'tls';                            //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = "skaranjit24@gmail.com";                    //Sets the From email address for the message
    $mail->FromName = 'TechLekh';                //Sets the From name of the message
    $mail->AddAddress("saurav.bhandari012@gmail.com","Saurav");        //Adds a "To" address
    $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
    $mail->Hostname = 'localhost.localdomain';       //to send unlimited emails from localhost
    $mail->IsHTML(true);                            //Sets message type to HTML if you want to send message with html tags
    $mail->Subject = "Task Assigned!!";                //Sets the Subject of the message
    $mail->Body = $bodyContent;                //An HTML or plain text message body
    if ($mail->Send())                                //Send an Email. Return true on success or false on error
    {
        echo "<SCRIPT type='text/javascript'>
			alert('Task has been assigned!');
			window.location.replace('assign-article.php');</SCRIPT>";
    } else {
        echo "<SCRIPT type='text/javascript'>
			alert('Cannot assign task. Please try again later.');
//            window.location.replace('assign-article.php');</SCRIPT>";
    }
}
?>