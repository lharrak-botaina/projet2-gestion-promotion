<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <input type="text" id="search">

    {{-- <div>
        <form action="/search" method="GET">
            <input type="search" name="search" id="search">
            <button type="submit">search</button>
        </form>

    </div> --}}
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
        <tbody id="tbody">
            @forelse ($promotion as $value)
            <tr>
                <td >{{$value ->name}}</td>
                <td><a href="{{ route('promotion.edit', $value->token)}}" >Modifier</a></td>
                <td>
                    <form action="{{ route('promotion.destroy', $value->token)}}" method="post">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
       $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : 'search',

                data:{'key':$value},
                success:function(data){
                    $('#tbody').html(data);
                }
            });
        })
   </script>
</body>
</html>

