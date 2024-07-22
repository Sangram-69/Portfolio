<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive - My Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100">
    <header class="bg-dark text-white py-4 shadow-lg">
        <div class="container mx-auto">
            <h1 class="text-center text-4xl font-bold">Archive</h1>
            <nav class="text-center mt-4">
                <a href="index.php" class="btn btn-secondary mx-2">Home</a>
                <a href="logout.php" class="btn btn-danger mx-2">Logout</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg">
        <h2 class="text-center text-3xl font-semibold mb-4">PDF Notes</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="pdfs/note1.pdf" target="_blank">Note 1</a></li>
            <li class="list-group-item"><a href="pdfs/note2.pdf" target="_blank">Note 2</a></li>
            <li class="list-group-item"><a href="pdfs/note3.pdf" target="_blank">Note 3</a></li>
        </ul>
    </main>
</body>
</html>
