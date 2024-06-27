<section class="py-5 mx-4 mb-5 container-form">
    <!-- se crea un formulario que enlaza con la url a gendasfunctions.php con metodo post -->
    <form class="px-md-4" action="/php/reports.php" method="POST">
        <div class="text-center mb-4">
            <h2>Crear Reporte</h2>
        </div>
        <div class="mb-4">
            <!-- se generan los input para llenas los campos -->
            <input type="text" class="form-control input-form" id="title" name="title" placeholder="Titulo" required>
        </div>
        <textarea class="form-control mb-4" id="description" name="description" rows="5" placeholder="Describe que hace el reporte" required></textarea>
        <textarea class="form-control mb-4" id="query" name="query" rows="10" placeholder="Query que trae los datos del reporte" required></textarea>
        <!-- se crea el boton hidden que enviará la informacion retenida en el formulario  -->
        <div class="d-flex justify-content-end">
            <button type="submit" name="crear" class="btn btn-primary boton-oscuro px-5 py-2">Crear</button>
        </div>
    </form>
</section>