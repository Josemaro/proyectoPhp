<?php include("../template/cabecera.php");?>
<?php
    // print_r($_POST);
    // print_r($_FILES); //se usa para archivos, en este caso imagenes (es un objeto)
    /** 
    * Condicion para validar si no esta vacio
    * asigna a la variable $txtID el valor que recibe del input con name txtId
    */
    $txtID=(isset($_POST["txtId"]))?$_POST["txtId"]:"";
    $txtNombre=(isset($_POST["txtNombre"]))?$_POST["txtNombre"]:"";
    $txtIMG=(isset($_FILES["txtIMG"]['name']))?$_FILES["txtIMG"]['name']:"";
    $accion=(isset($_POST["accion"]))?$_POST["accion"]:"";
    echo $txtID."<br/>";
    echo $txtNombre."<br/>";
    echo $txtIMG."<br/>";
    // echo $accion."<br/>";


    /** 
    * En el case usa valores del "value" de los botones 
    */
    switch($accion) {
        case "agregar":
            echo "Boton agregar presionado";
            break;
        case "modificar":
            echo "Boton modificar presionado";
            break;
        case "cancelar":
            echo "Boton cancelar presionado";
            break;
    }

    

?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            DATOS DE LIBRO
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class = "form-group">
            <label for="txtID">ID:</label>
            <input type="text" class="form-control" name="txtId" id="txtId" placeholder="ID">
            </div>

            <div class = "form-group">
            <label for="txtNombre">NOMBRE: </label>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
            </div>

            <div class = "form-group">
            <label for="txtIMG">IMAGEN: </label>
            <input type="file" class="form-control" name="txtIMG" id="txtIMG">
            </div>

            <div class="btn-group" role="group" aria-label="">
            <button type="submit" name="accion" value="agregar" class="btn btn-success">AGREGAR</button>
            <button type="submit" name="accion" value="modificar" class="btn btn-warning">MODIFICAR</button>
            <button type="submit" name="accion" value="cancelar" class="btn btn-info">CANCELAR</button>
            </div>
        </div>
    </div>

    
    
    

</div>

<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th id="th1">ID</th>
                <th id="th2">NOMBRE</th>
                <th id="th3">IMAGEN</th>
                <th id="th4">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende</td>
                <td>imagen.jpg</td>
                <td>seleccionar | borrar </td>
            </tr>
        </tbody>
    </table>
</div>


<?php include("../template/pie.php");?>