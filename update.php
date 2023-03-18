<?php include "./header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <a href="index.php" class="btn btn-outline-info">
                            <i class="fa-solid fa-angles-left"></i> Regresar
                        </a>
                        <h2>Actualizar Registro </h2>

                        <form action="" method="post">
                            <label for="last-name">Apellido paterno</label>
                            <input type="text" class="form-control" id="last-name" name="last-name">
                            <label for="second-name">Apellido materno</label>
                            <input type="text" class="form-control" id="second-name" name="second-name">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <label for="birthdate">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                            <button class="btn btn-warning mt-3">
                                <i class="fa-solid fa-floppy-disk"></i> Actualizar
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "./scripts.php"; ?>