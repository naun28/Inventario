
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
        <div class="panel panel-success setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Accesorios Generales</h3>
            </div>
            <div class="panel-body">
                
                <div class="form-group">
                    
                    <label class="control-label">MICRO 5PIN USB CABLE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                  
                </div><br><br>
                <div class="form-group">
                    <label class="control-label">WIFI BT GPS ANT FPC BLACK</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">SLEEVE GOLD</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">SLEEVE GRAY</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">FAJILLA X710 DORADO</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">FRONT CAMERA</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BACK COVER GRAY</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER GOLDEN</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER GREY</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">CAMERA LENS</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY SUPPORT LABEL</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX LABELING</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX SEALING LABEL</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">EARPHONE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">MICRO 5PIN USB CABLE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">BACK CAMERA LENS ADHESIVE TAPE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SUB PCBA TAPE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SCREEN PROTECTOR</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">TP PROTECTIVE FILM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">TPU PROTECTOR COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">BACK CAMERA FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">BB SHIELDING CASE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">CELLPHONE BAG</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">DOWN MIC SILICONE COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">DOWN SPEAKER BACK SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">DOWN SPEAKER FRONT SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">FLASH FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">FRONT CAMERA FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">LCD CONNECTOR FOAM 1</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                    <label class="control-label">LCD CONNECTOR FOAM 2</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">MAIN FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">MOTOR</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">PCB GROUNDING SPONGE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">PROXIMITY SENSOR SILICONE COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">SCREW M1.4X0.3X2.5L</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SCREW M1.4X0.3X3.0L</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">SPEAKER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">SPEAKER DOWN FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                
                 <div class="form-group">
                    <label class="control-label">SPEAKER GROUNDING CONDUCTIVE SPONGE</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">SPEAKER SEALING BACK COVER FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">SPEAKER UP FPC</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">UP MIC SILICONE COVER</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">UP SPEAKER BACK SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div>
                <div class="form-group">
                    <label class="control-label">UP SPEAKER FRONT SEALING FOAM</label>
                    <input type="number" min="1" max="<?php 
                        require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
                        require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
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
                        $q = "SELECT id_producto,nombre_producto,stock FROM products where id_producto = 62"; 
                        $rs = mysqli_query($con,$q);
                        $row=mysqli_fetch_array($rs);
                        
                            echo $row['stock'];
                        ?>" name="uno" required="required" class="form-control col-md-6" placeholder="Cantidad"/>
                </div><br><br>
                <button class="btn btn-success pull-right" type="submit">Registrar</button>
            </div>
        </div>
    </form>
</div>
