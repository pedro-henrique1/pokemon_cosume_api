@include('__partils.header')

<body style="background-color: #a2d2ff">
    <div class="container-fluid">
        <form action="/search" method="get" class="col-6" style="margin: 8% auto;">
            <div class="input-group">
                <input type=" text" class="form-control" name="pokemon" placeholder="Nome do pokemon ou id">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        @if (request()->routeIs('pokemon.search*') == true)
            @include('__partils.card')
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
