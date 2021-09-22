<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="bg-light d-flex align-items-center text-center" style="height: 100vh;">
    
    <main class="container bg-light" style="max-width: 500px;">
        <form action="../controller/registerUsuarioController.php" method="POST">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle mb-2" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            <h1 class="h3 mb-3 fw-normal">Registrar usuario</h1>

            <div class="form-floating mb-2">
                <input name="correo" type="email" class="form-control" placeholder="name@example.com">
                <label>Correo</label>
            </div>
            <div class="form-floating mb-2">
                <input name="contra" type="password" class="form-control" placeholder="Password">
                <label>Contraseña</label>
            </div>
            <button class="w-100 mb-2 btn btn-lg btn-primary" type="submit">Registrarse</button>
            <a href="login.php" class="fs-5">Iniciar sesión</a>
            <p class="mt-5 mb-3 text-muted">©2021</p>
        </form>
    </main>

</body>
</html>