@extends('layouts.dashboard')
@section('page_heading','Welcome to Biotrop Online Training!')
@section('section')

            <!-- /.row -->
          <div class="col-sm-12">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-word-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div> <!--Dynamic dari database-->
                                    <div>Jumlah Training</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('listtraining') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div> <!--Dynamic dari database-->
                                    <div>Jumlah User</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('listuser') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

              </div>
            </div>

<div class="col-md-12">
  @section ('panel2_panel_title', 'Pengumuman')
  @section ('panel2_panel_body')
    Pito pato milo mila taka tiki poulet tika
    Cépa lajoi démitoka lana moulé macaréna
    Pao lettus pabo pati mélé cépa maka gusta
    Mami lébel méla moustache ella pika muchaaa
    Moka coca pila caca fissa bella lamassala
    Papa mama loca pita pola gusta la rumbada
    Chaipa koda mila toka bocca pis-sa la lasagnaaa
    Kika la po maka bomba bella mira la bologna
    Kika la po maka bomba bella mira la bologna
    Kika la po maka bomba bella mira la bologna
    Kika la po maka bomba bella mira la bolognaaaaa
    Pito pato milo mila taka tiki poulet tika
    Cépa lajoi démitoka lana moulé macaréna
    Moka coca pila caca fissa bella lamassala
    Papa mama loca pita pola gusta la rumbadaaa
    Moka coca pila caca fissa bella lamassala
    Papa mama loca pita pola gusta la rumbadaaa
    Chaipa koda mila toka bocca pis-sa la lasagna
    Chaipa koda mila toka bocca pis-sa la lasagna
    Chaipa koda mila toka bocca pis-sa la lasagnaaa
    Moka coca pila caca fissa bella lamassala
    Papa mama loca pita pola gusta la rumbadaaa
  @endsection
  @include('widgets.panel', array('class'=>'primary', 'header'=>true, 'as'=>'panel2'))

</div>



@stop
