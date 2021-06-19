<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toppage</title>
</head>
<body>
    <div>
        <h2>header</h2> 
        <a href="/">toppage</a>
        <p>user:hibana</p>
    </div>
    <div>
        <div>
            <h2>sidebar</h2>
            <a href="/hibanasdiary">hibana's diary</a>
        </div>
        <div>
            <h2>main</h2>
            <form method="post" action="/hibanasdiary">
                @csrf
                <input type="text" name="title">
                <input type="textarea" name="content">
                <input type="submit" value='send'>
            </from>
            @foreach ($articles as $article)
                <h3>{{$article -> title}}</h3>
                <p>{{$article -> content}}</p>
            @endforeach
        </div>
    </div>
</body>
</html>