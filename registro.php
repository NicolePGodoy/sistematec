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
    <section class="row mx-auto"> 
        <div class="bg-image">
            <div class="d-flex align-items-center" style="height: 100vh;">
                <div class="container py-3 mx-auto col-10 col-md-6 container-form">
                    <div class="text-center mb-5">
                        <h1>Crear Perfil</h1>
                    </div>
                    <form class="px-md-4" action="/php/users.php" method="POST">
                        <div class="mb-4">
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
                            <select class="form-select input-form" id="rol" name="rol">
                                <option value="user">Usuario</option>
                                <option value="barber">Barbero</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
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
