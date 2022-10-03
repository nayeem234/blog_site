<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/register" method="post">
        @csrf
    Name:<input type="name" name="name"><br/><br/>
    Email:<input type="email"name="email"><br/><br/>
    Password:<input type="password" name="password"><br/><br/>
    <input type="submit" value="signup">
    </form>

</body>
</html>

