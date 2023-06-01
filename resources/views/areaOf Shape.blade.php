<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Area of Shapes</title>
</head>
<body>
    <h2>Area Of Shapes</h2>
    <div class="container flex">
        <div style=''width="404">
        <h2><center>Area Of Triangle</center></h2>
        <form action="" method="post">
            @csrf
            <div class="from-group">
                <label for="a">Enter value of (A)</label>
                <input type="text" name="a" id="a" class="form-control">
            </div>
            <div class="from-group">
                <label for="b">Enter value of (H)</label>
                <input type="text" name="h" id="b" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <h2>The result: {{$areaTriangle}}</h2>
        </div>

        <div style="width:404">
        <h2><center>Area of Quadrangle</center></h2>\
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="c">Enter value of an edge</label>
                <input type="text" name="e1" id="c" class="form-control">
            </div>
            <div class="form-group">
                <label for="c">Enter value of an edge</label>
                <input type="text" name="e2" id="d" class="form-control">
            </div>
            <div class="form-group">
                <label for="c">Enter value of an edge</label>
                <input type="text" name="e3" id="e" class="form-control">
            </div>
            <div class="form-group">
                <label for="c">Enter value of an edge</label>
                <input type="text" name="e4" id="f" class="form-control">
            </div>  
            <button type="sunmit" class="btn btn-primary"> Submit</button>
        </form>
        <h2>The result: {{$areaQuadrang}}</h2>
        </div>
    </div>
</body>
</html>