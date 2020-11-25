<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
</head>
<body>
    <?php 
        require('./endpoints/getRequest.php');
        include 'endpoints/tweetsByUsername.php';
        getRequest('https://api.twitter.com/2/users/by/username/','TwitterDev');
    ?>
</body>
</html>