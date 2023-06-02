<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{url('css/contato.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
</head>

{{$contato->id}}

<div class="container">
    <form action="" method="post">
        {{csrf_field()}} 
        
        <div>                    
            <input type="text" 
                    name="txNome"                                 
                    value=  "{{$contato->Nome}}" 
            />

            <input type="text" 
                    name="txTelefone"                                 
                    value=  "{{$contato->Tel}}" 
            />

            <input type="text" 
                    name="txEmail"                                 
                    value=  "{{$contato->Email}}" 
            />
        </div>
                                            
        <div>
            <button type="submit"> Salvar </button>
        </div>                  
    </form>    
</div>