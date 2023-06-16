<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{url('css/grafico.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
  </head>

  <body>

    <ul>    
      <li><a href="index">Atividade</a></li>
      <li><a href="contato">Contato</a></li>
      <li><a href="reclamacao">Reclamação</a></li>
      <li><a href="laboratorio">Laboratorio</a></li>
      <li><a href="cep">CEP</a></li>
    </ul>

  </body>

  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            // @foreach($reclamacaoPorLab as $rpl)            
            //   {{$rpl->Lab}},
            // @endforeach,
          ['Laboratório 2', 15],
          ['Laboratório 3', 25],
          ['Laboratório 4', 45],
          ['Laboratório 5', 35],
          ['Laboratório 6', 55],
          ['Laboratório 7', 15],
          ['Laboratório 8', 5],
        ]);

        // Set chart options
        var options = {'title':'Percentual de Reclamações dos Laboratórios',
                       'width':1200,
                       'height':1100};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>