<?php 
$con=mysqli_connect("localhost","root","","result") or die(mysqli_error($con));
?>
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
                <h1 style="margin-left: 300px;">Admin</h1>
                <form action="all.php" method="post">
                <button>Result of all students </button>
                </form> 
                <form action="specsearch.php" method="post">
                <button>Specific Search</button>
                   </form>
                <form action="update.php" method="post">
                <button>Update Result</button>
                </form>
                <form action="add.php" method="post">
                 <button>Add Student Result</button>
                </form>
                 <form action="delete.php" method="post">
                <button style=" margin-bottom: 20px;">Delete Student Result</button>
                 </form>
                
                </div>
        </div>
    </body>
</html>

