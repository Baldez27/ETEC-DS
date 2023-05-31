<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{url('css/reclamacao.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>
<body>
    <ul>    
        <li><a href="index">Atividade</a></li>
        <li><a href="contato">Contato</a></li>
        <li><a href="laboratorio">Laboratorio</a></li>
        <li><a href="cep">CEP</a></li>
        <li><a href="grafico">Gráfico</a></li>
    </ul>

<div class="container">   
    <form  action="/reclamacao" method="post">        
        {{csrf_field()}}        

        <select name="lab" id="lab">
            @foreach($laboratorio as $l)
            <option value="{{$l -> idLab}}">{{$l -> Lab}}</option>
            @endforeach
        </select>
        <input type="text" name="txPc" placeholder="Pc"/>
        <input type="text" name="txTitulo" placeholder="Título" />
        <input type="text" name="txDescricao" placeholder="Descrição" />
        <input type="text" name="txdtCriacao " placeholder="Data Criação" />
        <button type="submit" class="submitbtn">Salvar</button>
    </form>
</div>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Pc</th>
            <th>Title</th>
            <th>Desc</th>
            <th>Data</th>
            <th>Control</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reclamacao as $c) 
        <tr>
            <td>{{$c->idRec}}</td>
            <td>{{$c->PC}}</td>
            <td>{{$c->Titulo}}</td>
            <td>{{$c->Descricao}}</td>
            <td>{{$c->dtCriacao}}</td>
            <td><a class="excluir" href="/reclamacao/excluir/{{$c->idRec}}"> 
            <button class="button_">Delete</button>
                </a>
            </td>
        </tr>       
        @endforeach
    </tbody>
</table>
    
</body>

</html>