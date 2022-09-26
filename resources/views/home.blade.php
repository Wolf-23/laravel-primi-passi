<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="css/home-style.css"> 
    <title>Laraver First Project</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{route('second')}}">Seconda Pagina</a></li>
            <li><a href="{{route('third')}}">Terza Pagina</a></li>
        </ul>
    </header>
    <main>
        <div class="container">
            <h1>{{$helloView}}</h1>
            <h2>{{$laravelView}}</h2>
        </div>
    </main>
</body>
</html>