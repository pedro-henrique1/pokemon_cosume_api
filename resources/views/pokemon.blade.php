<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($responseBody['results'] as $pokemon)
        <p>{{ $pokemon['name'] }}</p>
        <img src="https://pokeres.bastionbot.org/images/pokemon/{{ $pokemon['id'] }}.png" alt="">
    @endforeach
</body>

</html>
