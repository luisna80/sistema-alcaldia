    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>PANEL ADMINISTRACIÓN</b></li>
               <li class="list-group-item"><a href="{{ url('/') }}"><i class="fa fa-home fa-3x"></i><b> Inicio</b></a></li>
              
                <li class="list-group-item"><a href="{{ url('admin/cargos') }}"><i class="fa fa-graduation-cap fa-3x"></i><b> Cargos</b></a></li>
                <li class="list-group-item"><a href="{{ url('admin/grupos') }}"><i class="fa fa-cubes fa-3x"></i><b> Grupos</b></a></li>
                <li class="list-group-item"><a href="{{ url('admin/departamentos') }}"><i class="fa fa-sitemap fa-3x"></i><b> Departamentos</b></a></li>
                 <li class="list-group-item"><a href="{{ url('admin/trabajadores') }}"><i class="fa fa-users fa-3x"></i><b> Trabajadores</b></a></li>
                 </li>
           
               

   


<li>
                  <a href="#demo4" class="list-group-item collapsed" data-toggle="collapse"><i class="fa fa-line-chart fa-3x"></i><b>Tabulador salarial</b><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </li>
                <li class="collapse" id="demo4" style="height: 0px;">
                      <a href="{{ url('admin/tabulador') }}" class="list-group-item">Personal Bachiller, Tecnico y Profesional</a>
                      <a href="" class="list-group-item">Personal Obrero</a>
                      <a href="{{ url('admin/nominas') }}" class="list-group-item">Nominas</a>
                    </li>
                
                <li>
                  <a href="#demo5" class="list-group-item collapsed" data-toggle="collapse"><i class="fa fa-line-chart fa-3x"></i><b>Nominas</b><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </li>
                
                       <li class="collapse" id="demo5" style="height: 0px;">
                      <a href="{{ route('nominas.index','cedula=000007') }}" class="list-group-item">Empleados contratados</a>
                      <a href="{{ route('nominas.index','cedula=000001') }}" class="list-group-item">Empleados Fijos</a>
                      <a href="{{ url('admin/nominas') }}" class="list-group-item">Obreros Contratados</a>
                      <a href="{{ url('admin/nominas') }}" class="list-group-item">Obreros Fijos</a>
                    </li>
                
                
               
               
                
              
      

              </ul>
          </div>
          