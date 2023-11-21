<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <h1>Elenco treni</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Codice treno</th>
                <th scope="col">Azienda</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->train_code }}</th>
                    <td>{{ $train->company }}</td>
                    <td><strong>{{ $train->departure_station }}</strong> - {{ $train->departure_time }}</td>
                    <td><strong>{{ $train->arrival_station }}</strong> - {{ $train->arrival_time }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
