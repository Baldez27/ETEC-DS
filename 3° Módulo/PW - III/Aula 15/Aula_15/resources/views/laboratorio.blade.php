<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{url('css/laboratorio.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>
<body>
    <ul>    
        <li><a href="index">Atividade</a></li>
        <li><a href="contato">Contato</a></li>
        <li><a href="reclamacao">Reclamação</a></li>
        <li><a href="cep">CEP</a></li>
        <li><a href="grafico">Gráfico</a></li>
    </ul>
 <div class="container"> 
    <form  action="/laboratorio" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txLab" placeholder="Lab"/>
        <button type="submit" class="submitbtn">Salvar</button>
    </form>
</div>

<table>
     <tbody>
         @foreach($laboratorios as $c) 
            <tr>
                <td>{{$c->idLab}}</td>
                    <td>{{$c->Lab}}</td>
                    <td><a class="excluir" href="/laboratorio/excluir/{{$c->idLab}}"> 
                    <button class="button_">Delete</button>
                    </a>
                </td>
            </tr>       
        @endforeach
    </tbody>
    </table>
    
</body>

</html>