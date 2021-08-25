<?php 
$con=mysqli_connect("localhost","root","","result") or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task-3</title>
        <style>
            .button{
                width: 70%;
                height: 30px;
                background-color: green;
                color: white;
                margin-top: 50px;
                margin-left: 100px;
                margin-bottom: 20px;
            }
            .button:hover{
               
                background-color: white;
                color: darkgreen;
            }
            input{
                border: ridge;
            }
            label{
                margin-left: 100px;
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
                <h1 style="margin-left: 300px; color: red">Admin Login</h1>
                <form action="login_script.php" method="post">
                     <label>Enter AdminId:</label><input type="text" name="id" required style="margin-left: 15px;"><br><br>
                     <label>Enter Password: </label><input type="password" name="password" required><br><br>
                    
                    <input type="submit" class="button">
                </form>
                
                    
                </div>
        </div>
    </body>
</html>
