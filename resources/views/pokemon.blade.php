@include('__partils.header')

<body style="background-color: #7DD3FC">
    <div class="container-md">
        <div class="flex justify-center mt-24">
            <form action="/search" method="get" class="w-96 ">
                <div class="flex flex-row">
                    <input type="text"
                        class="form-control bg-white bg-clip-padding rounded-r-lg
        border border-solid border-gray-300 mt-5 mb-2 py-1.5  px-3 basis-1/4 justify-between rounde-md rounded-md  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        name="pokemon" placeholder="Nome do pokemon ou id">
                    <button class="bg-blue-600 text-white font-medium rounded w-20 h-10 basis-1/4 mt-5 mr-2"
                        type="submit">Buscar</button>
                </div>
            </form>
        </div>
        @if (request()->routeIs('pokemon.search*') == true)
            @include('__partils.card')
        @endif
    </div>
</body>

</html>
