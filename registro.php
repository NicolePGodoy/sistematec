<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Registro</title>
</head>
<body>
     <!-- se crea una seccion para el formulario -->
    <section class="row mx-auto"> 
        <div class="bg-image">
            <div class="d-flex align-items-center" style="height: 100vh;">
                <div class="container py-3 mx-auto col-10 col-md-6 container-form">
                    <div class="text-center mb-5">
                        <!-- se agrega titulo de crar perfil -->
                        <h1>Crear Perfil</h1>
                    </div>
                    <!-- se crea el formulario para almacenar los datoss -->
                     <!-- atributo action especifica la url del script que procesará los datos del form con metodo post -->
                    <form class="px-md-4" action="/php/users.php" method="POST">
                        <div class="mb-4">
                            <!-- input para ingresar los datos del formulario -->
                            <input type="text" class="form-control input-form" id="name" name="name" placeholder="Nombre">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control input-form" id="lastname" name="lastname" placeholder="Apellido">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control input-form" id="correo" name="correo" placeholder="Correo">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control input-form" id="contraseña" name="password" placeholder="Contraseña">
                        </div>
                        <div class="mb-5">
                            <!-- seleccion para elegir el tipo de usuario que se crea -->
                            <select class="form-select input-form" id="rol" name="rol">
                                <!-- se crean las opciones con valores de diferentes roles -->
                                <option value="user">Usuario</option>
                                <option value="barber">Barbero</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                         <!-- se coloca un campo de entrada oculto para enviar el formulario con valor crear  -->
                        <input type="hidden" name="type" value="crear">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Validar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
