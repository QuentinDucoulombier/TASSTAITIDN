<?php
/*FIXME:Le mail ne s'envoie pas*/

$to = "quentducou@gmail.com";
$subject = "email test";

$message = "
<html>
    <head>
        <title>HTML email</title>
    </head>
    <body>
        <p>This email contains HTML Tags!</p>
        <table>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        </tr>
        <tr>
        <td>John</td>
        <td>Doe</td>
        </tr>
        </table>
    </body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


mail($to,$subject,$message,$headers);

header('Location:index.php');
?>