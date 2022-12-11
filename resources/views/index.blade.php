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
            background-color: #445166;
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
            width: 274px;
            height: 40px;
            padding: 8px;
            color: white;
            background-color:crimson;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: large;
        }

        input[type=submit]:hover{
            background-color:rgb(252, 17, 56);
        }

        select{
            width: 200px;
            height: 30px;
            border:none;
            border-radius: 6px;
            outline: none;
            font-size: large;
            padding: 0px 8px;
        }

        #link-to-users{
            background-color: rgb(44, 206, 111);
            color: #1e242e;
            padding: 8px;
            width: 100px;
            height: 30px;
            border-radius: 6px;
            text-decoration: none;
            box-shadow: 2px 2px 5px #2e2c2c;
        }

        #link-container{
            margin: 20px 0px 0px 0px;
        }

        #container{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #login-container{
            background-color: #1e242e;
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
            margin: 55px 0px 0px 0px;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="login-container">
            <div>
                <h2>Create a new user:</h2>
            </div>
            <form action="/api/users" method="POST">
                <div>
                    <div class="field-container">
                        <div class="label-container">
                            <label for="Name">Name</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="name" id="name" placeholder="Insert here the username">
                        </div>
                    </div> 
                    <div class="field-container">
                        <div class="label-container">
                            <label for="password">Password</label>
                        </div>
                        <div class="input-container">
                            <input type="password" name="password" id="repeat-password" placeholder="Insert here the password">
                        </div>
                    </div>
                    <div class="field-container">
                        <div class="label-container">
                            <label for="type">Type</label>
                        </div>
                        <div class="input-container">
                            <select name="type" id="type">
                                <option value="root">Root</option>
                                <option value="normal">Normal</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="submit-container">
                    <input type="submit" value="Create user">
                </div>
            </form>
        </div>
        <div id="link-container">
            <a href="/api/users" id="link-to-users">Users</a>
            <p>Click here to see the current registered users.</p>
        </div>
    </div>
</body>
</html>