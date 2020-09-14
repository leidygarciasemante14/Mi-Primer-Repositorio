<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"crossorigin=anonymous></script>
    <title>Página de Bienvenida</title>
</head>
<body class="bg-secondary">

<div class="alert alert-primary alert-dissmissible fade show p-5" role="alert">
        <h1>Bienvenido a la Página Principal de la Universidad</h1>
        <button type="button" class="close" data dissmiss="alert">
        <span aria-hidden="true">&times;</span>
        </button>
        <!--&times; PARA AGREGAR UNA X  -->
</div>

<div class="text-white">
    <h2>
    <strong>El usuario <?php echo htmlspecialchars($_POST['nombre']); ?> !.</strong> ha sido registrado correctamente
    </h2>
</div>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Datos del usuario <?php echo htmlspecialchars($_POST['nombre']); ?> !.</strong></h5>
    <p class="card-text">Documento de identidad: <?php echo htmlspecialchars($_POST['id']); ?> </p>
    <p class="card-text">Telefono: <?php echo htmlspecialchars($_POST['tel']); ?> </p>
    <p class="card-text">Valor del semestre: <?php echo htmlspecialchars($_POST['semestre']); ?> </p>
    <p class="card-text">Materia: <?php echo htmlspecialchars($_POST['materia']); ?> </p>
    <a href="index.php" class="btn btn-danger"><i class="fas fa-house-user"></i> Volver al inicio</a>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   
</body>
</html>