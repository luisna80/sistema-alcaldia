
@extends('admin.plantilla.main')
@section('titulo','Editar Grupo')

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>Empleados contratados</h3>
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
Nueva Nomina {{$_GET['codigo']}} <strong></strong>
</div>
</div>

<div class="panel-body">
<div class="row">
<div class="col-md-6">
 
<input type="text" hidden="" name="grupo_codigo" value="{{$_GET['codigo']}}">
<div class="form-group">
<label  class=" control-label">Seleccione la fecha de inicio</label>

<input type="date" name="FECHA_INI" id="input" class="form-control" value="" required="required" title="fecha de inicio">
</div>
       
 
<div class="form-group">
<label class="control-label">Seleccione la fecha de FINAL</label>

<input type="date" name="FECHA_FIN" id="input" class="form-control" value="" required="required" title="fecha de inicio">

</div> 
<div class="form-group">
<label class="control-label">Seleccione la QUINCENA</label>

    <select name="QUINCENA" id="input" class="form-control" required="required">
      <option value="PRIMERA">PRIMERA</option>
       <option value="PRIMERA">SEGUNDA</option>
    </select>

</div>

<div class="form-group">
<label class="control-label">FECHA DE CREACION</label>

<input type="text" name="" id="input" class="form-control" value="<?php echo date('Y-m-d'); ?>" disabled pattern="" title=""> 

</div>  


</div>
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">
{{ __('Generar Nomina') }}
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