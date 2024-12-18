<?php
$ID="";
$nombres="";
$primer_apellido="";
$segundo_apellido="";
$telefono="";

$errorMessage= "";
$successMessage="";

if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $ID=$_POST["ID"];
    $nombres=$_POST["nombre"];
    $primer_apellido=$_POST["primer_apellido"];
    $segundo_apellido=$_POST["segundo_apellido"];
    $telefono=$_POST["telefono"];

    do{
        if (empty(($nombres)||($primer_apellido))){
            $errorMessage="Todos los campos son necesarios";
            break;
        }
        $ID="";
        $nombres="";
        $primer_apellido="";
        $segundo_apellido="";
        $telefono="";

        $successMessage="Prospecto guardado correctamente";


    } while (false);
        
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar crédito-Captura</title>
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
                    <a class="nav-link" aria-current="page" href="../html/list.html">Listado</a>
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
                <h1>Captura nuevo prospecto</h1>
                <p>Los campos marcados con (*) son obligatorios.</p>
            </div>
        </section>
        <?php
        if (!empty($errorMessage)){
            echo "
            <div>
                <span></span><strong>$errorMessage</strong>
            </div>
            ";
            
        }
        
        ?>
        <?php
        if (!empty($successMessage)){
            echo "
            <div>
                <span></span><strong>$successMessage</strong>
            </div>
            ";
            
        }
        
        ?>
        <section class="form--section">
          <form method="post">
            <div class="form--input">
                <label for="nombres" class="#">Nombre(s)*</label>
                <input type="text" class="" id="nombres" placeholder="Ej. Juan Carlos" value="<?php echo $nombres; ?>" required>
            </div>
            <div class="form--input">
                <label for="primerApellido" class="#">Primer apellido*</label>
                <input type="text" class="" id="primerApellido" placeholder="Ej. Perez" value="<?php echo $primer_apellido; ?>" required>
            </div>
            <div class="form--input">
                <label for="segundoApellido" class="#">Segundo apellido</label>
                <input type="text" class="" id="segundoApellido" placeholder="Ej. González" value="<?php echo $segundo_apellido; ?>" >
            </div>
            <div class="form--input">
                <label for="telefono" class="#">Teléfono</label>
                <input type="number" class="" id="telefono" maxlength="10" placeholder="Ej. 6672839027" value="<?php echo $telefono; ?>">
            </div>
            <div class="form--input">
                <label for="agregar" class="#">+ Agregar documentos</label>
                <input type="file" class="" id="agregar" accept="image/*, .pdf" multiple>
            </div>
            <div class="form-input-button ">
                <button type="submit">Guardar</button>
                <a href="../html/home.html">Cancelar</a>
            </div>
        </form>
        </section>
        
    </main>
    <footer>
      <p>© Mcer, 2024. Todos los derechos reservados</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>