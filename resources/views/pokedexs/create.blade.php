<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Pokedex</title>
</head>
<body>
    <h1>Create Pokedex Entry</h1>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('pokedexs._form')

    <p><a href="{{ route('pokedexs.index') }}">Back</a></p>
</body>
</html>
