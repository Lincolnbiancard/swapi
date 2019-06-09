<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Swapi Api</title>
</head>
<body>
    <table class="container">
        <thead>
            <tr>
                <th><h1>Name</h1></th>
                <th><h1>Height</h1></th>
                <th><h1>Mass</h1></th>
                <th><h1>Hair_color</h1></th>
                <th><h1>Skin_color</h1></th>
                <th><h1>Eye_color</h1></th>
                <th><h1>Birth_year</h1></th>
                <th><h1>Gender</h1></th>
                <th><h1>Homeworld</h1></th>
                <th><h1>Created</h1></th>
                <th><h1>Edited</h1></th>
                <th><h1>Url</h1></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->height }}</td>
                    <td>{{ $item->mass }}</td>
                    <td>{{ $item->hair_color }}</td>
                    <td>{{ $item->skin_color }}</td>
                    <td>{{ $item->eye_color }}</td>
                    <td>{{ $item->birth_year }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->homeworld }}</td>
                    <td>{{ $item->created }}</td>
                    <td>{{ $item->edited }}</td>
                    <td>{{ $item->url }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>


