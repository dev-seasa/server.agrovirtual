<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="refresh" content="60">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,

    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    

    <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">



        <!-- Optional theme -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">



        <!-- Latest compiled and minified JavaScript -->

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    

        <title>Live</title>

        </head>

        <body>

        <?php

        $foo=file("live.txt");

	    $dato=implode($foo);

        $linea=explode(" ",$dato);



        



        $temp_out=floatval(substr($foo[8],-6)); //temperatura exterior

        $hum_out=substr($foo[6],-6); //humedad exterior

        $wind_speed=floatval(substr($foo[9],-6)); //velocidad del viento

	    $wind_gust=substr($foo[10],-6); //rafaga del viento

        $wind_dir=substr($foo[11],-6); //direccion del viento

        $press=substr($foo[16],-8);//presion


	$url = "http://agrovirtual.cl/enaex/json/dia.json";
        $json = file_get_contents($url);
        $obj = json_decode($json);

        

        ?>

        <section>

            <div class="container">

            <div class="table-responsive">

				<table class="table table-hover table-striped">

					<tr class="danger">

						<th>Estación Enaex Punta Teatinos  <?php print_r($obj[0]->hora)?> </th>

						<th></th>

						<th></th>

					<th></th>

					</tr>

					<tr class="">

					<td>Temperatura</td>

                    <td><?php echo $temp_out?>&nbsp;&deg;C</td>

			        <td>Humedad</td>

			        <td><?php echo $hum_out?>%</td>

                    <tr class="">

					<td>Velocidad del Viento</td>

			        <td><?php echo $wind_speed?> Km/h</td>

			        <td>Rafaga de Viento</td>

					<td><?php echo $wind_gust?> Km/h</td>

                    <tr class="">

                    <td>Presión</td>

                    <td><?php echo $press?> Mb</td>

                    <td>Dirección del Viento</td>

					<td><?php echo $wind_dir?></td>

					</tr>

					</tr>

                    </tr>

				</table>

				</div>

            </div>

        </section>

    </body>

</html>

