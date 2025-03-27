<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Load Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>College & Student Application - Carl Lyon</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="bg-dark text-white p-4">
            <h1>Colleges and Students App<h1>
    </header>

    <main class="container py-5 flex-grow-1">
        @yield("content")
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p>Designed and Maintained by Carl Lyon - 2025</p>
    </footer>
</body>
</html>