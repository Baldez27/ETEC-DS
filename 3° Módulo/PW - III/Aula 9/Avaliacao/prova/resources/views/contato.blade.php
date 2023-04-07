<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{url('css/contato.css')}}" />
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
    
    <form  action="/contato" method="post">        
        {{csrf_field()}}        
        <input type="text" name="txNome" placeholder="Nome"/>
        <input type="text" name="txTelefone" placeholder="Telefone" />
        <input type="text" name="txEmail" placeholder="E-mail" />
        <input type="submit" value="Salvar" />
    </form>

    @foreach($contatos as $c)        
        <p>
        {{$c->idContato}}
        {{$c->Nome}}
        {{$c->Tel}}
        {{$c->Email}}
        <a  class="excluir" href="/contato/excluir/{{$c->idContato}}"> 
            Excluir
        </a>
        </p>
    @endforeach
    
</body>

</html>