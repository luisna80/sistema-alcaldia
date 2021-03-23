@extends('admin.plantilla.main')

@section('titulo')
Lista de Grupos
@endsection

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Gestión de Grupos</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 <div class="content-row">

                  <div class="panel panel-default">
 

                    <div class="panel-body">
                    	@if (@isset($_GET['actualiza']))
<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Grupo cambiado correctamente.
                      </div>
               
@endif
@if (@isset($_GET['guarda']))
<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Excelente!</strong> Se ha guardado correctamente los datos.
                      </div>
                      @endif
                      <!--  -->
<a href="{{ route('grupos.create') }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i>  Registrar Grupo</a>
<br><br>

<div class="table-responsive">
<table class="table table-bordered table-hover">
<thead>
<tr>

<th>Codigo</th>
<th>Nombre</th>

<th>Acción</th>
</tr>
</thead>
<tbody>




<!-- recibo los datos del controlador UsersControlller-->
@foreach($lsgrupos as $grupo)


<tr>
               
<td>{{ $grupo->codigo }}</td>
<td>{{ $grupo->nombre }}</td>

<td><a type="button" href="{{ route('grupos.destroy',$grupo->codigo) }}" onclick="return confirm('Seguro deseas eliminar ?')" class="btn btn-danger" data-toggle="tooltip" data-placement="center" title="Eliminara todo lo relacionado con este grupo"><i class="glyphicon glyphicon-remove"></i>eliminar</a>  
<a href="{{ route('grupos.edit',$grupo->codigo) }}"class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i>Editar</a>

                     



</td>
                                      
</tr>


@endforeach
</tbody>
</table>
<!-- coloco una paginacion con el comando render pasandole el objeto $grupos que contiene la cantidad de grupos-->
<div class="text-center">
{{ $lsgrupos->render() }}
</div>
</div>
                    </div>
                  </div><!-- -->

                </div>


                  </div>




              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>
    </div>
@endsection