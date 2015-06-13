<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Sent Data</title>

<link rel="stylesheet" href="css/style.css">

</head>
<body>

<h1>Sent Data</h1>

<p>
    Name<br>
    <?= $_POST['name'] ?>
</p>

<p>
    Email<br>
    <?= $_POST['email'] ?>
</p>

<p>
    Message<br>
    <pre><?= $_POST['message'] ?><pre>
</p>

<?php
    $isSent = mail('cristripoli@gmail.com', 'subject', 'message');
    if($isSent) {
        echo "Email sent";
        
    }
?>
</body>
</html>
