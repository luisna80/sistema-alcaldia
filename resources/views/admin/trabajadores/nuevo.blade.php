
@extends('admin.plantilla.main')
@section('titulo','Crear cargo')

@section('content')


<div class="col-xs-12 col-sm-9 content">
    <div class="panel panel-info">
        <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Nuevo Trabajador</h3>
        </div>
<div class="panel-body">
                  
    <div class="content-row">

        <div class="panel panel-primary">
            <div class="panel-heading">
                  <div class="panel-title">
                    <b>Crear Nuevo Trabajador</b>
                  </div>


              </div>

  <div class="panel-body">
                      
                      <form method="POST" action="{{ route('trabajadores.store') }}" 
                      class="form-horizontal">
                       @csrf
                      @error('cedula')
                     

        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>ERROR</strong>  Este trabajador ya esta Guardado o 
                         la cedula contener almenos 7 caracter 
        </div>                            
                      @enderror
                      <!-- primera fila-->
                        <div class="row">
                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Nacionalidad</label>
                          <div class="col-md-10">
                            <select name="nacionalidad" class="form-control" required="required">
                              <option value="V">VENEZOLANO(A)</option>
                              <option value="E">EXTRANJERO(A)</option>
                            </select>
                          </div>
                        </div>
                        </div>

                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Cedula</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="cedula" class="form-control" name="cedula">
                          </div>
                        </div>
                        </div>

                          <div class="col-lg4 col-md-4 col-xl-4">
                          <div class="form-group">
                          <label class="col-lg-8">Primer Nombre</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="primer nombre" class="form-control" name="pnombre" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>
                      </div>

                       <!-- fin primera fila-->
                                             <!-- primera fila-->
                        <div class="row">
                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Segundo Nombre</label>
                          <div class="col-md-10">
                        <input type="text" required="" placeholder="segundo nombre" class="form-control" name="snombre" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>

                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Primer Apellido</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="primer apellido" class="form-control" name="papellido" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>

                          <div class="col-lg4 col-md-4 col-xl-4">
                          <div class="form-group">
                          <label class="col-lg-8">Segundo Apellido</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="segundo apellido" class="form-control" name="sapellido" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>
                      </div>

                       <!-- fin primera fila-->
                                             <!-- primera fila-->
                        <div class="row">
                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Genero</label>
                          <div class="col-md-10">
                            <select name="genero" class="form-control" required="required">
                              <option value="HOMBRE">HOMBRE</option>
                              <option value="MUJER">MUJER</option>
                            </select>
                          </div>
                        </div>
                        </div>

                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Fecha de Nacimiento</label>
                          <div class="col-md-10">
                            <input type="date" required="" placeholder="cedula" class="form-control" name="fecha_nac">
                          </div>
                        </div>
                        </div>

                          <div class="col-lg4 col-md-4 col-xl-4">
                          <div class="form-group">
                          <label class="col-lg-8">Estado Civil</label>
                          <div class="col-md-10">
                            <select name="edo_civil" class="form-control" required="required">
                             <option value="SOLTERO">SOLTERO(A)</option>
                             <option value="CASADO">CASADO(A)</option>
                             <option value="SOLTERO">SOLTERO(A)</option>
                             <option value="VIUDO">VIUDO(A)</option>
                            </select>
                          </div>
                        </div>
                        </div>
                      </div>

                       <!-- fin primera fila-->
                                             <!-- primera fila-->
                        <div class="row">
                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Correo Institucional</label>
                          <div class="col-md-10">
                       <input type="email" required="" placeholder="correo institucional" class="form-control" name="correo_inst">
                          </div>
                        </div>
                        </div>

                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Correo personal</label>
                          <div class="col-md-10">
                            <input type="email" required="" placeholder="correo personal" class="form-control" name="correo_per">
                          </div>
                        </div>
                        </div>

                          <div class="col-lg4 col-md-4 col-xl-4">
                          <div class="form-group">
                          <label class="col-lg-8">Estado</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Estado donde Reside" class="form-control" name="estado" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>
                      </div>

                       <!-- fin primera fila-->
                        <!-- primera fila-->
                        <div class="row">
                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Municipio</label>
                          <div class="col-md-10">
                       <input type="text" required="" placeholder="Municipio donde Reside" class="form-control" name="municipio" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>

                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Parroquia</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Parroquia donde Reside" class="form-control" name="parroquia" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>

                          <div class="col-lg4 col-md-4 col-xl-4">
                          <div class="form-group">
                          <label class="col-lg-8">Dirección</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Direccion donde Reside" class="form-control" name="direccion" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                        </div>
                      </div>

                       <!-- fin primera fila-->
                        <!-- primera fila-->
                        <div class="row">
                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Telefono principal</label>
                          <div class="col-md-10">
                       <input type="text" required="" placeholder="Telefono principal" class="form-control" name="tlf_casa">
                          </div>
                        </div>
                        </div>

                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Telefono movil</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Telefono movil" class="form-control" name="tlf_personal">
                          </div>
                        </div>
                        </div>

                          <div class="col-lg4 col-md-4 col-xl-4">
                          <div class="form-group">
                          <label class="col-lg-8">Telefono oficina</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="Telefono oficina" class="form-control" name="tlf_oficina">
                          </div>
                        </div>
                        </div>
                      </div>

                       <!-- fin primera fila-->
                        <!-- primera fila-->
                        <div class="row">
                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">Banco</label>
                          <div class="col-md-10">
                          <select name="banco" class="form-control" required="required">
                              <option value="BANCO DE VENEZUELA">BANCO DE VENEZUELA</option>
                              
                            </select>
                          </div>
                        </div>
                        </div>

                        <div class="col-lg4 col-md-4 col-xl-4">
                        <div class="form-group">
                          <label class="col-lg-8">N° de Cuenta</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="N° de Cuenta" class="form-control" name="ncuenta">
                          </div>
                        </div>
                        </div>

                          <div class="col-lg4 col-md-4 col-xl-4">
                          <div class="form-group">
                          <label class="col-lg-8">Fecha de Ingreso</label>
                          <div class="col-md-10">
                            <input type="date" required="" placeholder="Telefono oficina" class="form-control" name="fecha_ingreso">
                          </div>
                        </div>
                        </div>
                      </div>

                       <!-- fin primera fila-->
                       
                       <div class="row form-group">
                          <div class="col-lg-12">
                            <button class="btn btn-info" type="submit">Guardar</button>
                          </div>
                        </div>
                       
                     </form>
                            </div>

                      </div>

                


                  



                              
                  </div><!-- row-->
              </div><!-- panel body -->
            </div><!-- info-->
        </div><!-- content -->
    </div>
  </div>
@endsection
