<?php 
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Error handling in php
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }

        h3 {
            color: rebeccapurple;
        }

        .containingDiv {
            border: 1px solid brown;
            margin-top: 100px;
            border-radius: 15px;
        }

    </style>
</head>

<body>
    <?php 
    //iincuding header
        include"1.18.headerFile.php";
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 containingDiv">
                <h1>SESSIONS:</h1>     
                <p>Sessions are the super global variable where we can store some data like POST and _GET varaibles </p>
                
                <?php 
                    //start a session
                session_start();
                //store data
                $_SESSION["firstname"] ="Roshan";
                $_SESSION["lastname"] = "Raut";
                $firstname = $_SESSION["firstname"];
                $lastname = $_SESSION["lastname"];
                
                //remove data from session
                if(isset($_SESSION["firstname"])){
                    unset($_SESSION["firstname"]);
                }
                echo $_SESSION["firstname"]?"Session has data":"Session data removed successfully";
                
                //destroy Session
                session_destroy();
                
                echo "<p>Namastey ! $firstname $lastname</p>";
                ?>
            </div>
               
    </div>
    <?php
    //including footer file
        include "2.18.footerFile.php";    
        
        
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>

<?php
ob_flush();
?>