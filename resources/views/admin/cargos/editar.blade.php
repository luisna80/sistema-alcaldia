
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
    

                    <div class="panel-body">
                      <form method="POST" action="{{ route('cargos.update',$cargo->id) }}" >
                        @method('PUT')
                         @csrf
<div class="col-md-12">
                      <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                          <div class="panel-title">
                            Editando el cargo <strong>{{$cargo->cargo}}</strong>
                          </div>
   
                        </div>

                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-6">
                              <label>Cargo</label>
                              <input type="text" name="cargo" value="{{$cargo->cargo}}"  class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase()"; >
                            </div><br>

                                     
                          </div>
                          

                        


                        </div>
                      </div>
                    </div>
                          <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
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