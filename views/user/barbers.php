<div class="container my-5">
    <div class="row align-items-center">
        <div class="col text-center">
            <h1>Barberos Creados</h1>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barbers as $barber): ?>
                    <tr>
                        <td><?= $barber['name']; ?></td>
                        <td><?= $barber['lastname']; ?></td>
                        <td><?= $barber['correo']; ?></td>
                        <td><?= $barber['rol']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>user/rate/<?php echo $barber['id']; ?>" class="btn btn-small btn-warning"><i class="far fa-star"></i></a>
                            <a href="<?php echo BASE_URL; ?>user/reviews/<?php echo $barber['id']; ?>" class="btn btn-small btn-info">VER CALIFICACIONES</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>