<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='main.js'></script>
</head>
<body>
    <main>
        <p>SEND E-MAIL</p>
        <form action="includes/contactform.inc.php" method="post" class="contact-form">
            <input type="text" name="name" placeholder="Full name"><br/><br/>
            <input type="text" name="mail" placeholder="Your e-mail"><br/><br/>
            <input type="text" name="subject" placeholder="Subject"><br/><br/>
            <textarea name="message" placeholder="Message"></textarea><br/><br/>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>
</body>
</html>