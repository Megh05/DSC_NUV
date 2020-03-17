<?php
    $to = 'sales@chandresheng.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $quatation= $_POST["quatation"];
	$phone= $_POST["phone"];
    $msg= $_POST["msg"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Quatation: '.$quatation.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
		<tr><td>Message: '.$msg.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Your message has been sent.';
		header("Location: http://www.chandresheng.com/");
    }else{
        echo 'failed';
    }

?>
