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
    <title>Puntuar barbero</title>
</head>

<body>
    <?php // include_once 'sections/header.php' ?>
    <div class="text-center my-5">
        <h1>Puntuar barbero</h1>
    </div>
    <section class="py-5 mx-4 mb-5 container-form">
        <form class="px-4 row">
            <div class="mb-4 col-md-6">
                <select class="form-select input-form">
                    <option selected>Seleccione un barbero</option>
                    <option value="1">Juan</option>
                    <option value="2">Nicolas</option>
                    <option value="3">Cristian</option>
                </select>
            </div>
            <div class="mb-4 col-md-6 rating">
                <input id="rating1" type="radio" name="rating" value="1">
                <label for="rating1">1</label>
                <input id="rating2" type="radio" name="rating" value="2">
                <label for="rating2">2</label>
                <input id="rating3" type="radio" name="rating" value="3">
                <label for="rating3">3</label>
                <input id="rating4" type="radio" name="rating" value="4">
                <label for="rating4">4</label>
                <input id="rating5" type="radio" name="rating" value="5">
                <label for="rating5">5</label>
            </div>
            <div class="mb-4 col-12">
                <textarea class="form-control" rows="10"></textarea>   
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Puntuar</button>
            </div>
        </form>
    </section>
</body>
</html>