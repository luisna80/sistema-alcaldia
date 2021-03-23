@extends('admin.plantilla.main')

@section('titulo')
Tabulador Salarial
@endsection

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Tabulador Salarial</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 <div class="content-row">

                  <div class="panel panel-default">
 

                    <div class="panel-body">

<br><br>

<div class="panel panel-default">
<div class="panel-heading">Panel heading</div>
<table class="table">
<thead>
<tr>

<th>id</th>
<th>Grupos</th>

<th>Niveles</th>
<th>Sueldo</th>
</tr>
</thead>
<tbody>




<!-- recibo los datos del controlador UsersControlller-->
@foreach($lstabulador as $tabulador)


<tr>
<td>{{ $tabulador->id }}</td>               
<td>{{ $tabulador->grupos }}</td>
<td>{{ $tabulador->niveles }}</td>
<td>{{ $tabulador->sueldos }}</td>

<td><a type="button" href="{{ route('tabulador.destroy',$tabulador->id) }}" onclick="return confirm('Seguro deseas eliminar ?')" class="btn btn-danger" data-toggle="tooltip" data-placement="center" title="Eliminara todo lo relacionado con este tabulador"><i class="glyphicon glyphicon-remove"></i>eliminar</a>  
<a href="{{ route('tabulador.edit',$tabulador->id) }}"class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i>Editar</a>

                     



</td>
                                      
</tr>


@endforeach
</tbody>
</table>
<!-- coloco una paginacion con el comando render pasandole el objeto $tabuladors que contiene la cantidad de grupos-->
<div class="text-center">
{{ $lstabulador->render() }}
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