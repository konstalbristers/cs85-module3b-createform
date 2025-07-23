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

   $SuccessMessage = true;

    if (empty($FullName)) { // checks if $FullName is empty
        echo "<h2>Please enter a name</h2>";
        $SuccessMessage = false;
    } elseif (strlen($Fullname) <= 2) { // checks if the length of the $FullName is less than or equal to 2
        echo "<h2>Please enter a name longer than 2 letters</h2>";
        $SuccessMessage = false;
    }
    if (empty($EmailAddress)) { // checks if $EmailAddress is empty
        echo "<h2>Please enter an E-mail address</h2>";
        $SuccessMessage = false;
    } elseif (!filter_var($EmailAddress, FILTER_VALIDATE_EMAIL)) { // checks if $EmailAddress is a valid email address
        echo "<h2>Please enter a valid E-mail address</h2>";
        $SuccessMessage = false;
    }
    if (empty($Topic)) { // checks if $Topic is empty
        echo "<h2>Please enter a topic</h2>";
        $SuccessMessage = false;
    }
    if (empty($Message)) { // checks if $Message is empty
        echo "<h2>Please enter a message</h2>";
        $SuccessMessage = false;
    } elseif (strlen($Message) <= 195) { // checks if the length $Message is less than or equal to 195
        echo "<h2>Please enter a longer message</h2>";
        $SuccessMessage = false;
    }
}

?>
</body>
</html>