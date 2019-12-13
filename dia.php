<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <style>
        .chartist-tooltip {
            position: absolute;
            display: inline-block;
            opacity: 0;
            min-width: 5em;
            padding: .5em;
            background: #B92C28;
            color: #FFFFFF;
            font-family: Oxygen, Helvetica, Arial, sans-serif;
            font-weight: 700;
            text-align: center;
            pointer-events: none;
            z-index: 1;
            -webkit-transition: opacity .2s linear;
            -moz-transition: opacity .2s linear;
            -o-transition: opacity .2s linear;
            transition: opacity .2s linear;
        }
        
        .chartist-tooltip:before {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            width: 0;
            height: 0;
            margin-left: -15px;
            border: 15px solid transparent;
            border-top-color: #B92C28;
        }
        
        .chartist-tooltip.tooltip-show {
            opacity: 1;
        }
        
        .ct-area,
        .ct-line {
            pointer-events: none;
        }
        .responsiveContent {
        position: relative;
        height: 0;
        overflow: hidden;
        padding-bottom: 50%;
        margin-bottom: 20px;
        }
        .responsiveContent iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        }
        /*# sourceMappingURL=chartist-plugin-tooltip.css.map */
    </style>
        <title></title>
        </head>
        <body> 
        <section>
            <div class="container">
            <div class="table-responsive">
				<table class="table table-hover table-striped">
					<tr class="danger">
						<th>Temperatura en Tiempo Real</th>
                    </tr>
                    <tr>
						<th class="ct-chart ct-golden-section" id="chart1"></th>
					</tr>					
                </table>
            </div>
            
        </div>
        </section>
            <script src="https://unpkg.com/chartist-plugin-tooltips@0.0.17"></script>
            <script src="https://unpkg.com/chartist-plugin-pointlabels@0.0.6"></script>
	        <script type="text/javascript" src="js/chartist.js"></script>
    </body>
</html>
