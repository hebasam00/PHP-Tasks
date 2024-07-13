<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p><strong>Project Name:</strong> <?php echo htmlspecialchars(getenv('PROJECT_NAME')); ?></p>
    <p><strong>Script Name:</strong> <?php echo htmlspecialchars($_SERVER['SCRIPT_NAME']); ?></p>
</body>
</html>
