<html>
<!--------------------------- FORMULARIO QUE AGREGA LOS SERVICIOS DE LAS TIENDAS--------------------------->
    <body>
        <div class="container">
            <br>
            <?php
                include("php/conexion.php");
                $sql="SELECT `NOMBRESERVICIO`, `PRECIOSERVICIO`, `NUEVOSERVICIO`, `ESTADOSERVICIO`, `DESCRIPCION`FROM `servicios` WHERE CODSERVICIO='$codigo'";
                $result= mysqli_query($dbconn, $sql);
                $row=mysqli_fetch_array($result);
            ?>
            <h4>Editar servicio: <?php echo $row[0];?></h4>
            <form enctype="multipart/form-data" id="datosServiciosAgregar">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input id="idLocal" name="idLocal" type="hidden" value="<?php echo $codigo;?>"> 
                        <label>Nombre del servicio</label>
                        <input type="text" maxlength="100" class="form-control" id="nombreServicio" name="nombreServicio" required value="<?php echo $row[0]; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Precio del servicio</label>
                        <input type="number" maxlength="100" class="form-control" id="precioServicio" name="precioServicio" required value="<?php echo $row[1]; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Descripción</label>
                        <textarea  rows="5" type="text" id="descripcionServicio" name="descripcionServicio" class="form-control" minlength="100" maxlength="200" required><?php echo $row[4]; ?></textarea>
                    </div>
                </div>
                <div class="form-row">
                <script>
                    $(document).ready(function(){
                        $('#estadoServicio > option[value="<?php echo $row[3]?>"]').attr('selected', 'selected');
                    });
                    $(document).ready(function(){
                        $('#servicioNuevo > option[value="<?php echo $row[2]?>"]').attr('selected', 'selected');
                    });
                </script>
                    <div class="form-group col-md-6">
                    <label>Estado del servicio</label>
                    <select id="estadoServicio" name="estadoServicio" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                    <label>Servicio nuevo</label>
                    <select id="servicioNuevo" name="servicioNuevo" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="alert alert-info form-group col-md-12" role="alert">
                          Agregar hasta 5 imágenes jpg, png, gif, jpeg. 
                        </div>
                    <div class="form-group col-md-4" id="listas">
                        <label><b>Agregar imagen 1</b></label>
                        <input type="file" name="campo1" id="campo1" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4" id="listas">
                        <label><b>Agregar imagen 2</b></label>
                        <input type="file" name="campo2" id="campo2" class="form-control">
                    </div>
                    <div class="form-group col-md-4" id="listas">
                        <label><b>Agregar imagen 3</b></label>
                        <input type="file" name="campo3" id="campo3" class="form-control">
                    </div>
                    <div class="form-group col-md-4" id="listas">
                        <label><b>Agregar imagen 4</b></label>
                        <input type="file" name="campo4" id="campo4" class="form-control">
                    </div>
                    <div class="form-group col-md-4" id="listas">
                        <label ><b>Agregar imagen 5</b></label>
                        <input type="file" name="campo5" id="campo5" class="form-control">
                    </div>
                </div>
                <div id="respuesta" style="text-align:center"></div>
                <button type="submit" id="guardarServicios" class="btn btn-danger mx-auto d-block">Guardar</button>
            </form>
            <br>
        </div>
        <script type="text/javascript" src="js/funcionesJava.js"></script>
    </body>
</html>