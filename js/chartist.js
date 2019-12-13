$(document).ready(function(){

    $.ajax({

        url : "http://agrovirtual.cl/enaex/json/dia.json", ///el archivo php chart

        type : "GET",

        success : function(data){



            var hora = [];

            var temp_out = [];

            

            for(var i in data) {

                hora.push(data[i].hora);

                temp_out.push(data[i].temp_out);

            }



            var dato = {

                labels: [hora[0],hora[1],hora[2],hora[4],hora[5],hora[6],hora[7],hora[8],hora[9],hora[10],hora[11],hora[12],hora[13],hora[14],hora[15],hora[16],hora[17],hora[18],hora[19]],

                series: [[temp_out[0],temp_out[1],temp_out[2],temp_out[4],temp_out[5],temp_out[6],temp_out[7],temp_out[8],temp_out[9],temp_out[10],temp_out[11],temp_out[12],temp_out[13],temp_out[14],temp_out[15],temp_out[16],temp_out[17],temp_out[18],temp_out[19]]]

            };



            var options = {

                plugins: [

                    Chartist.plugins.tooltip()

                ],

                showArea: true,

                showPoint: true,

                fullWidth: true,

                axisY: {

                    type: Chartist.AutoScaleAxis,

                    ticks:temp_out,

                    onlyInteger: false,

                    offset: 20

                },

                chartPadding: {

                right: 50

                    }

                }



            var responsiveOptions = [

                ['screen and (min-width: 641px) and (max-width: 1024px)', {

                    showPoint: true

                }],

                ['screen and (max-width: 640px)', {

                    showLine: true

                }],

            ];



            new Chartist.Line('#chart1', dato,options,responsiveOptions);



            },

            error : function(data){

            console.log(data);

        }

    });

});