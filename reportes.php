<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
    <title>Reportes</title>
</head>

<body>
    <?php include_once 'sections/header.php' ?>
    <div class="text-center my-5">
        <h1>Generar Reportes</h1>
    </div>
    <section class="py-5 mx-4 mb-5">
        <div class="table-responsive">
            <table class="table table-bordered border border-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">REPORTE</th>
                        <th scope="col">DESCRIPCIÓN</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cancelación cita</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td><button type="button" class="btn btn-success">Generar</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Ventas</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td><button type="button" class="btn btn-success">Generar</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Citas del dia</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td><button type="button" class="btn btn-success">Generar</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Modificación horario</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td><button type="button" class="btn btn-success">Generar</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>