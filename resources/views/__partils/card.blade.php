@if ($responseBody == false)
    <h1 class="text-center text-white">Pokemon não encontrado</h1>
@else
    <div class="" style="width: 18rem; margin: -10% auto; font-family: 'Hind', sans-serif;">
        <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $responseBody->id }}.png"
            class="card-img-top"
            style="width: 40%;height: 40%;display: flex;margin: auto;margin-top: auto;margin-top: 60%;"
            alt=" {{ $responseBody->name }}">
        <div class="card-body">
            <h3 class="card-text text-center">{{ $responseBody->name }}</h3>
            <p class="card-text text-center mt-2">Tipo: {{ $responseBody->types[0]->type->name }}
            </p>
        </div>
    </div>
@endif
