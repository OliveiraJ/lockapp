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

        #container{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #data-container{
            background-color: #445166;
            width: 450px;
            padding: 8px 0px;
            margin: 8px 0px;
            border-radius: 6px;
        }
        #data-container:hover{
            background-color: #353b46;
        }

        li{
            display: inline-block;
            margin: 0px 8px;
        }
        ul{
            display: block;
            margin: 0px;
            padding: 0px;
            justify-content: space-evenly;
        }

    </style>
</head>
<body>
    <div id="container">
        <div>
            <h3>Users</h3>
        </div>
        <div>
            @foreach ($users as $user)
            <div id="data-container">
                <ul>
                    <li>
                        <div>
                            id: {{$user->id}}    
                        </div>
                    </li>
                    <li>
                        <div>
                            name: {{$user->name}}
                        </div>
                    </li>
                    <li>
                        <div>
                            type: {{$user->type}}
                        </div>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>