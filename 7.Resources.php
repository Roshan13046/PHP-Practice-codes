<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Resource
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
        <h1>Resource : </h1>
        <p>It is a dataType variable which holds reference to external varaibles. </p>
        <?php 
            $myFile = fopen("someReadFile.txt","r");
            var_dump($myFile);
            echo "<br/";
            echo fread($myFile,30);//30bytes to read;
            //to read the complete file give the complete
            //size file
        echo fread($myFile,filesize("someReadFile.txt"));
        ?>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
