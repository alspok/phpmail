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
    }

    /********* A bunch of messages, one text ********/
    echo "<br><h2>A bunch of messages, one text.</h2>";
    echo "<form method='post'><input type='submit' name='runbunch' value='Run script'></form>";
    if(isset($_POST['runbunch'])){
        $emailArray = emailCollection();
        $subject = 'Some subject';
        $message = 'Some message text';
        foreach($emailArray as $item){
            sendMail($item, $subject, $message);
            echo $item . '<br>';
        }
    }

    /********* A bunch of message with text from DB.**********/
    echo "<br><h2>Message with text from DB.</h2>";
    echo "<form method='post'><input type='submit' name='rundb' value='Run script'></form>";
    if(isset($_POST['rundb'])){
        $emailArray = emailCollection();
        $textArray = textCollection();
        $subject = 'Some subject';
        $outString = arrayToString($textArray);
        foreach($emailArray as $emailItem){
            sendMail($emailItem, $subject, $outString);
            echo $emailItem . '<br>' . $outString . '<br>';
        }
    }