@extends('admin.plantilla.main')

@section('titulo')
Lista de Departamentos
@endsection

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Gestión de Departamentos</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 

                  <div class="panel panel-default">
 

                    <div class="panel-body">
                      @if (@isset($_GET['actualiza']))
<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Departamento cambiado correctamente.
                      </div>
               
@endif
@if (@isset($_GET['guarda']))
<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Se ha guardado correctamente los datos.
                      </div>
                      @endif
                      <div class="col-md-6">
<a href="{{ route('departamentos.create') }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>  Registrar Departamento</a>
</div>

<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>N°</th>
<th>Nombre</th>


<th>Acción</th>
</tr>
</thead>
<tbody>
<!-- recibo los datos del controlador UsersControlller-->

{{ old($cont=1) }}
@foreach($lsdepartamentos as $cargo)
<tr>
<td>{{ $cargo->codigo}}</td>                
<td>{{ $cargo->nombre }}</td>
                                    

<td><a href="{{ route('departamentos.destroy',$cargo->codigo) }}" onclick="return confirm('Seguro deseas eliminar ?')" class="btn btn-danger "><i class="glyphicon glyphicon-remove"></i>eliminar</a>  
<a href="{{ route('departamentos.edit',$cargo->codigo) }}"class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i>Editar</a>



</td>
                                      
</tr>

@endforeach
</tbody>
</table>
<!-- coloco una paginacion con el comando render pasandole el objeto $cargos que contiene la cantidad de cargos-->
<div class="text-center">
{{ $lsdepartamentos->render() }}
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