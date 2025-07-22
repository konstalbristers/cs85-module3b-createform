<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="Form.php" method="POST">
        <label for="fullname">Full name: </label>
        <input type="text" id="fullname" name="full_name" placeholder="John Doe"><br><br>
        <label for="email">E-mail Address: </label>
        <input type="text" id="email" name="email_address" placeholder="example@email.com"><br><br>
        <label for="topic">Topic: </label>
        <input type="text" id="topic" name="topic"><br><br>
        <label for="message">Message: </label>
        <textarea id="message" name="message" placeholder="Enter your message here"></textarea><br><br>
        <input type="submit" id="submitbtn" name="submitbtn" value="Send message">
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST) && isset($_POST['submitbtn'])) { // deeply checks if form was submitted to set the variables with the information you inputted
    $FullName = htmlspecialchars(trim($_POST['full_name']));
    $EmailAddress = htmlspecialchars($_POST['email_address']);
    $Topic = htmlspecialchars($_POST['topic']);
    $Message = htmlspecialchars($_POST['message']);
    
    echo "<h1>$FullName $EmailAddress $Topic $Message</h1>"; // this will output the information you submitted in the form

    if (empty($FullName)) {
        echo "<h2>Please enter a name</h2>";
    } elseif (strlen($Fullname) <= 2) {
        echo "<h2>Please enter a name longer than 2 letters</h2>";
    }
    if (empty($EmailAddress)) {
        echo "<h2>Please enter an E-mail address</h2>";
    } elseif (!filter_var($EmailAddress, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Please enter a valid E-mail address</h2";
    }
}

?>
</body>
</html>