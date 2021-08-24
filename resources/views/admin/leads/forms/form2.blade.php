<h6>Documentación</h6>
<fieldset>
    <div class="card">
        <div class="card-header bg-primary text-white header-elements-inline">
            <h6 class="card-title">Documentación que acredita identidad</h6>
        </div>
        <div class="car-body ">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="d-block">DNI Frente</label>
                            <input name="dni_frente_file" id="dni_frente_file" type="file" onchange="readURL(this,'dni_frente');" class="form-input-styled required" data-fouc enctype="multipart/form-data">
                            <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                            <img id="dni_frente" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="d-block">DNI Dorso</label>
                            <input name="dni_dorso_file" id="dni_dorso_file"  type="file" onchange="readURL(this,'dni_dorso');" class="form-input-styled required" data-fouc enctype="multipart/form-data" data-fouc>
                            <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                            <img id="dni_dorso" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="d-block">Selfie con DNI:</label>
                            <input name="selfi_file" id="selfi_file" type="file" onchange="readURL(this,'selfi');" class="form-input-styled required" data-fouc enctype="multipart/form-data" data-fouc>
                            <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                            <img id="selfi" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                        </div>
                    </div> 
                </div>                
            </div>
        </div>   
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white header-elements-inline">
            <h6 class="card-title">Documentación acredita relación laboral</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <table class="table text-nowrap">
                            <thead>
                                <tr class="table-active text-nowrap">
                                    <th>Relación laboral</th>
                                    <th>Documentación requerida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Relacion de dependencia</td>
                                    <td>Dos a mas recibos de sueldo con firma del empleador</td>
                                </tr>
                                <tr>
                                    <td>Monotributista</td>
                                    <td>Facturas del último mes</td>
                                </tr>
                                <tr>
                                    <td>Jubilado</td>
                                    <td>Recibo de la Jubilación</td>
                                </tr>
                                <tr>
                                    <td>Otros</td>
                                    <td>Certificado de ingresos, boleto de venta de automotor o inmueble, acta societaria con distribucion de dividendos, entre otros.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="d-block">Archivo 1</label>
                        <input name="archivo_1_file" type="file" id="archivo_1_file" onchange="readURL(this,'archivo_1');" class="form-input-styled required" data-fouc enctype="multipart/form-data" data-fouc>
                        <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                        <img id="archivo_1" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="d-block">Archivo 2</label>
                        <input name="archivo_2_file" type="file" id="archivo_2_file" onchange="readURL(this,'archivo_2');" class="form-input-styled" data-fouc enctype="multipart/form-data" data-fouc>
                        <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                        <img id="archivo_2" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="d-block">Archivo 3</label>
                        <input name="archivo_3_file" data-fouc enctype="multipart/form-data" type="file" id="archivo_3_file" onchange="readURL(this,'archivo_3');" class="form-input-styled" data-fouc>
                        <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                        <img id="archivo_3" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                    </div>
                </div>
            </div>
        </div>			
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white header-elements-inline">
            <h6 class="card-title">Carga de servicios</h6>
        </div>
        <div class="car-body ">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="d-block">Servicio:</label>
                            <input name="servicio_file" data-fouc enctype="multipart/form-data" id="servicio_file" onchange="readURL(this,'servicio');" type="file" class="form-input-styled" data-fouc>
                            <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                            <img id="servicio" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                        </div>
                    </div> 
                </div>
            </div>
        </div>   
    </div>

    
</fieldset>
