<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LockApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        body{
            background-color: #1e242e;
            font-family: 'Roboto', sans-serif;
            color: white;
        }

        input[type=text],input[type=password]{
            width: 250px;
            height: 22px;
            padding: 8px 12px;
            border:none;
            border-radius: 6px;
            outline: none;
            font-size: large;
        }

        input[type=submit]{
            width: 100px;
            height: 40px;
            padding: 8px;
            color: white;
            background-color:crimson;
            border: none;
            border-radius: 6px;
            font-weight: 600;
        }

        input[type=submit]:hover{
            background-color:rgb(252, 17, 56);
        }

        #container{
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #login-container{
            background-color: #445166;
            border: 1px solid #273752;
            border-radius: 6px;
            box-shadow: 2px 2px 5px #2e2c2c;
            width: 400px;
            height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .label-container{
            margin: 8px 0px;
        }
        .input-container{

        }
        .field-container{
            margin: 12px 0px;
        }
        #submit-container{
            margin: 12px 0px;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="login-container">
            <form action="/api/index" method="POST">
                <div class="field-container">
                    <div class="label-container">
                        <label for="id">ID</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="id" id="">
                    </div>
                </div> 
                <div class="field-container">
                    <div class="label-container">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" id="">
                    </div>
                </div>
                <div id="submit-container">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>