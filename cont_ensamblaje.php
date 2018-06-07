
<div class="wrapper-container">
    <div class="stepwizard">
        <hr>
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
                    <input maxlength="200" type="number" name="uno" required="required" class="form-control" placeholder="Cantidad"/>
                    <span title="Current quantity" class="badge badge-default stock-counter ng-binding"><?php echo $stock;?></span>
                    <input type="hidden" value="MICRO 5PIN USB CABLE" name="uno2">
                </div>
                
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-success setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Antenas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">MAIN FPC ANTENNA BLACK</label>
                    <input maxlength="200" type="number" name="dos" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="MAIN FPC ANTENNA BLACK" name="dos2">
                </div>
                <div class="form-group">
                    <label class="control-label">WIFI BT GPS ANT FPC BLACK</label>
                    <input maxlength="200" type="number" name="tres" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="WIFI BT GPS ANT FPC BLACK" name="tres2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-success setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Baterias</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">BATTERY</label>
                    <input maxlength="200" type="number" name="cuatro" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BATTERY" name="cuatro2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Botones</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">SIDEKEY FPC</label>
                    <input maxlength="200" type="number" name="cinco" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SIDEKEY FPC" name="cinco2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="panel-title">Cajas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX</label>
                    <input maxlength="200" type="number" name="seis" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="GIFT BOX" name="seis2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">SLEEVE GOLD</label>
                    <input maxlength="200" type="number" name="siete" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SLEEVE GOLD" name="siete2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">SLEEVE GRAY</label>
                    <input maxlength="200" type="number" name="ocho" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SLEEVE GRAY" name="ocho2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">FAJILLA X710 DORADO</label>
                    <input maxlength="200" type="number" name="nueve" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="FAJILLA X710 DORADO" name="nueve2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-6">
            <div class="panel-heading">
                 <h3 class="panel-title">Camaras</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">BACK CAMERA</label>
                    <input maxlength="200" type="number" name="diez" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BACK CAMERA" name="diez2">
                </div>
                <div class="form-group">
                    <label class="control-label">FRONT CAMERA</label>
                    <input maxlength="200" type="number" name="once" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="FRONT CAMERA" name="once2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-7">
            <div class="panel-heading">
                 <h3 class="panel-title">Carcasas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                    <label class="control-label">BACK COVER GOLD</label>
                    <input maxlength="200" type="number" name="doce" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BACK COVER GOLD" name="doce2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BACK COVER GRAY</label>
                    <input maxlength="200" type="number" name="trece" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BACK COVER GRAY" name="trece2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER GOLDEN</label>
                    <input maxlength="200" type="number" name="catorce" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BATTERY COVER GOLDEN" name="catorce2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER GREY</label>
                    <input maxlength="200" type="number" name="quince" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BATTERY COVER GREY" name="quince2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">CAMERA LENS</label>
                    <input maxlength="200" type="number" name="diesciseis" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="CAMERA LENS" name="diesciseis2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-8">
            <div class="panel-heading">
                 <h3 class="panel-title">Etiquetas</h3>
            </div>
            <div class="panel-body">
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY COVER STICKER</label>
                    <input maxlength="200" type="number" name="diescisiete" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BATTERY COVER STICKER" name="diescisiete2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">BATTERY SUPPORT LABEL</label>
                    <input maxlength="200" type="number" name="diesciocho" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BATTERY SUPPORT LABEL" name="diesciocho2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX LABELING</label>
                    <input maxlength="200" type="number" name="diescinueve" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="GIFT BOX LABELING" name="diescinueve2">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">GIFT BOX SEALING LABEL</label>
                    <input maxlength="200" type="number" name="veinte" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="GIFT BOX SEALING LABEL" name="veinte2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-9">
            <div class="panel-heading">
                 <h3 class="panel-title">Papeleria</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">CHARGER</label>
                    <input maxlength="200" type="number" name="veintiuno" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="CHARGER" name="veintiuno2">
                </div>
                <div class="form-group">
                    <label class="control-label">EARPHONE</label>
                    <input maxlength="200" type="number" name="veintidos" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="EARPHONE" name="veintidos2">
                </div>
                <div class="form-group">
                    <label class="control-label">MICRO 5PIN USB CABLE</label>
                    <input maxlength="200" type="number" name="veintitres" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="MICRO 5PIN USB CABLE" name="veintitres2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-10">
            <div class="panel-heading">
                 <h3 class="panel-title">PCBA</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">PCBA ASSEMBLED PARTS</label>
                    <input maxlength="200" type="number" name="veinticuatro" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="PCBA ASSEMBLED PARTS" name="veinticuatro2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-11">
            <div class="panel-heading">
                 <h3 class="panel-title">PCBA Secundario</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">SUB PCBA</label>
                    <input maxlength="200" type="number" name="veinticinco" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SUB PCBA" name="veinticinco2">
                </div>
                
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-12">
            <div class="panel-heading">
                 <h3 class="panel-title"> Pegamento</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">BACK CAMERA CONDUCTIVE GLUE</label>
                    <input maxlength="200" type="number" name="veintiseis" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BACK CAMERA CONDUCTIVE GLUE" name="veintiseis2">
                </div>
                <div class="form-group">
                    <label class="control-label">BACK CAMERA LENS ADHESIVE TAPE</label>
                    <input maxlength="200" type="number" name="veintisiete" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BACK CAMERA LENS ADHESIVE TAPE" name="veintisiete2">
                </div>
                <div class="form-group">
                    <label class="control-label">SUB PCBA TAPE</label>
                    <input maxlength="200" type="number" name="veintiocho" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SUB PCBA TAPE" name="veintiocho2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-13">
            <div class="panel-heading">
                 <h3 class="panel-title">Protectores</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">CAMERA LENS PROTECTIVE FILM</label>
                    <input maxlength="200" type="number" name="veintinueve" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="CAMERA LENS PROTECTIVE FILM" name="veintinueve2">
                </div>
                <div class="form-group">
                    <label class="control-label">SCREEN PROTECTOR</label>
                    <input maxlength="200" type="number" name="treinta" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SCREEN PROTECTOR" name="treinta2">
                </div>
                <div class="form-group">
                    <label class="control-label">TP PROTECTIVE FILM</label>
                    <input maxlength="200" type="number" name="treintayuno" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="TP PROTECTIVE FILM" name="treintayuno2">
                </div>
                <div class="form-group">
                    <label class="control-label">TPU PROTECTOR COVER</label>
                    <input maxlength="200" type="number" name="treintaydos" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="TPU PROTECTOR COVER" name="treintaydos2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
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
                    <input maxlength="200" type="number" name="treintaytres" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="ANTENNA PCB ADHESIVE FOAM" name="treintaytres2">
                </div>
                <div class="form-group">
                    <label class="control-label">BACK CAMERA FOAM</label>
                    <input maxlength="200" type="number" name="treintaycuatro" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BACK CAMERA FOAM" name="treintaycuatro2">
                </div>
                 <div class="form-group">
                    <label class="control-label">BB SHIELDING CASE</label>
                    <input maxlength="200" type="number" name="treintaycinco" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="BB SHIELDING CASE" name="treintaycinco2">
                </div>
                <div class="form-group">
                    <label class="control-label">CELLPHONE BAG</label>
                    <input maxlength="200" type="number" name="a" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="CELLPHONE BAG" name="a2">
                </div>
                 <div class="form-group">
                    <label class="control-label">DOWN MIC SILICONE COVER</label>
                    <input maxlength="200" type="number" name="b" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="DOWN MIC SILICONE COVER" name="b2">
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">DOWN SPEAKER BACK SEALING FOAM</label>
                    <input maxlength="200" type="number" name="c" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="DOWN SPEAKER BACK SEALING FOAM" name="c2">
                </div>
                 <div class="form-group">
                    <label class="control-label">DOWN SPEAKER FRONT SEALING FOAM</label>
                    <input maxlength="200" type="number" name="d" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="DOWN SPEAKER FRONT SEALING FOAM" name="d2">
                </div>
                <div class="form-group">
                    <label class="control-label">FLASH FPC</label>
                    <input maxlength="200" type="number" name="e" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="FLASH FPC" name="e2">
                </div>
                 <div class="form-group">
                    <label class="control-label">FRONT CAMERA FOAM</label>
                    <input maxlength="200" type="number" name="f" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="FRONT CAMERA FOAM" name="f2">
                </div>
                <div class="form-group">
                    <label class="control-label">LCD CONNECTOR FOAM 1</label>
                    <input maxlength="200" type="number" name="g" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="LCD CONNECTOR FOAM 1" name="g2">
                </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                    <label class="control-label">LCD CONNECTOR FOAM 2</label>
                    <input maxlength="200" type="number" name="h" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="LCD CONNECTOR FOAM 2" name="h2">
                </div>
                <div class="form-group">
                    <label class="control-label">MAIN FPC</label>
                    <input maxlength="200" type="number" name="i" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="MAIN FPC" name="i2">
                </div>
                 <div class="form-group">
                    <label class="control-label">MOTOR</label>
                    <input maxlength="200" type="number" name="j" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="MOTOR" name="j2">
                </div>
                <div class="form-group">
                    <label class="control-label">PCB GROUNDING SPONGE</label>
                    <input maxlength="200" type="number" name="k" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="PCB GROUNDING SPONGE" name="k2">
                </div>
                 <div class="form-group">
                    <label class="control-label">PROXIMITY SENSOR SILICONE COVER</label>
                    <input maxlength="200" type="number" name="l" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="PROXIMITY SENSOR SILICONE COVER" name="l2">
                </div>
                </div>
                </div>
                <div class="col-lg-12">
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">RF CABLE</label>
                    <input maxlength="200" type="number" name="m" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="RF CABLE" name="m2">
                </div>
                 <div class="form-group">
                    <label class="control-label">SCREW M1.4X0.3X2.5L</label>
                    <input maxlength="200" type="number" name="n" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SCREW M1.4X0.3X2.5L" name="n2">
                </div>
                <div class="form-group">
                    <label class="control-label">SCREW M1.4X0.3X3.0L</label>
                    <input maxlength="200" type="number" name="o" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SCREW M1.4X0.3X3.0L" name="o2">
                </div>
                 <div class="form-group">
                    <label class="control-label">SPEAKER</label>
                    <input maxlength="200" type="number" name="p" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SPEAKER" name="p2">
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">SPEAKER DOWN FPC</label>
                    <input maxlength="200" type="number" name="q" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SPEAKER DOWN FPC" name="q2">
                </div>
                
                 <div class="form-group">
                    <label class="control-label">SPEAKER GROUNDING CONDUCTIVE SPONGE</label>
                    <input maxlength="200" type="number" name="r" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SPEAKER GROUNDING CONDUCTIVE SPONGE" name="r2">
                </div>
                <div class="form-group">
                    <label class="control-label">SPEAKER SEALING BACK COVER FOAM</label>
                    <input maxlength="200" type="number" name="s" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SPEAKER SEALING BACK COVER FOAM" name="s2">
                </div>
                 <div class="form-group">
                    <label class="control-label">SPEAKER UP FPC</label>
                    <input maxlength="200" type="number" name="t" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="SPEAKER UP FPC" name="t2">
                </div>
                </div>
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">UP MIC SILICONE COVER</label>
                    <input maxlength="200" type="number" name="u" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="UP MIC SILICONE COVER" name="u2">
                </div>
                 <div class="form-group">
                    <label class="control-label">UP SPEAKER BACK SEALING FOAM</label>
                    <input maxlength="200" type="number" name="v" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="UP SPEAKER BACK SEALING FOAM" name="v2">
                </div>
                <div class="form-group">
                    <label class="control-label">UP SPEAKER FRONT SEALING FOAM</label>
                    <input maxlength="200" type="number" name="w" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="UP SPEAKER FRONT SEALING FOAM" name="w2">
                </div>
                </div>
                
</div>
                
</div>
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-15">
            <div class="panel-heading">
                 <h3 class="panel-title">Touch</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">FRONT HOSING TP ASSEMBLY BLACK</label>
                    <input maxlength="200" type="number" name="x" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="FRONT HOSING TP ASSEMBLY BLACK" name="x2">
                </div>
                <button class="btn btn-success nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-success setup-content" id="step-16">
            <div class="panel-heading">
                 <h3 class="panel-title">Pendiente</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">MMI</label>
                    <input maxlength="200" type="number" name="y" required="required" class="form-control" placeholder="Cantidad" />
                    <input type="hidden" value="MMI" name="y2">
                </div>
                <button class="btn btn-success pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </form>
</div>
