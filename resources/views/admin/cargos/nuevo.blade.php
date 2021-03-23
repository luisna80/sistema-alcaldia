
@extends('admin.plantilla.main')
@section('titulo','Crear cargo')

@section('content')


          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Nuevos Cargos</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 <div class="content-row">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title"><b>Crear Nuevo cargo</b>
                      </div>


                    </div>

                    <div class="panel-body">
                      
                      <form method="POST" action="{{ route('cargos.store') }}" 
                      class="form-horizontal">
                       @csrf
                      @error('cargo')
                           <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>ERROR</strong>  Este Cargo ya esta Guardado y 
                         debe contener almenos 4 caracter 
                      </div>                            
                      @enderror

                        <div class="form-group">
                          <label class="col-md-2 control-label">Cargo</label>
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="cargo" class="form-control" name="cargo" onkeyup="javascript:this.value=this.value.toUpperCase()";>
                          </div>
                        </div>
                

     
                
                        <div class="form-group">
                          <div class="col-md-offset-2 col-md-10">
                            <button class="btn btn-info" type="submit">Guardar</button>
                          </div>
                        </div>
                      </form>
                     
                    </div>
                  </div>

                </div>


                  </div>




              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>
    </div>
@endsection