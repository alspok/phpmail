<?php
    require_once('sendmail.php');
    require_once('mysqlfunctions.php');
    /********* Single message ***********/
    echo "<h2>Single message.</h2><br>";
    echo "<form method='post' action=''>";
    echo "<table>";
    echo "<tr><td style='width: 100px'>Email: </td><td><input type='text' name='email'></td></tr>";
    echo "<tr><td style='width: 100px'>Subject: </td><td><input type='text' name='subject'></td></tr>";
    echo "<tr><td style='width: 100px'>Message: </td><td><textarea name='message' cols='40' rows='8'></textarea></td></tr>";
    echo "<tr><td style='width: 100px'><input type='submit' name='submit' value='Send mail'></td></tr>";
    echo "</table>";
    echo "</form>";

    if(isset($_POST['submit'])){
        sendMail($_POST['email'], $_POST['subject'], $_POST['message'], $_POST['message']);
        echo nl2br($_POST['email'] . PHP_EOL . $_POST['subject'] . PHP_EOL . $_POST['message']);
    }

    /********* A bunch of messages, one text ********/
    echo "<br><h2>A bunch of messages, one text.</h2>";
    echo "<form method='post'>";
    echo "<table><tr><td style='width: 100px'>Message: </td><td><textarea name='textmessage' cols='40' rows='8'></textarea></td></tr></table>";
    echo "<input type='submit' name='runbunch' value='Send mail'>";
    echo "</form>";
    if(isset($_POST['runbunch'])){
        $emailArray = emailCollection();
        $subject = 'Some subject';
        // $message = 'Some message text';
        $message = $_POST['textmessage'];
        foreach($emailArray as $emailItem){
            sendMail($emailItem[3], $subject, $message);
            echo nl2br($emailItem[3] . PHP_EOL . $message . PHP_EOL);
        }
    }

    /********* A bunch of message with text from DB.**********/
    echo "<br><h2>Message with text from DB.</h2>";
    echo "<form method='post'><input type='submit' name='rundb' value='Send mail'></form>";
    if(isset($_POST['rundb'])){
        $emailArray = emailCollection();
        $textArray = textCollection();
        $subject = 'Some subject';
        $outString = arrayToString($textArray);
        foreach($emailArray as $emailItem){
            sendMail($emailItem[3], $subject, $outString);
            echo nl2br($emailItem[3] . PHP_EOL . $outString . PHP_EOL);
        }
    }