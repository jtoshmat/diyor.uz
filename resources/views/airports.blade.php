<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The World Airports</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div id="airports">
    <p>
    <h1>The World Airports</h1>
    </p>
    <hr>

    <form>
        <p>
            <input value="{{$keyword}}" type="text" name="keyword" placeholder="Your Keyword">
            <button type="submit" class="btn btn-info">Search</button>
        </p>
    </form>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
        </tr>
        @foreach($airports as $airport)
            <tr>
                <td>{{$airport->id}}</td>
                <td>{{$airport->name}}</td>
                <td>{{$airport->city}}</td>
                <td>{{$airport->country}}</td>
            </tr>
        @endforeach
    </table>

</div>

<style>
    #airports th {
        background-color: darkred;
        color: goldenrod;
    }

    body {
        background-color: #011f1f;
    }

    #airports {
        text-align: center;
        width: 95%;
        min-height: 700px;
        margin: auto;
        background-color: lightgoldenrodyellow;
    }
</style>
</body>
</html>
