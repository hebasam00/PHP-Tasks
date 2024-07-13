<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Redirection Search Engine</title>
</head>
<body>
    <h2>Enter a URL to Redirect:</h2>
    <form action="redirect.php" method="get">
        <input type="text" id="url" name="url" placeholder="Enter URL" required>
        <button type="submit">GO</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        
        header("Location: $url");
        exit(); 
    } else {
        echo "<h2>error in the URL</h2>";
    }
}


?>
</body>
</html>
