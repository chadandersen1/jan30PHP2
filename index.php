<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms Lab</title>
</head>

<body>

    <h3>PHP Forms Lab</h3>

    <form action="processContact.php" method="POST">

    <ul>
        <li>
            <label for="name">Your name:</label>
            <input type="text" id="name" name="user_name" />
        </li>
        <li>
            <label for="mail">Email:</label>
            <input type="email" id="mail" name="user_email" />
        </li>
        <li>
            <label for="msg">Message:</label>
            <textarea id="msg" name="user_message"></textarea>
        </li>
        <li>
            <button type="submit">Send us a message</button>
        </li>
    </ul>

    </form>

</body>
</html>