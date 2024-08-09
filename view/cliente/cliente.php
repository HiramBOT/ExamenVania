<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/assets/css/stylesMy.css">
</head>
<body style="background-color: lightskyblue;">
    <h1 class="page-header" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#5DACCD ">EXAMEN FINAL VANIA </h1>
    <a class="btn btn-primary pull-right" href="?c=cliente&a=Crud" style="background-color:purple;">Agregar</a>
    <br><br>

    <table class="table table-striped table-hover" id="tabla">
        <thead>
            <tr>
                <th style="width:120px; background-color: lightpink; color:#fff ">DNI</th>
                <th style="width:180px; background-color: lightpink; color:#fff">Nombre</th>
                <th style="background-color:lightpink; color:#fff">Apellido</th>
                <th style="background-color:lightpink; color:#fff">Correo</th>
                <th style="width:120px; background-color:lightpink; color:#fff">Telefono</th>
                <th style="width:60px; background-color:lightpink; color:#fff"> Color Favorito</th>
                <th style="width:60px; background-color: lightpink; color:#fff"> Sexo</th>
                <th style="width:60px; background-color: lightpink; color:#fff"> Direccion</th>
                <th style="width:60px; background-color: lightpink; color:#fff"> </th>
                <th style="width:60px; background-color: lightpink; color:#fff"> </th>
                
            </tr>
        </thead>
        <tbody style="color: white;">
            <?php foreach($this->model->Listar() as $r): ?>
            <tr style="background-color: lightcoral;">
                <td><?php echo $r->dni; ?></td>
                <td><?php echo $r->Nombre; ?></td>
                <td><?php echo $r->Apellido; ?></td>
                <td><?php echo $r->Correo; ?></td>
                <td><?php echo $r->Telefono; ?></td>
                <td><?php echo $r->Color; ?> </td>
                <td><?php echo $r-> Sexo; ?></td>
                <td><?php echo $r->Direccion; ?></td>
                <td>
                    <a style="background-color:limegreen" class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                </td>
                <td>
                    <a style="background-color: red;" class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabla').DataTable();
        });
    </script>
</body>
</html>
