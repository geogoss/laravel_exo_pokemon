<section class="w-50 mx-auto">
    <h1 class="text-center p-3 bg-info text-white">Pokemons</h1>

    <table class="table table-warning table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Niveau</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemon as $item)
                <tr>
                    <th scope="row">{{$item->id}} </th>
                    <td>{{ $item->name }} </td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->level }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>