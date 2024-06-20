<div class="container my-5">
    <div class="row align-items-center">
        <div class="col">
            <h1>Reportes Creados</h1>
        </div>
        <div class="col text-end">
            <a href="<?php echo BASE_URL; ?>report/create">
                <button class="btn btn-success">Nuevo Reporte</button>
            </a>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Reporte</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reports as $report): ?>
                    <tr>
                        <th scope="row"><?= $report['id']; ?></th>
                        <td><?= $report['title']; ?></td>
                        <td><?= $report['description']; ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>report/show/<?php echo $report['id']; ?>" class="btn btn-small btn-info"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo BASE_URL; ?>report/edit/<?php echo $report['id']; ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?php echo BASE_URL; ?>report/delete/<?php echo $report['id']; ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>