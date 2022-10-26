<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("student.update",$edit->id) }}" method="POST">
        @method('PUT')
                                    @csrf

        <div class="container">
            <input type="text" name="first_name" placeholder="first Name" value="{{ $edit->first_name }}">
            <input type="text" name="last_name" placeholder="last Name" value="{{ $edit->last_name }}">
            <input type="email" name="email" placeholder="email"value="{{ $edit->email}}">

            <button type="submit">update</button>
        </div>



    </form>
</body>
</html>
