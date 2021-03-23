@extends('admin.plantilla.main')

@section('titulo')
Inicio
@endsection

@section('content')
          <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Inicio</h3>
              </div>
              <div class="panel-body">
                  <div class="content-row">
                 

                  <div class="panel panel-default">

                    <!-- aqui carrusel todo -->
                    <div class="col-md-2">
                    </div>
<div class="col-md-8">
                      <div class="jumbotron">
                        <div id="carousel-content-row-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-content-row-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-content-row-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-content-row-generic" data-slide-to="2" class=""></li>
                             <li data-target="#carousel-content-row-generic" data-slide-to="3" class=""></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="item active">

                              <img src="{{asset('plantillas/bootflat-admin/dist/img/slider1.jpg')}}">
                            </div>

                              <div class="item">

                              <img src="{{asset('plantillas/bootflat-admin/dist/img/slider3.jpg')}}">
                            </div>

                            <div class="item">
                              <img src="{{asset('plantillas/bootflat-admin/dist/img/slider2.jpg')}}">
                            </div>
                            <div class="item">
                              <img src="{{asset('plantillas/bootflat-admin/dist/img/slider3.jpg')}}">
                            </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-content-row-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-content-row-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                        </div>
                        <div class="jumbotron-contents">
          
                        </div>
                      </div>
                    </div>
                     <div class="col-md-2">
                    </div>
                    <!-- fin carrusel todo-->
 

  
                  </div>

                </div>


                  </div>




              </div><!-- panel body -->
            </div>
        </div><!-- content -->
      </div>
    </div>
@endsection