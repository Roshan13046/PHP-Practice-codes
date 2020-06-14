<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Variables
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <h1>Varaiables </h1>
        <p>
            <?php                
            $name = "Roshan Raut";
            $age = 33;
            echo "Hello ! I am ".$name." of age ".$age;
            ?>
        </p>
        <p>
        <?php 
        define("MODULO","1000000007")    ;
        echo "Constant value is ".MODULO;    
        
        ?>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
