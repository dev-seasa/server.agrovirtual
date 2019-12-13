<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="refresh" content="60">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,

    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <!-- Jquery para semaforo-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <title>Incendios</title>

    </head>

    <body>

        <?php

        //json

        $data = file_get_contents("json/dia.json");

        $products = json_decode($data, true);



        //live

        $foo=file("live.txt");

        $dato=implode($foo);

        $linea=explode(" ",$dato);



        $temp_out=floatval(substr($foo[8],-6)); //temperatura exterior

        $hum_out=substr($foo[6],-6); //humedad exterior

        $wind_speed=floatval(substr($foo[9],-6)); //velocidad del viento

        $wind_gust=substr($foo[10],-6); //rafaga del viento

        $wind_dir=substr($foo[11],-6); //direccion del viento

        $press=substr($foo[16],-8);//presion

        

        //imprimir array

        //print_r($products[0]);

	//foreach($products as $products[0] => $obj) { 
    	//	print_r($obj); 
 	//}

        //dia presente

        $dia=$products[0];

        $fecha=$dia['fecha'];

        $cont_sequia=$dia['cont_sequia'];

        $cont=(int)$cont_sequia;

        $rain=$dia['rain'];

        $lluvia=(int)$rain;

        //dia anterior

        $dia_anterior=$products[1];

        $rain_anterior=$dia_anterior['rain'];

        $lluvia_anterior=(int)$rain_anterior;

        //lluvia acumulada 24hrs

        $acumulado=$lluvia_anterior-$lluvia;

        //

        $datos=explode("-",$fecha);



        $mes=(int)$datos[1];

        $dia=(int)$datos[2];





        //formula sequia

        $sequia=round(70-(12.35545*$cont)+(0.52528*pow($cont,2)),2);



        //Incendios

        //estacionalidad

        if ($mes==1) {

        $estacion=3;

        }

        if ($mes==2) {

        $estacion=3;

        }

        if ($mes==3) {

        $estacion=2.5; 

        }

        if ($mes==4) {

        if ($dia<=15) {

            $estacion=2;

        }else {

            $estacion=1.5;

        }

        }

        if ($mes==5) {

        $estacion=1.5;

        }

        if ($mes==6) {

        $estacion=1;

        }

        if ($mes==7) {

        $estacion=1;

        }

        if ($mes==8) {

        $estacion=1.5;

        }

        if ($mes==9) {

        $estacion=2;

        }

        if ($mes==10) {

        $estacion=2;

        }

        if ($mes==11) {

        if ($dia<=15) {

            $estacion=2.0;

        }else {

            $estacion=2.5;

        }

        }

        if ($mes==12) {

        $estacion=3;

        }



        //formula Incendios (la velocidad del viento tiene q ser en nudos)

        $nudos=(double)$wind_speed*0.539956803455723;

        $incendio= round((17.6653+(1.1692*(double)$temp_out)-(0.4387*(int)$hum_out)+(0.3473*$nudos)+(18.6882*$estacion)-(0.2664*$sequia)));



        if ($incendio<=25) {

            $riesgo="Nulo";

        }

        if ($incendio>=26 && $incendio<=40) {

            $riesgo="Bajo";

        }

        if ($incendio>=41 && $incendio<=55) {

            $riesgo="Medio";

        }

        if ($incendio>=56 && $incendio<=70) {

            $riesgo="Alto";

        }

        if ($incendio>=70) {

            $riesgo="Extremo";

        }



        //echo $incendio;



        ?>



        <section>

            <div class="container">

            <div class="table-responsive">

				<table class="table table-hover table-striped">

					<tr class="danger">

						<th id="alerta">Factor Sequía</th>

						<th></th>

						<th></th>

						<th></th>

					</tr>

						<tr class="">

							<td>Días sin Lluvia</td>

							<td></td>

							<td><button type="button" id="contLluvia"><?php echo $cont?></button></td>

							<td></td>

						</tr>

						<tr class="">

							<td>Lluvia Acumulada Últimas 24 Horas</td>

							<td></td>

							<td><?php echo $acumulado?> Mm</td>

							<td></td>

						</tr>

					</tr>

				</table>

			</div>



			<div class="table-responsive">

				<table class="table table-hover table-striped">

					<tr class="danger">

						<th id="alerta">Riesgo de Incendios</th>

						<th></th>

						<th></th>

						<th></th>

					</tr>

						<tr class="">

							<td>Categoría de Riesgo</td>

							<td></td>

							<td><button type="button" id="incendio"><?php echo $riesgo?></button></td>

							<td></td>

						</tr>

				</table>

			</div>

            </div>

        </section>

        <!--semaforos-->

			<script>

			$(document).ready(function() {

				var x='<?php echo $cont ?>';

			    if ( x>=0 && x<=10) {

			      $("#contLluvia").addClass("btn btn-success");

			    }

					if ( x>=11 && x<=20) {

			      $("#contLluvia").addClass("btn btn-warning");

			    }

					if ( x>=21 && x<=30) {

			      $("#contLluvia").addClass("btn btn-danger");

			    }

				});

				$(document).ready(function() {

					var x='<?php echo $rangoEIA ?>';

				    if ( x<=-0.1 ) {

				      $("#peligro").addClass("btn btn-success");

				    }

						if ( x>=-0.1 && x<=0.1) {

				      $("#peligro").addClass("btn btn-light");

				    }

						if ( x>=0.1 && x<=1.2) {

				      $("#peligro").addClass("btn btn-warning");

				    }

						if ( x>=1.2) {

				      $("#peligro").addClass("btn btn-danger");

				    }

					});

          $(document).ready(function() {

  					var x='<?php echo $incendio ?>';

  				    if ( x<=25 ) {

  				      $("#incendio").addClass("btn btn-light");

  				    }

  						if ( x>=26 && x<=40) {

  				      $("#incendio").addClass("btn btn-primary");

  				    }

  						if ( x>=41 && x<=55) {

  				      $("#incendio").addClass("btn btn-success");

  				    }

  						if ( x>=56 && x<=70) {

  				      $("#incendio").addClass("btn btn-warning");

              }

              if ( x>=70) {

    				    $("#incendio").addClass("btn btn-danger");

  				    }

  					});

	</script>

    </body>

</html>