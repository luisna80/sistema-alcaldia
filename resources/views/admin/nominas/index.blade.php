@extends('admin.plantilla.main')

@section('titulo')
Nomina Empleados Contratados
@endsection

@section('content')
{{$nomina=$_GET['cedula']}}
@if ($nomina=='000007')
{{$tipo='Empleados Contratados'}}
@endif
@if ($nomina=='000001')
{{$tipo='Empleados Fijos'}}
@endif

          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> {{$tipo}}</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 

                  <div class="panel panel-default">
 

                    <div class="panel-body">
                      @if (@isset($_GET['actualiza']))
<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Cargo cambiado correctamente.
                      </div>
               
@endif
@if (@isset($_GET['guarda']))
<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Se ha guardado correctamente los datos.
                      </div>
                      @endif
                      
                      <div class="col-md-6">
<a href="{{ route('nominas.create','codigo='.$codigo) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>  Nueva Nomina {{$_GET['cedula']}}</a>
</div>
<div class="col-md-6">
  <form method="GET" action="{{ route('trabajadores.index') }}" 
                      class="form-horizontal">
                          <div class="form-search search-only">

                            <i class="search-icon glyphicon glyphicon-search"></i>
                            <input type="text" id="cargo" name="cargo" class="form-control search-query">
                          </div>
                        </div>
                      </form>
<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>N°</th>
<th>FECHA INICIO</th>
<th>FECHA FINAL</th>
<th>QUINCENA</th>
<th>FECHA ELABORADA</th>


<th>Acción</th>
</tr>
</thead>
<tbody>
<!-- recibo los datos del controlador UsersControlller-->

{{ old($cont=1) }}
@foreach($lsnominas as $nomina)
<tr>
<td>{{ $nomina->id}}</td>                
<td>{{ $nomina->FECHA_INI }}</td>
<td>{{ $nomina->FECHA_FIN }}</td>
<td>{{ $nomina->QUINCENA }}</td>
<td>{{ $nomina->FECHA_ELA}}</td>

<!--<td><span class="badge badge-default">{{ number_format($nomina->sueldo,2 ,',', '.') }}</span></td>-->
                                     

<td><a href="{{ route('nominas.edit',$nomina->id) }}" onclick="return confirm('Seguro deseas eliminar ?')" class="btn btn-danger "><i class="glyphicon glyphicon-remove"></i>eliminar</a>  
<a href="{{ route('nominas.edit',$nomina->id) }}"class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i>Editar</a>



</td>
                                      
</tr>

@endforeach
</tbody>
</table>
<!-- coloco una paginacion con el comando render pasandole el objeto $nominas que contiene la cantidad de nominas-->
<div class="text-center">
{{ $lsnominas->render() }}
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