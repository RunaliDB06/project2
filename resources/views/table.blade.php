<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>first name</th>
        <th>second name</th>
        <th>address</th>
    </tr>
    @foreach ($product as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->fname}}</td>
        <td>{{$product->lname}}</td>
        <td>{{$product->address}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
