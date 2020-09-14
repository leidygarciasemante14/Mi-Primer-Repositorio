<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"crossorigin=anonymous></script>
    <title>Inicio</title>
</head>
<body>
<section class="container-fluid pt-4 pb-4 bg-secondary text-white" >
    <article class="row justify-content-center">
        <form action="paginaPrincipal.php" method="post" class="p-5 bg-danger text-black">
        <label for="user" class="column-for-label-sm text-dark"><strong> Ingrese su nombre</strong></label>
            <div class="form-group">
                <div class="form-row justify-content-around">
                    <div class ="col-sm-1">
                    <i class="fa fa-user-circle-o fa-2x"></i>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                </div>
            </div>
            <label for="user" class="column-for-label-sm text-dark"><strong>Ingrese su Número de Identidad</strong> </label>
            <div class="form-group ">
                <div class="form-row justify-content-around">
                
                    <div class ="col-sm-1">
                    <i class="fas fa-id-card fa-2x"></i>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="id" placeholder="Cedula">
                    </div>
                </div>
            </div>
            <label for="user" class="column-for-label-sm text-dark"><strong> Ingrese su Número de Telefono</strong></label>
            <div class="form-group">
                <div class="form-row justify-content-around">
                
                    <div class ="col-sm-1">
                    <i class="fas fa-phone-square fa-2x"></i>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tel" placeholder="Telefono">
                    </div>
                </div>
            </div>
            <label for="user" class="column-for-label-sm text-dark"><strong>Ingrese el valor del semestre</strong></label>
            <div class="form-group">
                <div class="form-row justify-content-around ">
                
                    <div class ="col-sm-1">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="semestre" placeholder="Valor Semestre">
                    </div>
                </div>
            </div>
            <label for="user" class="column-for-label-sm text-dark"><strong> Ingrese la materia que va a inscribir</strong></label>
            <div class="form-group">
                <div class="form-row justify-content-around">
                
                    <div class ="col-sm-1">
                    <i class="fas fa-book fa-2x"></i>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="materia" placeholder="Materia">
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-block btn-success">
                    <i>Enviar los datos</i>
                
                </button>
            </div>
        </form>
        

    </article>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>