<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
        <h1>Hello</h1>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
  
        
    @else
    <div style="border:  8px solid black; padding:15px">
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="gmail">
            <input type="password" name="password" placeholder="password">
            <button>register</button>
        </form>
    </div>

    <div style="border:  8px solid black; padding:15px">
        <h1>login</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="logName" placeholder="name">
            <input type="password" name="logPassword" placeholder="password">
            <button>Login</button>
        </form>
    
    </div>
    
    @endauth
    
   
    



</body>
</html>