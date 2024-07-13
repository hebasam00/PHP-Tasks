<?php
if (!isset($_COOKIE['counter'])) {
    $counter = 1;
} else {
    $counter = $_COOKIE['counter'] + 1;
}

setcookie('counter', $counter, time() + 86400);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>Page has been refreshed <strong><?php echo $counter; ?></strong> times.</p>
</body>
</html>
