@extends('admin.plantilla.main')

@section('titulo')
Lista de Trabajadores
@endsection

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Gestión de Trabajadores</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 <div class="content-row">

                  <div class="panel panel-default">
 

                    <div class="panel-body">
                    	@if (@isset($_GET['actualiza']))
<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Trabajador cambiado correctamente.
                      </div>
               
@endif
@if (@isset($_GET['guarda']))
<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Se ha guardado correctamente los datos del Trabajador.
                      </div>
                      @endif

                      @if (@isset($_GET['guarda2']))
<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>INFORMACIÓN!</strong> Este trabajador ya tiene un cargo.
                      </div>
                      @endif
                      @if (@isset($_GET['guarda3']))
<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>INFORMACIÓN!</strong> Este trabajador ya esta en un Departamento.
                      </div>
                      @endif

                             
                      <div class="col-md-6">
                        <div class="row tooltip-demo">
<a href="{{ route('trabajadores.create') }}" class="btn btn-info data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="glyphicon glyphicon-edit"></i>  Registrar nuevo Trabajador</a>
</div>
</div>
<div class="col-md-6">
  <form method="GET" action="{{ route('trabajadores.index') }}" 
                      class="form-horizontal">
                          <div class="form-search search-only">

                            <i class="search-icon glyphicon glyphicon-search"></i>
                            <input type="text" id="cedula" name="cedula" class="form-control search-query">
                          </div>
                        </div>
                      </form>
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th class="panel panel-primary">Nacionalidad</th>
<th>Cedula</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Estado</th>
<th>Acción</th>
</tr>
</thead>
<tbody>
<!-- recibo los datos del controlador UsersControlller-->
{{ old($cont=1) }}
@foreach($lstrabajadores as $trabajador)

@if ($cont%2==0)

<tr class="">
  @else
 
  <tr class="info">
@endif

<td>{{ $trabajador->nacionalidad}}</td>                
<td>{{ $trabajador->cedula }}</td>
<td>{{ $trabajador->pnombre }}</td>
<td>{{ $trabajador->papellido }}</td>
<td><a href=""<span class="label label-success">{{ $trabajador->suestado }}</span></td>

                                    

<td>

<div class="btn-group-horizontal">
  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Ver Ficha del Trabajador" data-original-title="Tooltip on bottom"><a href="{{ route('trabajadores.edit',$trabajador->cedula) }}" class="btn-default">
  <i class="glyphicon glyphicon-eye-open"></i></a></button>

  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Agregar Cargo" data-original-title="Tooltip on bottom"><a href="{{ route('detallecargos.edit',$trabajador->cedula) }}" class="btn-default">
  <i class=" fa fa-graduation-cap"></i></button>

  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Agregar Grupo" data-original-title="Tooltip on bottom"><a href="{{ route('detallegrupos.edit',$trabajador->cedula) }}" class="btn-default">
  <i class="fa fa-cubes"></i></button>

  <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Agregar Departamento" data-original-title="Tooltip on bottom">
  <a href="{{ route('detalledepart.edit',$trabajador->cedula) }}" class="btn-default">
  <i class="fa fa-sitemap"></i></button>
   <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Agregar Sueldo y nivel" data-original-title="Tooltip on bottom">
  <i class="fa fa-money"></i></button>

  

    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Agregar Familiar" data-original-title="Tooltip on bottom">
  <i class="fa fa-group"></i></button>

  </div>



</td>
                                      
</tr>
 {{ old($cont=$cont+1) }}
@endforeach
</tbody>
</table>
<!-- coloco una paginacion con el comando render pasandole el objeto $trabajadors que contiene la cantidad de $trabajadores-->
<div class="text-center">
{{ $lstrabajadores->render() }}
</div>
</div>
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