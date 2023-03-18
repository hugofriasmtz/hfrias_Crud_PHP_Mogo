<?php 

    require_once "./classes/connection.php";
    require_once "./classes/crud.php";
    $crud = new crud();
    $data = $crud->showdata();

?>

<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Crud con MongoDB y PHP</h2>
                    <a href="./add.php" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Agrear nuevo registro
                    </a>
                    <hr>
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data as $item){
                            ?>
                                <tr>
                                    <td><?php echo $item->firstName;?>  </td>
                                    <td><?php echo $item->secondName;?>  </td>
                                    <td><?php echo $item->name;?>  </td>
                                    <td><?php echo $item->birthday;?>  </td>
                                    <td class="text-center">
                                        <form action="" method="post">
                                            <button class="btn btn-warning">
                                                <i class="fa-solid fa-user-pen"></i> Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="" method="post">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-user-xmark"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>
