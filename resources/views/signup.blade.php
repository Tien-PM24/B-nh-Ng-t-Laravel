<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sign up</h2>
    <form action="" method="post">
        @csrf
        <table>
            <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="">Age</label></td>
                <td><input type="number" name="age" id="age"></td>
            </tr>
            <tr>
                <td><label for="">Date</label></td>
                <td><input type="date" name="date" id="date"></td>
            </tr>
            <tr>
                <td><label for="">Phone</label></td>
                <td><input type="number" name="phone" id="phone"></td>
            </tr>
            <tr>
                <td><label for="">Website</label></td>
                <td><input type="text" name="web" id="web"></td>
            </tr>
            <tr>
                <td><label for="">Address</label></td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr>
                @include ('block.error')
            </tr>
            <button type="submit">Submit</button>
        </table>
    </form>
    <div class="disphay-infor">
        @if(isset($user))
        <p>Name: {{$user['name']}}</p>
        <p>Age: {{$user['age']}}</p>
        <p>Date: {{$user['date']}}</p>
        <p>Phone: {{$user['phone']}}</p>
        <p>website: {{$user['web']}}</p>
        <p>Address: {{$user['address']}}</p>
        @endif
    </div>
</body>
</html>