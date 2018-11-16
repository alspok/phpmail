<?php
    require_once('sendmail.php');

    echo "<form method='post' action=''>";
    echo "<table>";
    echo "<tr><td style='width: 100px'>Email: </td><td><input type='text' name='email'></td></tr>";
    echo "<tr><td style='width: 100px'>Subject: </td><td><input type='text' name='subject'></td></tr>";
    echo "<tr><td style='width: 100px'>Message: </td><td><textarea name='message' cols='40' rows='8'></textarea></td></tr>";
    echo "<tr><td style='width: 100px'><input type='submit' name='submit' value='Send mail'></td></tr>";
    echo "</table>";
    echo "</form>";

    if(isset($_POST['submit'])){
        var_dump($_POST);
        sendMail($_POST['email'], $_POST['subject'], $_POST['message'], $_POST['message']);
    }