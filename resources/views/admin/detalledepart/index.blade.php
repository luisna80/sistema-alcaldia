
@extends('admin.plantilla.main')
@section('titulo','Departamentos Registrados')

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>Departamentos registrados</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 <div class="content-row">

                  <div class="panel panel-default">
    

                    <div class="panel-body">
                      <form method="POST" action="{{ route('detalledepart.store') }}" >
                        
                         @csrf
<div class="col-md-12">
                      <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                          <div class="panel-title">
                            Agregando Departamentos<strong></strong>
                          </div>
   
                        </div>

                        <div class="panel-body">
       
                      <div class="row">
                            <div class="col-md-6">
                              <label>Seleccione el Departamento</label>
                            
                              <input type="text" hidden="" name="trabajador_cedula" value="{{$trabajador_cedula}}">
                           
                              <select class="form-control" name="departamento_codigo">
                                   <
                                   @foreach ($departamentos as $departamento)
                                   <option value="{{ $departamento->codigo }}">{{ $departamento->nombre }}</option>
                                   @endforeach
                               </select>
                               </div><br>

                           </div>
                           </div>
                      </div>
                    </div>
                          <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar') }}
                                </button>

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