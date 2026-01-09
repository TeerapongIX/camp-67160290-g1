<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pokedexs</title>
</head>
<body>
    <h1>Pokedexs</h1>

    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    {{-- Inline create form (no need to click Create new) --}}
    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Create New Pokedex</h2>
    @include('pokedexs._form')

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>HP</th>
            <th>Attack</th>
            <th>Defense</th>
            <th>Actions</th>
        </tr>
        @foreach($pokedexs as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td><a href="{{ route('pokedexs.show', $p->id) }}">{{ $p->name }}</a></td>
                <td>{{ $p->type }}</td>
                <td>{{ $p->hp }}</td>
                <td>{{ $p->attack }}</td>
                <td>{{ $p->defense }}</td>
                <td>
                    <a href="{{ route('pokedexs.edit', $p->id) }}">Edit</a>
                    <form action="{{ route('pokedexs.destroy', $p->id) }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div style="margin-top:10px">{{ $pokedexs->links() }}</div>
</body>
</html>
