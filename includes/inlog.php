<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="styles/inlopstyle.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/inglog.js"></script>
</head>
<body>
    
    <?php require_once 'includes/header.php'; ?>

    <main id="inlog">
    <h2>Login</h2>
    <form id="loginForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
        <div id="message"></div>
    </main>

    <?php require 'includes/footer.php'; ?>

    <script src="scripts/login.js"></script>
</body>
</html>