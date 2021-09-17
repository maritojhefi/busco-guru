<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('css/ui-creative.css')}}" rel="stylesheet" />
    <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
    </style>
</head> 
<body class="">
   
                    <table class="styled-table" id="products-list">
                      <thead class="thead-light">
                        <tr>
                            <th >Periodo valido</th>
                            <th >Puerto salida</th>
                            <th>Tipo</th>
                            <th >Puerto destino</th>
                            <th >20GP</th>
                            <th >40GP</th>
                            <th >40HC</th>
                            <th >Cortar</th>
                           
                        </tr>
                      </thead>
                      <tbody>
                         
                        @foreach ($array as $tr)
                        <tr>
                           @foreach ($tr as $td)
                           @if ($loop->last || $loop->index==8 || $loop->index==9)
                            @else
                            @if($porcentaje!=null)
                            @if ($loop->index==4 || $loop->index==5 || $loop->index==6)
                            <td><span class="" translate="yes">{{$td+($td*($porcentaje/100))}} USD</span></td>
  
                            @else
                            <td><span class="" translate="yes">{{$td}}</span></td>
  
                            @endif 
                            @endif
                            @if($porcentaje==null)
                            @if ($loop->index==4 || $loop->index==5 || $loop->index==6)
                            <td><span class="" translate="yes">{{$td}} USD</span></td>
                            @else
                            <td><span class="" translate="yes">{{$td}}</span></td>
                            @endif
                           
  
                            @endif
  
                           @endif
                           @endforeach
                        </tr>
                    @endforeach
                         
                      
                               
                              
                       
                        </tbody>
                      
                    </table>
                   

</body>
</html>



