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
    <form  action="/reclamacao" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txPc" placeholder="Pc"/>
        <input type="text" name="txTitulo" placeholder="Título" />
        <input type="text" name="txDescricao" placeholder="Descrição" />
        <input  type="submit" value="Salvar" />
    </form>

    @foreach($reclamacao as $c)        
        <p>
        {{$c->idRec}}
        {{$c->PC}}
        {{$c->Titulo}}
        {{$c->Descricao}}
        <a class="excluir" href="/reclamacao/excluir/{{$c->idRec}}"> 
            Excluir
        </a>
        </p>
    @endforeach
    
</body>

</html>