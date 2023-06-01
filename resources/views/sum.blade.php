<!DOCTYPE html>
<html>
<head>
    <title>Sum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form  method="post">
        @csrf
        <label for="a">Enter number A:</label>
        <input type="number" id="a" name="a" value="{{ old('a') }}">
        <br>
        <br />
        <label for="b">Enter number B:</label>
        <input type="number" id="b" name="b" value="{{ old('b') }}">
        <br>
        <br />
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    @if(isset($sum))
        <h1>{{ $sum }}</h1>
    @endif
</body>
</html>
