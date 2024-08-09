<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color: lightskyblue;">
    <h1 class="page-header" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#5DACCD ">
        <?php echo $cliente->id != null ? $cliente->Nombre : 'Nuevo Registro'; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="?c=cliente">Cliente</a></li>
        <li class="active"><?php echo $cliente->id != null ? $cliente->Nombre : 'Nuevo Registro'; ?></li>
    </ol>
    <form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $cliente->id; ?>" />
        <div class="form-group">
            <label>DNI</label>
            <input type="text" name="dni" value="<?php echo $cliente->dni; ?>" class="form-control" placeholder="Ingrese su dni" required>
        </div>
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="Nombre" value="<?php echo $cliente->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="Apellido" value="<?php echo $cliente->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" required>
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="text" name="Correo" value="<?php echo $cliente->Correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" required>
        </div>
        <div class="form-group">
            <label>Telefono</label>
            <input type="text" name="telefono" value="<?php echo $cliente->Telefono; ?>" class="form-control" placeholder="Ingrese su telefono" required>
        </div>
        <div class="form-group">
            <label>Sexo</label>
            <input type="text" name="Sexo" value="<?php echo $cliente->Sexo; ?>" class="form-control" placeholder="Ingrese su Sexo" required>
        </div>
        <div class="form-group">
            <label>Direccion</label>
            <input type="text" name="Direccion" value="<?php echo $cliente->Direccion; ?>" class="form-control" placeholder="Ingrese su Direccion" required>
        </div>
        <div class="form-group">
            <label>Color</label>
            <input type="text" name="Color" value="<?php echo $cliente->Color; ?>" class="form-control" placeholder="Ingrese su Color Favorito" required>
        </div>
        <hr />
        <div class="text-right">
            <button class="btn btn-primary" style="background-color: purple;">Guardar</button>
        </div>
    </form>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#frm-alumno").submit(function(){
                return $(this).validate();
            });
        });
    </script>
</body>
</html>
