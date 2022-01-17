@if ($responseBody == false)
    <h1 class="text-center h3 text-white">Pokemon não encontrado ou Nome errado!</h1>
@else
    <div class="" style="width: 18rem; margin: -10% auto; font-family: 'Hind', sans-serif;">
        <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $responseBody->id }}.png"
            class="card-img-top"
            style="width: 40%;height: 40%;display: flex;margin: auto;margin-top: auto;margin-top: 60%;"
            alt=" {{ $responseBody->name }}">
        <div class="card-body">
            <h3 class="card-text text-center">{{ $responseBody->name }}</h3>
            <p class="card-text text-center mt-2">type: {{ $responseBody->types[0]->type->name }}</p>
            <p class="card-text text-center mt-4 ">HP: {{ $responseBody->stats[0]->base_stat }}</p>
            <p class="card-text text-center mt-2">Attack: {{ $responseBody->stats[1]->base_stat }}1</p>
            <p class="card-text text-center mt-2">Desfense: {{ $responseBody->stats[2]->base_stat }}</p>
            <p class="card-text text-center mt-2">Special Attack: {{ $responseBody->stats[3]->base_stat }}</p>
            <p class="card-text text-center mt-2">Speed: {{ $responseBody->stats[4]->base_stat }}</p>
        </div>
    </div>
@endif
