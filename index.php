<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="Stretch a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,

    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    

    <script type="application/x-javascript">

		addEventListener("load", function () {

			setTimeout(hideURLbar, 0);

		}, false);



		function hideURLbar() {

			window.scrollTo(0, 1);

		}

    </script>

    

   

    
    

    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<link href="css/estilo.css" rel='stylesheet' type='text/css' />

	<link href="css/font-awesome.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!--Graficos-->

    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

    <!--Marcador grafico-->

    

        <title>Estación Enaex</title>

        </head>

        <body>

        <!-- <header -->

        <div class="header" id="up">



        <!--/top-bar-->

        <div class="top-bar">

        <div class="header-nav-agileits">

    

            <nav class="navbar navbar-default" >

        



             <!-- Brand and toggle get grouped for better mobile display -->

             <div class="navbar-header ">

             <a class="navbar-brand" href="#">

             <img src="images/enaex.png" width="245" height="100">

             </a>

                <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color:#d9534f;">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar "></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                    </div>

                 <!-- Collect the nav links, forms, and other content for toggling -->

                 <div class="collapse navbar-collapse nav-wil " id="bs-example-navbar-collapse-1">

                 <nav>

                    <ul class="top_nav" >

                        <li><a class="btn btn-danger btn-lg text-light" href="#tvmetria" role="button">tvmetria</button></a></li>

                        <li><a class="btn btn-danger btn-lg text-light" href="#alerta" role="button">Alertas</a></li>

                        <li><a class="btn btn-danger btn-lg text-light" href="#grafico" role="button">Gráficos</button></a></li>

                    </ul>

                </nav>

             </div>

            </nav>

        </div> 

    </div>

    </div>

        <!-- codigo php para toma de datos -->



        <br/>

        <br/>

        <br/>

        <br/>

        <br/>

        <br/>

        <!-- html para mostrar datos php -->

        <section>



        <div class="table-responsive">

				<table class="table table-hover table-striped">

                        <tr>

                        <div class="embed-responsive embed-responsive-16by9">

                        <iframe class="embed-responsive-item" src="http://agrovirtual.cl/enaex/live.php" allowfullscreen></iframe>

                        </div>

                        </tr>

                </table>

                <table class="table table-hover table-striped" id="tvmetria">

                        <tr>

                        <div class="embed-responsive embed-responsive-16by9">

                        <iframe class="embed-responsive-item" src="http://agrovirtual.cl/enaex/tvmetria.html" allowfullscreen></iframe>

                        </div>

                        </tr>

                </table>

                <table class="table table-hover table-striped" id="alerta">

                        <tr>

                        <div class="embed-responsive embed-responsive-16by9">

                        <iframe class="embed-responsive-item" src="http://agrovirtual.cl/enaex/incendio.php" allowfullscreen></iframe>

                        </div>

                        </tr>

                </table>

                <table class="table table-hover table-striped" id="grafico">

                        <tr>

                        <div class="embed-responsive embed-responsive-16by9">

                        <iframe class="embed-responsive-item" src="http://agrovirtual.cl/enaex/dia.php" allowfullscreen></iframe>

                        </div>

                        </tr>

                </table>

        </div>

        </section>

        

            <!-- js -->

    <!--<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>-->

        <!-- //js -->

        <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />

        <script src="js/easyResponsiveTabs.js"></script>

        <!--Plug-in Initialisation-->

        <script type="text/javascript">

            $(document).ready(function () {



                //Vertical Tab

                $('#parentVerticalTab').easyResponsiveTabs({

                    type: 'vertical', //Types: default, vertical, accordion

                    width: 'auto', //auto or any width like 600px

                    fit: true, // 100% fit in a container

                    closed: 'accordion', // Start closed if in accordion view

                    tabidentify: 'hor_1', // The tab groups identifier

                    activate: function (event) { // Callback function if tab is switched

                        var $tab = $(this);

                        var $info = $('#nested-tabInfo2');

                        var $name = $('span', $info);

                        $name.text($tab.text());

                        $info.show();

                    }

                });

            });

        </script>

                <!--/script-->

        <!-- start-smoth-scrolling -->

        

        <script type="text/javascript" src="js/easing.js"></script>

        <script type="text/javascript">

            jQuery(document).ready(function ($) {

                $(".scroll").click(function (event) {

                    event.preventDefault();

                    $('html,body').animate({

                        scrollTop: $(this.hash).offset().top

                    }, 900);

                });

            });

        </script>

        <!-- start-smoth-scrolling -->



       

            <a href="#up" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

            <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />

            <script src="js/easyResponsiveTabs.js"></script>



            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

            <!-- Latest compiled and minified JavaScript -->

            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

            <script type="text/javascript" src="js/global.js"></script>

            



    </body>

</html>