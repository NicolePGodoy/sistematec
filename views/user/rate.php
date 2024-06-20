<div class="container my-5">
    <div class="row align-items-center">
        <div class="col text-center">
            <h1>Puntuar Barbero</h1>
        </div>
    </div>
</div>
<section class="py-5 mx-4 mb-5 container-form">
    <form class="px-4 row" method="post" action="<?php echo BASE_URL; ?>user/rate/<?php echo $user['id']; ?>">
        <div class="mb-4 col-md-6">
            <input class="form-control" type="text" value="<?= $user['name'] . ' ' . $user['lastname']?>" readonly>
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
            <textarea name="comment" class="form-control" rows="10" required></textarea>   
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary boton-oscuro px-5 py-2">Puntuar</button>
        </div>
    </form>
</section>