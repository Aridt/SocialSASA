<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Social SASA</title>
</head>

<body>
    <br>
    <br>

    <div style="max-width: 700px; " class="container " aria-label="Basic mixed styles example">
        <h2 style="text-align: center">Listado De Usuarios Social-SASA</h2>
        <br>

        <table class="table table-hover table-striped">

            <thead class="table-dark">
                <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">OPCIONES</th>

                </tr>
            </thead>
            <?php foreach ($datos as $row) : ?>

                <tr>
                    <td>
                        <p class="h5 "><?php echo $row->name ?></p>
                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a class="btn btn-dark" href="index.php/datos/<?php echo $row->id ?>" role="button">Datos</a>
                            <a class="btn btn-primary" href="index.php/publicaciones/<?php echo $row->id ?>" role="button">Publicaciones</a>
                        </div>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>



    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>