<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
    <style>
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Movie List</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Year</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product['title'] }}</td>
                <td>{{ $product['genre'] }}</td>
                <td>{{ $product['year'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
