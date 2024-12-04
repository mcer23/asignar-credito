<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar crédito-Listado</title>
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/extra.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../html/home.html">Inicio</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../html/captura.html">Captura</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../html/list.html">Lista</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Evaluación</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../index.html"><img src="../assets/ico/logout.png" alt="logOut_ico"></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
      
        <section class="head--section">
                <div class="head--title">
                    <img src="../assets/img/logo.png" alt="logo_img">
                    <h1>Listado de prospectos</h1>
                </div>
        </section>
        <section class="table--section">
        <table>
            <thead>
                <tr class="table--tr">
                    <th>ID</th>
                    <th>Estatus</th>
                    <th>Nombre(s)</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                </tr>
            </thead>
        </section>
        
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "listaprospectos";
                $connection = new mysql($servername, $username, $password, $dbname);
                if ($connection->connect_error) {
                    die ("Coneccion fallida". $connection->connect_error);
                } 
                
                $sql = "SELECT * FROM clients";
                $result = $connection ->query($sql);

                if (!$result) {
                    die ("Invalid query". $connection->connect_error);
                }

                while ($row = $result -> fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row["ID"]. "</td>
                    <td>" . $row["ESTATUS"]. "Pendiente</td>
                    <td>" . $row["NOMBRES"]. "Mila</td>
                    <td>" . $row["PRIMER_APELLIDO"]. "Lopez</td>
                    <td>" . $row["SEGUNDO_APELLIDO"]. "Perez</td>
                    <td>
                        <a href='ver'> Ver</a>
                    </td>
                </tr>";

                }

                
                ?>
            </tbody>
        </table>

    </main>
    
</body>
</html>