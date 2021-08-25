

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task-3</title>
        <style>
            button{
                width: 70%;
                height: 50px;
                background-color: green;
                color: white;
                margin-top: 50px;
                margin-left: 100px;
            }
            button:hover{
               
                background-color: white;
                color: darkgreen;
            }
            h1{
                margin-left: 35%;
                color: red;
            }
            body{
                background-image: url('results.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
       
        <div class="panel" style="margin: 100px 300px 0px 300px; background-color: lightgray; opacity: 0.8;">
            <div class="panel-body">
                <h1 style="margin-left: 300px;">Welcome!!</h1>
                <button onclick="location.href='students.php'">For Students</button>
                <button onclick="location.href='login.php'" style=" margin-bottom: 20px;">For Admin</button>
                    
                </div>
        </div>
    </body>
</html>
