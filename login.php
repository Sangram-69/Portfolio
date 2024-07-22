<?php
session_start();
$loginError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example credentials
    $stored_username = 'user';
    $stored_password = 'password'; // In practice, use hashed passwords

    if ($username === $stored_username && $password === $stored_password) {
        $_SESSION['loggedin'] = true;
        header('Location: archive.php');
        exit();
    } else {
        $loginError = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100">
    <header class="bg-dark text-white py-4 shadow-lg header-animated">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold animate-fadeInDown">Login</h1>
        </div>
    </header>
    <main class="container-login mt-10 shadow-lg rounded-lg">
        <h1 class="text-center">Login to Access Archive</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <?php if ($loginError): ?>
                <p class="text-danger mt-2"><?php echo htmlspecialchars($loginError); ?></p>
            <?php endif; ?>
        </form>
    </main>
</body>
</html>
