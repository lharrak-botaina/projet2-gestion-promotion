<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div>
        <form action="/search" method="GET">
            <input type="search" name="search">
            <button type="submit">search</button>
        </form>

    </div>
    <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
      </div>
    <a href="{{route('promotion.create')}}">ajouter </a>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($promotion as $value)
            <tr>
                <td >{{$value ->name}}</td>
                <td><a href="{{ route('promotion.edit', $value->id)}}" >Modifier</a></td>
                <td>
                    <form action="{{ route('promotion.destroy', $value->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">supprimer</button>

                      </form>
                </td>

            </tr>
            @empty

            @endforelse
        </tbody>
    </table>

</body>
</html>

