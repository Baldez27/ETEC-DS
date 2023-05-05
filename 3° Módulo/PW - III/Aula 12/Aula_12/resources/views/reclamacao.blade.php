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
        <li><a href="reclamacao">Reclamação</a></li>
        <li><a href="laboratorio">Laboratorio</a></li>
    </ul>

<div class="container">   
    <form  action="/reclamacao" method="post">        
        {{csrf_field()}}        

        <select name="" id="">
            @foreach($laboratorio as $l)
            <option value="{{$l -> idLab}}">{{$l -> Lab}}</option>
            @endforeach
        </select>
        <input type="text" name="txPc" placeholder="Pc"/>
        <input type="text" name="txTitulo" placeholder="Título" />
        <input type="text" name="txDescricao" placeholder="Descrição" />
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
            <td><a class="excluir" href="/reclamacao/excluir/{{$c->idRec}}"> 
            <button class="button_">Detele</button>
                </a>
            </td>
        </tr>       
        @endforeach
    </tbody>
</table>
    
</body>

</html>