<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/style_feed.css"/>  
</head>
<body>
    <div class="container">
        <h1 class="heading">Your feedback is Valuable for us!</h1>
        <hr>
        <center>
            <p>We would like your feedback to improve our website.</p>
            <br>    
            <p>What is your opinion about us...</p>
        </center>
        <br>
        <center>
            <div class="img_container" image="d2.png">
                <img src="img/sad.png" alt="sad">
                <img src="img/confused.png" alt="confused">
                <img src="img/smile.png" alt="smile">
                <img src="img/smiling.png" alt="smiling">
                <img src="img/star.png" alt="star">
            </div>
        </center>
        <br>
        <br>
        <hr>
        <form action="send_feedback.php" method="post">
            <p>Please leave your feedback below:</p>
            <input class="feed" type="email" name="email" placeholder="Your Email" required>
            <br>
            <br>
            <textarea class="feed" name="feedback" placeholder="Feedback.."></textarea>
            <br>
            <br>
            <input type="submit" value="Send" class="btn" />
        </form>
    </div>
</body>
</html>
