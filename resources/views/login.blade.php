<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top, #3b3bff 0%, #000 60%);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            color:white;
        }

        .card{
            width:400px;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(15px);
            border-radius:20px;
            padding:40px;
            box-shadow:0 0 40px rgba(0,210,255,0.4);
        }

        h2{
            margin-bottom:30px;
            font-size:28px;
        }

        input{
            width:100%;
            padding:14px;
            margin-bottom:20px;
            border-radius:12px;
            border:1px solid rgba(255,255,255,0.2);
            background: rgba(255,255,255,0.05);
            color:white;
            font-size:14px;
        }

        input:focus{
            outline:none;
            border-color:#00d2ff;
            box-shadow:0 0 10px #00d2ff;
        }

        button{
            width:100%;
            padding:14px;
            border:none;
            border-radius:12px;
            background:#00d2ff;
            font-weight:700;
            cursor:pointer;
        }

        a{
            color:#00d2ff;
            text-decoration:none;
            font-size:14px;
        }

        .bottom{
            margin-top:15px;
            text-align:center;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Login</h2>

    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>
    </form>

    <div class="bottom">
        Don't have account? <a href="/register">Register</a>
    </div>
</div>

</body>
</html>