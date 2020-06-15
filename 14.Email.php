<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Emails
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
        <h1>Emails in php</h1>
        
        
        
        <?php 
            $to = "roshanpk.raut@gmail.com";
            $subject = "Email using php";
            $message = "This is a trial email from Roshan using PHP language code";
        
            if(mail($to,$subject,$message)){
                echo "Email Sent Successfully<br/>";
            }else{
                echo "Email failed<br/>";
            }
            $message = "<html>
            <body>
                <h1 style='color:pink'>Namastey ! Email With html Send .</h1>
            </body>        
        </html>";
            $headers = "Content-type: text/html;";        
            echo mail($to,$subject,$message,$headers);
                    
        ?>
        
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>
</html>
