@if ($responseBody == false)
    <h2 class="text-center text-white mt-24">Pokemon não encontrado ou Nome errado!</h2>
@else
    <div class="flex justify-center mt-20">
        <div class=" rounded-lg   w-64  max-w-sm">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{ $responseBody->id }}.png"
                class=" rounded-t-lg m-auto" alt=" {{ $responseBody->name }}">
            <h3 class="text-center">Nome: {{ $responseBody->name }}</h3>
            <p class="text-center mt-2">type: {{ $responseBody->types[0]->type->name }}</p>
            <h1 class="text-center text-orange-500 mt-5">Estatística</h1>
            <p class="text-center ">HP: {{ $responseBody->stats[0]->base_stat }}</p>
            <p class="text-center mt-2">Attack: {{ $responseBody->stats[1]->base_stat }}1</p>
            <p class="text-center mt-2">Desfense: {{ $responseBody->stats[2]->base_stat }}</p>
            <p class="text-center mt-2">Special Attack: {{ $responseBody->stats[3]->base_stat }}</p>
            <p class="text-center mt-2">Speed: {{ $responseBody->stats[4]->base_stat }}</p>
        </div>
    </div>
@endif
