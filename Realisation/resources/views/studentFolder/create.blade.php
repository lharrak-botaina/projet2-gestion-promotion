<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("student.store") }}" method="POST">
        @csrf
        <div class="container">
            <input type="text" name="first_name" placeholder="first Name">
            <input type="text" name="last_name" placeholder="last Name">
            <input type="email" name="email" placeholder="email">
           <input type="hidden" name="promotion_token" value="{{$token}}" id="">
            <button type="submit">ajouter</button>
        </div>



    </form>
</body>
</html>
