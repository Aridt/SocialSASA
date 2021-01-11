<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Publicaciones SASA</title>
</head>

<body>
    <br>
    <br>

    <div class="container " aria-label="Basic mixed styles example">
    <input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
        <h2 style="text-align: center">Datos de usuario Social-SASA</h2>
        <br>

        <table class="table table-hover table-striped">

            <thead class="table-dark">
                <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">SITIO WEB</th>
                    <th scope="col">EMPRESA</th>

                </tr>
            </thead>

            <tr>
                <td>
                    <p class="h5 "><?php echo $datos->name ?></p>
                </td>
                <td>
                    <p class="h5 "><?php echo $datos->username ?></p>
                </td>
                <td>
                    <p class="h5 "><?php echo $datos->email ?></p>
                </td>
                <td>
                    <p class="h6 "><?php echo "Calle: " . $datos->address->street . "," . $datos->address->suite . "</br>" . "Ciudad: " . $datos->address->city . "</br>" . "Código Postal: " . $datos->address->zipcode ?></p>
                </td>
                <td>
                    <p class="h5 "><?php echo $datos->phone ?></p>
                </td>
                <td>
                    <p class="h5 "><?php echo $datos->website ?></p>
                </td>
                <td>
                    <p class="h5 "><?php echo $datos->company->name ?></p>
                </td>

            </tr>



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