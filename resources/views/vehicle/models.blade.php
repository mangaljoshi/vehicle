<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Models</title>
</head>
<body>
    <h1>Vehicle Models</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Display</th>
                <th>Maker ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicleModels as $model)
                <tr>
                    <td>{{ $model->name }}</td>
                    <td>{{ $model->slug }}</td>
                    <td>{{ $model->display }}</td>
                    <td>{{ $model->vehicle_maker_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
