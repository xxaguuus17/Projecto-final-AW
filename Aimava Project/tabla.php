<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <title>Aimava</title>
</head>
<body>
<div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="./index.php"><img src="imgs/logo.png" alt="logo_aimava" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#home">Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#about">Nosotros</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#service">Servicios</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#hiw">Como trabajamos</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#wcs">Comentarios</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contacto</a>
                     </li>
                     <li class="nav-item .search-container">
                        <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                        <form>
                           <input type="search" placeholder="Search">
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <div id="tabla_info" class="tabla_info">
        <h3>Inscripciones</h3>
      </div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
        </tr>
        </thead>
        <?php
        include("./actions/con_mysql.php");
        
        $sql = "Select * from suscribete";
        $result = mysqli_query($conex,$sql); 
      while($mostrar=mysqli_fetch_array($result)){

        ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $mostrar['id'] ?></th>
                <td><?php echo $mostrar['nombre']  ?></td>
                <td><?php echo $mostrar['adress']  ?></td>
                <td><?php echo $mostrar['num_telf']  ?></td>
                
            </tr>
        
        </tbody>
        <?php
        }
        ?>
    </table>



    
</body>
</html>