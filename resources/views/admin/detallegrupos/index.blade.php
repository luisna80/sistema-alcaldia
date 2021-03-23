
@extends('admin.plantilla.main')
@section('titulo','Editar Grupo')

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>Grupos</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 <div class="content-row">

                  <div class="panel panel-default">
    

                    <div class="panel-body">
                      <form method="POST" action="{{ route('detallegrupos.store') }}" >
                        
                         @csrf
<div class="col-md-12">
                      <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                          <div class="panel-title">
                            Editando el grupos <strong>{{$trabajador_cedula}}</strong>
                          </div>
   
                        </div>

                        <div class="panel-body">
       
                      <div class="row">
                            <div class="col-md-6">
                              <label>Seleccione el Grupo</label>
                            
                              <input type="text" hidden="" name="trabajador_cedula" value="{{$trabajador_cedula}}">
                           
                              <select class="form-control" name="grupo_codigo">
                                   <
                                   @foreach ($grupos as $grupo)
                                   <option value="{{ $grupo->codigo }}">{{ $grupo->nombre }}</option>
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