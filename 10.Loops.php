<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
       loops in php
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
        <h1>Loops </h1>
        <?php 
        echo"For Loops :<br/>";
            for($i = 0 ;$i < 5;$i++){
                echo "$i ";
            }
            echo "<br/>";
            $names = array("a","b","c","d");
            foreach($names as $value){
                echo $value." , ";
            }
            echo"<br/>";
        
        //Associative array (key=>value)
        echo"Associative Array : "."<br/>";
        $basket = array("1"=>"fruits","3"=>"vegeies","10"=>"juices","11"=>"flour");
        
        foreach($basket as $key=>$value){
            echo $key." : ".$value."<br/>";    
        }
        
        echo"While Loops : <br/><br/>";
        $i = 1 ;
        while($i <= 5){
            echo $i."<br/>";
            $i++;
        }
        $i=0;
        while($i< $basket){
            $i++;
        }
        
        ?>
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>
