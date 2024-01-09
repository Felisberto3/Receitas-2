<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes | Receitas</title>
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/index.js"></script>
</head>
<body>


{{ $receita  }}
<div class="containerDatalhes"> 
    <div class="cards" id="card">
        <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="Imagem do Card">
        <div class="details">
            <h2>{{$receita-> title }}</h2>
            <p>{{$receita-> user_id }}</p>
        </div>
        <div>igrediente:  {{$receita-> ingredient }}</div>
        <div> tempo de pre: {{$receita-> preparationTime }}</div>
        <div> metodo: {{$receita-> preparationMethod }}</div>
        <a href="{{ route('home')}} ">Inicio</a>
    </div>
</div>
</body>
</html>