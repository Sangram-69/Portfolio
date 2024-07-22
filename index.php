<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100">
    <header class="bg-dark text-white py-4 shadow-lg header-animated">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold animate-fadeInDown">My Portfolio</h1>
            <nav class="mt-4">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link text-white" href="about.php">About Me</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="certifications.php">Certifications</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="qualifications.php">Academic Qualifications</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="resume.php" target="_blank">My Resume</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="javascript:void(0);" id="archive-link">Archive</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg">
        <section class="text-center">
            <h2 class="text-3xl font-semibold mb-4">Welcome to My Portfolio</h2>
            <p class="text-lg text-gray-700">This is the home page. Feel free to explore my work and get to know more about me.</p>
        </section>
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <?php include 'includes/footer.php'; ?>
    </footer>

    <!-- Modal -->
    <div id="login-dialog" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Required</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>You must log in to access the archive.</p>
            </div>
            <div class="modal-footer">
                <a href="login.php" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom Script -->
    <script src="js/script.js"></script>
</body>
</html>
