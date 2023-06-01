

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Country</th>
            <th>TotalConfirmed</th>
            <th>TotalDeaths</th>
            <th>TotalRecovered</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item['Country'] }}</td>
                <td>{{ $item['TotalConfirmed'] }}</td>
                <td>{{ $item['TotalDeaths'] }}</td>
                <td>{{ $item['TotalRecovered'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>