<!--Standard HTML Document-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Load Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>College & Student Application - Carl Lyon</title>
</head>

<!--Bootstrap body-->
<body class="d-flex flex-column min-vh-100">
    <!--Bootstrap header with a navbar-->
    <header class="bg-dark p-4">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                
                <!--Navigation link to the colleges index page-->
                <a class="navbar-brand" href="{{ route('colleges.index') }}">College & Student | Management System</a>
                <ul class="navbar-nav ms-auto">

                    <!--Navigation link to the colleges index page-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('colleges.index') }}">Colleges</a>
                    </li>

                    <!--Navigation link to the students index page-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Bootstrap main body contents-->
    <main class="flex-grow-1 py-4">
        <div class="container">
            <!--'Retrieve' the modular content-->
            @yield("content")
        </div>
    </main>
</body>

</html>