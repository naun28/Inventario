
<div class="wrapper-container">
    <hr style="margin-top: -1%;">
    <div class="stepwizard">
        <div class=" setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Accesorios Generales</small></p>

            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Antenas</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>Baterias</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small>Botones</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p><small>Cajas</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                <p><small>Camaras</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                <p><small>Carcasa</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                <p><small>Etiquetas</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
                <p><small>Papeleria</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">10</a>
                <p><small>PCBA</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">11</a>
                <p><small>PCBA Secundario</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-12" type="button" class="btn btn-default btn-circle" disabled="disabled">12</a>
                <p><small>Pegamentos</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-13" type="button" class="btn btn-default btn-circle" disabled="disabled">13</a>
                <p><small>Protectores</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-14" type="button" class="btn btn-default btn-circle" disabled="disabled">14</a>
                <p><small>Refacciones pequeñas</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-15" type="button" class="btn btn-default btn-circle" disabled="disabled">15</a>
                <p><small>Touch</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-16" type="button" class="btn btn-default btn-circle" disabled="disabled">16</a>
                <p><small>Pendiente</small></p>
            </div>
        </div>
        
    </div>
    <hr>
    <form role="form" method="POST" action="compara.php">
        <label class="control-label">Modelo</label>
         <input type="text" required="required" class="form-control col-md-2" name="modelo" placeholder="Modelo"/>
         <input type="hidden" required="required" class="form-control col-md-2" name="cantidad" placeholder="Cantidad" value="1" /><br><br><br><br>
        <div class="panel panel-success setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Accesorios Generales</h3>
            </div>
            <div class="panel-body">
                
                <div class="form-group">
                    
                    <label class="control-label">MICRO 5PIN USB CABLE</label>
                    <input type="number" required="required" class="form-control col-md-6" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        
        <div class="panel panel-success setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Antenas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">MAIN FPC ANTENNA BLACK</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 24"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="dos" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                  
                </div><br><br>
                <div class="form-group">
                    <label class="control-label">WIFI BT GPS ANT FPC BLACK</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 86"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="tres" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        
        <div class="panel panel-success setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Baterias</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">BATTERY</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 18"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="cuatro" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Botones</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">SIDEKEY FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 27"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="cinco" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="panel-title">Cajas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 23"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="seis" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">SLEEVE GOLD</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 70"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="siete" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">SLEEVE GRAY</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 71"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="ocho" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">FAJILLA X710 DORADO</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 75"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="nueve" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-6">
            <div class="panel-heading">
                 <h3 class="panel-title">Camaras</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">BACK CAMERA</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 15"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="diez" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">FRONT CAMERA</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 54"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="once" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-7">
            <div class="panel-heading">
                 <h3 class="panel-title">Carcasas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                    <label class="control-label">BACK COVER GOLD</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 17"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="doce" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BACK COVER GRAY</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 40"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="trece" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER GOLDEN</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 41"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="catorce" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER GREY</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 42"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="quince" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">CAMERA LENS</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 45"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="diesciseis" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-8">
            <div class="panel-heading">
                 <h3 class="panel-title">Etiquetas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER STICKER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 19"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="diescisiete" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY SUPPORT LABEL</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 43"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="diesciocho" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX LABELING</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 57"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="diescinueve" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX SEALING LABEL</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 58"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veinte" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-9">
            <div class="panel-heading">
                 <h3 class="panel-title">Papeleria</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">CHARGER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 21"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veintiuno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <div class="form-group">
                    <label class="control-label">EARPHONE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 52"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veintidos" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-10">
            <div class="panel-heading">
                 <h3 class="panel-title">PCBA</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">PCBA ASSEMBLED PARTS</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 25"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veintitres" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-11">
            <div class="panel-heading">
                 <h3 class="panel-title">PCBA Secundario</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">SUB PCBA</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 28"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veinticuatro" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-12">
            <div class="panel-heading">
                 <h3 class="panel-title"> Pegamento</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">BACK CAMERA CONDUCTIVE GLUE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 16"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veinticinco" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">BACK CAMERA LENS ADHESIVE TAPE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 39"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veintiseis" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SUB PCBA TAPE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 78"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veintisiete" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-13">
            <div class="panel-heading">
                 <h3 class="panel-title">Protectores</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">CAMERA LENS PROTECTIVE FILM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 20"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veintiocho" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SCREEN PROTECTOR</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 67"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="veintinueve" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">TP PROTECTIVE FILM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 79"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="treinta" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">TPU PROTECTOR COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 80"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="treitayuno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-14">
            <div class="panel-heading">
                 <h3 class="panel-title">Refacciones pequeñas</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">ANTENNA PCB ADHESIVE FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 13"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="treintaydos" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">BACK CAMERA FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 38"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="treintaytres" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">BB SHIELDING CASE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 44"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="treintaycuatro" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">CELLPHONE BAG</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 46"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="treintaycinco" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">DOWN MIC SILICONE COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 47"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="a" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">DOWN SPEAKER BACK SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 49"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="b" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">DOWN SPEAKER FRONT SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 50"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="c" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">FLASH FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 53"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="d" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">FRONT CAMERA FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 56"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="e" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">LCD CONNECTOR FOAM 1</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 59"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="f" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                    <label class="control-label">LCD CONNECTOR FOAM 2</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 60"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="g" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">MAIN FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 61"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="h" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">MOTOR</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 63"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="i" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">PCB GROUNDING SPONGE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 74"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="j" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">PROXIMITY SENSOR SILICONE COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 65"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="k" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">RF CABLE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 66"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="l" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">SCREW M1.4X0.3X2.5L</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 68"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="m" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SCREW M1.4X0.3X3.0L</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 69"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="n" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">SPEAKER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 72"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="o" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">SPEAKER DOWN FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 73"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="p" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                
                 <div class="form-group">
                    <label class="control-label">SPEAKER GROUNDING CONDUCTIVE SPONGE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 74"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="q" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SPEAKER SEALING BACK COVER FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 76"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="r" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">SPEAKER UP FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 77"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="s" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">UP MIC SILICONE COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 81"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="t" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">UP SPEAKER BACK SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 82"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="u" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">UP SPEAKER FRONT SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 83"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="v" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>    
                </div>           
                </div><BR><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
                </div>
                
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-15">
            <div class="panel-heading">
                 <h3 class="panel-title">Touch</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">FRONT HOSING TP ASSEMBLY BLACK</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 22"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="w" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-16">
            <div class="panel-heading">
                 <h3 class="panel-title">Pendiente</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">MMI</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 64"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="x" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success pull-right" type="submit">Registrar</button>
            </div>
        </div>
    </form>
</div>
