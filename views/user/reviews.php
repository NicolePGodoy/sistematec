<div class="container my-5">
    <div class="row align-items-center">
        <div class="col text-center">
            <h1>Reviews de Barbero</h1>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Puntos</th>
                    <th scope="col">Comentario</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($reviews)): ?>
                    <?php foreach ($reviews as $review): ?>
                        <tr>
                            <td><?= $review['rating']; ?></td>
                            <td><?= $review['comment']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>