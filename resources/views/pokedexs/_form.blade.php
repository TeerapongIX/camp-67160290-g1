@if(isset($pokedex))
    @php $action = route('pokedexs.update', $pokedex->id); $method = 'PUT'; @endphp
@else
    @php $action = route('pokedexs.store'); $method = 'POST'; @endphp
@endif

<form action="{{ $action }}" method="post">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif

    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $pokedex->name ?? '') }}" required>
    </div>

    <div>
        <label>Type</label>
        <input type="text" name="type" value="{{ old('type', $pokedex->type ?? '') }}">
    </div>

    <div>
        <label>Species</label>
        <input type="text" name="species" value="{{ old('species', $pokedex->species ?? '') }}">
    </div>

    <div>
        <label>Height</label>
        <input type="text" name="height" value="{{ old('height', $pokedex->height ?? '') }}">
    </div>

    <div>
        <label>Weight</label>
        <input type="text" name="weight" value="{{ old('weight', $pokedex->weight ?? '') }}">
    </div>

    <div>
        <label>HP</label>
        <input type="number" name="hp" value="{{ old('hp', $pokedex->hp ?? '') }}">
    </div>

    <div>
        <label>Attack</label>
        <input type="number" name="attack" value="{{ old('attack', $pokedex->attack ?? '') }}">
    </div>

    <div>
        <label>Defense</label>
        <input type="number" name="defense" value="{{ old('defense', $pokedex->defense ?? '') }}">
    </div>

    <div>
        <label>Image URL</label>
        <input type="url" name="image_url" value="{{ old('image_url', $pokedex->image_url ?? '') }}">
    </div>

    <div>
        <button type="submit">Save</button>
    </div>
</form>
