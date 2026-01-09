<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Show Pokedex</title>
</head>
<body>
    <h1>{{ $pokedex->name }}</h1>

    @if($pokedex->image_url)
        <div><img src="{{ $pokedex->image_url }}" alt="{{ $pokedex->name }}" style="max-width:200px"></div>
    @endif

    <ul>
        <li>Type: {{ $pokedex->type }}</li>
        <li>Species: {{ $pokedex->species }}</li>
        <li>Height: {{ $pokedex->height }}</li>
        <li>Weight: {{ $pokedex->weight }}</li>
        <li>HP: {{ $pokedex->hp }}</li>
        <li>Attack: {{ $pokedex->attack }}</li>
        <li>Defense: {{ $pokedex->defense }}</li>
    </ul>

    <p><a href="{{ route('pokedexs.index') }}">Back</a></p>
</body>
</html>
