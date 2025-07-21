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
        <input type="text" id="fullname" name="full_name" placeholder="John Doe" required><br><br>
        <label for="email">E-mail Address: </label>
        <input type="text" id="email" name="email_address" placeholder="example@email.com" required><br><br>
        <label for="topic">Topic: </label>
        <input type="text" id="topic" name="topic" required><br><br>
        <label for="message">Message: </label>
        <textarea id="message" name="message" placeholder="Enter your message here" required></textarea><br><br>
        <input type="submit" id="submitbtn" name="submitbtn" value="Send message">
</form>
</body>
</html>