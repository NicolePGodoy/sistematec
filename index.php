<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>
    <!-- se crea una seccion para el formulario -->
    <section class="row mx-auto"> 
        <div class="bg-image">
            <div class="d-flex align-items-center" style="height: 100vh;">
                <div class="container py-5 mx-auto col-10 col-md-6 container-form">
                    <div class="text-center mb-5">
                        <h1>Login</h1>
                    </div>
                    <!-- se crea el formulario con sus repectivos campos -->
                    <!-- atributo action especifica la url del script que procesará los datos del form con metodo post -->
                    <form class="px-md-4" action="/php/users.php" method="POST">
                        <div class="mb-4">
                            <input type="text" class="form-control input-form" id="correo" name="correo" placeholder="Usuario">
                        </div>
                        <div class="mb-5">
                            <input type="password" class="form-control input-form" id="contraseña" name="contraseña" placeholder="Contraseña">
                        </div>
                        <div class="d-flex justify-content-center">
                            <!-- se agrega botón para enviar los dtos al formulario y guardar el registro -->
                            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Validar</button>
                        </div>
                        <!-- se coloca un campo de entrada oculto para enviar el formulario con valor login  -->
                        <input type="hidden" name="type" value="login">
                        <div class="text-center mt-4">
                            <a href="/registro.php">Registrarme</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
