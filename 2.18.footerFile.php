<style>
    html{
        position: relative;
        min-height: 100%;
    }
    body{
        margin-bottom: 60px;
    }
    .footer{
        position: absolute;
        bottom : 0;
        color: red;
        background-color: aqua;
        width: 100%;
        height: 60px;
    }

</style>

<footer class="footer">
    <div class="container">
        <?php 
            $today = date("y");
        echo "Developed by Roshan Raut "."Copyright &copy: 2020 - $today";
        
        ?>
    
    </div>

</footer> 