
<!-- top tiles demo-->
<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-truck"></i> Camiones Despachados</span>
        <div class="count">0</div>
        <span class="count_bottom"><i class="green">0</i> toneladas</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-truck"></i> Camiones Descargados</span>
        <div class="count">0</div>
        <span class="count_bottom"><i class="green">0</i> toneladas <i class="green">(0%)</i></span>
    </div>    
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-chevron-down"></i> Cantidad Tn Descargadas</span>
        <div class="count">0</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>0 tn</i> promedio por Camión</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-chevron-down"></i> Variedades Descargadas</span>
        <div class="count">0</div>
        <span class="count_bottom"><i class="green">0 </i> planificadas <i class="green">(0%)</i></span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-chevron-down"></i> Lotes Descargados</span>
        <div class="count"><?= $CantidadLotesDescargados ?></div>
        <span class="count_bottom"><i class="green">0 </i> planificados <i class="green">(0)</i></span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-exclamation"></i> Arroz Colorado</span>
        <div class="count"><i class="red">0 </i></div>
        <span class="count_bottom"><i class="red">0 </i> tn Recibidas</span>
    </div>
    <!-- 
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
    <div class="count">7,325</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
  </div>-->
</div>
<!-- /top tiles -->

<div class="row">


</div>
<br />

<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel tile fixed_height_320">
      <div class="x_title">
        <h2>Descargas por Variedades</h2>
        <div class="clearfix"></div>
      </div>
       
      <div class="x_content">
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>0.1.5.2</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>123k</span>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="widget_summary">
          <div class="w_left w_25">
            <span>0.1.5.3</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>53k</span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>0.1.5.4</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>23k</span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>0.1.5.5</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>3k</span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="widget_summary">
          <div class="w_left w_25">
            <span>0.1.5.6</span>
          </div>
          <div class="w_center w_55">
            <div class="progress">
              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
          <div class="w_right w_20">
            <span>1k</span>
          </div>
          <div class="clearfix"></div>
        </div>

      </div>
    </div>
  </div>
<!--
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel tile fixed_height_320 overflow_hidden">
      <div class="x_title">
        <h2>Device Usage</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="" style="width:100%">
          <tr>
            <th style="width:37%;">
              <p>Top 5</p>
            </th>
            <th>
              <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <p class="">Device</p>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <p class="">Progress</p>
              </div>
            </th>
          </tr>
          <tr>
            <td>
              <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
            </td>
            <td>
              <table class="tile_info">
                <tr>
                  <td>
                    <p><i class="fa fa-square blue"></i>IOS </p>
                  </td>
                  <td>30%</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square green"></i>Android </p>
                  </td>
                  <td>10%</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square purple"></i>Blackberry </p>
                  </td>
                  <td>20%</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square aero"></i>Symbian </p>
                  </td>
                  <td>15%</td>
                </tr>
                <tr>
                  <td>
                    <p><i class="fa fa-square red"></i>Others </p>
                  </td>
                  <td>30%</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
-->

  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel tile fixed_height_320">
      <div class="x_title">
        <h2>Descargas por Lotes</h2>
            <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="dashboard-widget-content">
          <ul class="quick-list">
            <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
            </li>
            <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
            </li>
            <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
            <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
            </li>
            <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
            <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
            </li>
            <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
            </li>
          </ul>

          <div class="sidebar-widget">
            <h4>Profile Completion</h4>
            <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>
            <div class="goal-wrapper">
              <span class="gauge-value pull-left">$</span>
              <span id="gauge-text" class="gauge-value pull-left">3,200</span>
              <span id="goal-text" class="goal-value pull-right">$5,000</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function() {
        var midata1 = new Array();
        var midata2 = new Array();
        /* Recupero el listado de camiones descargados por dia */
        $.ajax({
            type: 'POST',
            async: true,
            cache: false,
            data:$('0').serialize(),
            url:"/descargas/descargaspordia",
            /* Esta es la funcion a llamar */
            success:function (data)
            {
                /* DIV a donde dibuja el resultado? */
                var data1 = JSON.parse(data);
                midata1 = flot(data1);
                
                /* Tengo el primer grupo de resultados
                 * Asi que ahora, solicito el segundo lote  
                 *  
                 *   
                */
                /* Recupero el listado de camiones DESPACHADOS por dia */
                $.ajax({
                    type: 'POST',
                    async: true,
                    cache: false,
                    data:$('0').serialize(),
                    url:"/origenes/despachospordia",
                    /* Esta es la funcion a llamar */
                    success:function (data)
                    {
                        /* DIV a donde dibuja el resultado? */
                        var data2 = JSON.parse(data);
                        midata2 = flot(data2);
                        
                        /* Ahora que tengo los dos resultados, ejecuto la funcion
                         * que dibuja el grafico
                         */
                        dibujargrafico(midata1, midata2);
                    }
                  });
            }
          });
    });

    function dibujargrafico(midata1, midata2){
            console.log('Comienzo a Dibujar el grafico');
            console.log(midata1);
            console.log(midata2);
            
          $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [midata1, midata2], {
            series: {
                lines: {
                    show: false,
                    fill: false
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.2
                },
                points: {
                    radius: 3,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [2, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)"
            },
            tooltip: true
        });        
    };
    function flot(data1){
        /* Creo mi nuevo array, el que se va a usar para dibujar los datos */
        var midata = new Array();
        /* Recorro el array recibido */
        for (i=0;i<data1.length;i++){
            var arraytemp = data1[i].split(',');
            var milinea = new Array();
            milinea[0]= gd(arraytemp[2], arraytemp[1], arraytemp[0]);
            milinea[1] = arraytemp[3];
            midata[i] = milinea;
            };
        return midata;
    };

    function gd(year, month, day) {
        return new Date(year, month -1, day).getTime();
    };
    
</script>